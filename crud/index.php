<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<link rel="icon" type="imagem/ico" href="../../img/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="../../../easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="../../../easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="../../../easyui/themes/color.css">
	<link rel="stylesheet" type="text/css" href="../../../easyui/demo/demo.css">
	<script type="text/javascript" src="../../../easyui/jquery.min.js"></script>
	<script type="text/javascript" src="../../../easyui/jquery.easyui.min.js"></script>
	<link href="../wgrafael.css" rel="stylesheet" type="text/css" />
	
	
</head>
<br><br><br>
<table  width="80%" height="80%" align='center' cellpadding="0" cellspacing="0" border="1">
<tr><td>
<body>


<?php
if (session_id()==""){session_start();}

//include "../permissaoN2.php";
include "../config.php";
?>



	<table id="dg" title="Usuários" class="easyui-datagrid" style="width:100%;height:100%"
			url="get_users.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="nome" width="100">Nome</th>
				<th field="login" width="50">Login</th>
				<th field="email" width="100">Email</th>
				<th field="nivel" width="20">Perfil</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Novo</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remover</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-back" plain="true" onclick="href='../index-adm.php'">Voltar</a>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:300px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Informação do Usuário</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>Nome:</label>
				<input name="nome" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Login:</label>
				<input name="login" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Email:</label>
				<input name="email" class="easyui-textbox" validType="email">
			</div>
			<div class="fitem">
				<label>Setor:</label>
				<input name="setor" class="easyui-textbox">
			</div>
			<div class="fitem">
				<label>Senha:</label>
				<input name="senha" class="easyui-textbox" type="password">
			</div>
			
			<div class="fitem">	
					
				&nbsp;<select class="easyui-combobox" name="nivel"  label="Perfil:" labelPosition="left" style="width:90%;">
				<option value="1">Comum</option>
				<option value="2">Admnistrador</option>
				</select>
			
			</div>
						
			
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
	</div>
	<script type="text/javascript">
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','Novo Usuário');
			$('#fm').form('clear');
			url = 'save_user.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Editar Usuário');
				$('#fm').form('load',row);
				url = 'update_user.php?id='+row.id;
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){
						$.messager.show({
							title: 'Error',
							msg: result.errorMsg
						});
					} else {
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					}
				}
			});
		}
		function destroyUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirmação','Tem certeza que deseja remover o usuário?',function(r){
					if (r){
						$.post('destroy_user.php',{id:row.id},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.errorMsg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width:160px;
		}
	</style>
</body>

</td>
</tr>
</table>

</html>