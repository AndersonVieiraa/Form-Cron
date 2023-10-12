<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORM</title>

<link rel="stylesheet" type="text/css" href="../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
<link rel="icon" type="imagem/ico" href="img/favicon02.png" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<?php 
//include "permissaoN2.php";
$name = $_GET['name'];
include "Dialogos/dlg_loading_adm.html"; 
?>

<body>

<!-- Início MENU-->
<div class="barratopo">
<table border="0" class="tabletopo">
		<tr>
			<td   class="tabletopo_colunalogo">				
				<a href="index-adm.php"> <img src="https:ilustracoes/logo02.png" class="logo" /></a>
			</td>
			<td  align="right" valign="top" class="tabletopo_colunamenu">
			<font size="3" color='grey'>|</font><a class="transp2" href="index-adm.php" style="text-decoration: none;"><font size="3" class="efeitomenu"> &nbsp  Página Inicial &nbsp</font></a>
			<font size="3" color='grey'>|</font><a class="transp2" href="logout.php" style="text-decoration: none;" > <font size="3" class="efeitomenu">&nbsp Logout &nbsp</a> </font>
			<font size="3" color='grey'>|</font> <font size="3" color='grey'>&nbsp Olá, <?php echo $name;?> &nbsp </font>
			
			</td>
		</tr> 

		<tr>
			<td colspan="2" class="titulocorpo">
					<table class="titulocorpo_tabela" border="0">
						<tr>
							<td align="center"><b>Gerenciador de Usuários</b></td>
						</tr>
					</table>
			</td>
		</tr>
	</table>

</div>
<!-- Fim MENU-->

<div data-options="tools:'#tab-tools'" class="barracorpo">
	
<div align=center style="width: 100%; height: 100%;">
	<table id="dg" border="0" title="" class="easyui-datagrid" style="width:100%;height:100%;"
			url="crud/get_users.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="nome" width="100">Nome</th>
				<th field="login" width="50">Login</th>
				<th field="email" width="100">Email</th>
				<th field="setor" width="100">Setor</th>
				<th field="nivel" width="20">Perfil</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar" style="padding:5px;">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="false" onclick="newUser()">Novo</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="false" onclick="editUser()">Editar</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="false" onclick="destroyUser()">Remover</a>
		<small><small><small><small><small><small><br><br></small></small></small></small></small></small>
		
		<input id="nome" type="search" placeholder="  Nome" style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
		<input id="login" type="search" placeholder="  Login" style="width:10%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
		<input id="setor" type="search" placeholder="  Setor" style="width:10%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
		<input id="nivel"  type="search" placeholder=" Nível"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
		<a href="javascript:void(0)" onclick="doSearch()" class="easyui-linkbutton" iconCls="icon-search" plain="false">Buscar</a>		
		
	</div>
	
	<div id="dlg2" class="easyui-dialog" style="width:400px;height:380px;padding:10px 20px; left:20%; top:3%;"
			closed="true" buttons="#dlg-buttons2">
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
				<input name="senha" class="easyui-textbox" type="password" required="true">
			</div>
			
			<div class="fitem">	
					
				&nbsp;<select class="easyui-combobox" name="nivel"  label="Perfil:" labelPosition="left" style="width:84%;" required="true">
				<option value="1">Comum</option>
				<option value="2">Administrador</option>
				</select>
			
			</div>
						
			
		</form>
	</div>
	<div id="dlg-buttons2">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg2').dialog('close')" style="width:90px">Cancel</a>
	</div>
	<script type="text/javascript">
	
				jQuery('#id').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg').datagrid('load',{
							id: $('#id').val()
						});
				}
				});
				
				
				
				jQuery('#nome').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg').datagrid('load',{
							nome: $('#nome').val()
						});
				}
				});
				
				jQuery('#login').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg').datagrid('load',{
							login: $('#login').val()
						});
				}
				});
				
				
				jQuery('#setor').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg').datagrid('load',{
							setor: $('#setor').val()
						});
				}
				});

							
				jQuery('#nivel').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg').datagrid('load',{
							nivel: $('#nivel').val()
						});
				}
				});
				
			
				function doSearch(){
					$('#dg').datagrid('load',{
						nome: $('#nome').val(),
						login: $('#login').val(),
						setor: $('#setor').val(),
						nivel: $('#nivel').val(),
						
					});
				}
		
	
		var url;
		function newUser(){
			$('#dlg2').dialog('open').dialog('setTitle','Novo Usuário');
			$('#fm').form('clear');
			url = 'crud/save_user.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg2').dialog('open').dialog('setTitle','Editar Usuário');
				$('#fm').form('load',row);
				url = 'crud/update_user.php?id='+row.id;
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
						$('#dlg2').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					}
				}
			});
			$('#dlg2').dialog('close');		// close the dialog
			$('#dg').datagrid('reload');
		}
		function destroyUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirmação','Tem certeza que deseja remover o usuário?',function(r){
					if (r){
						$.post('crud/destroy_user.php',{id:row.id},function(result){
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
		
</div>	
</div>	
<!--Fim Diálogo de gerenciar usuários-->	
			
		

</body>


	<iframe src="atualiza_session.php" width="0" height="0"></iframe>

</html>
<?php 
include "contador_logout.php";
 ?>