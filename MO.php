<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form-CRON</title>

<link rel="stylesheet" type="text/css" href="../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="../easyui/datagrid-detailview.js"></script>
<link rel="icon" type="imagem/ico" href="img/favicon02.png" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<?php include "Dialogos/dlg_loading.html"; ?>

<body>
<!-- Início de MENU-->
<div   class="barratopo">
	<table border="0" class="tabletopo">
		<tr>
			<td class="tabletopo_colunalogo">				
				<a href="index.php"> <img src="https:ilustracoes/logo02.png" class="logo" /></a>
			</td>
			<td  align="right" valign="top" class="tabletopo_colunamenu">
			<font size="3" color='grey'>|</font><a class="transp2" href="index.php" style="text-decoration: none;"><font size="3" color='grey'> &nbsp  Página Inicial &nbsp</font></a>
			<font size="3" color='grey'>|</font><a class="transp2" href="javascript:void(0)" onclick="login()" style="text-decoration: none;"><font size="3" color='grey'> &nbsp Login &nbsp</a> |</font>
						
			</td>
		</tr> 

		<tr>
			<td colspan="2" class="titulocorpo">
					<table class="titulocorpo_tabela" border="0">
						<tr>
							<td align="center"><b>MO - Mensagens Operativas</b></td>
						</tr>
					</table>
			</td>
		</tr>
	</table>
</div>

<!-- Fim MENU-->

<div data-options="tools:'#tab-tools'" class="barracorpo">

	<!--<iframe scrolling="yes" frameborder="0"  src="Norte/sub-tab-acessantes.php" style="width:100%;height:100%;"></iframe>-->
	
	<div align="center" style="width: 100%; height: 100%;">
				<table id="dg3" border="0" style="width:100%;height:100%"
						url="https:datagrid8_getdata_MO.php"
						rownumbers="true" pagination="true" sortName="id" sortOrder="desc"
						title=""
						singleSelect="true" fitColumns="true" toolbar="#toolbar1">
					
					<thead>
						<tr>
							<th field="numero" align="center" width="13">Número</th>
							<th field="ano" align="center" width="10">Ano</th>
							<th field="destinatario" width="25">Destinatário</th>
							<th field="assuntotitulo" align="left" width="80">Assunto</th>
							<th field="emitenteusuario" align="center" width="30">Criado Por</th>
							<th field="data" align="center" width="25">Data</th>
							<th field="hora" align="center" width="20">Hora</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar1" style="padding:5px;">
				
					<a href="javascript:void(0)" class="easyui-linkbutton" style="padding:0px" onclick="imprimir()"plain="false"><img style="vertical-align:middle;margin-top:-3px; width:20px;height:23px;" src="img/pdf.png"> Visualizar PDF</a>
					<small><small><small><small><small><small><br><br></small></small></small></small></small></small>
	
					<input id="numero" type="search" placeholder="  Número" style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="ano" type="search" placeholder="  Ano" style="width:10%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="destinatario" type="search" placeholder=" Destinatário" style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="assuntotitulo"  type="search" placeholder=" Assunto"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="emitenteusuario"  type="search" placeholder=" Criado Por"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="data"  type="search" placeholder=" Data"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<a href="javascript:void(0)" onclick="doSearch()" class="easyui-linkbutton" style="padding:0px" iconCls="icon-search" plain="false">Buscar</a>
		
				</div>
			
			<script type="text/javascript">
						function imprimir(){
							row = $('#dg3').datagrid('getSelected');
							window.open("EDT/gerarpdf/index.php?id_mo="+row.id_mo);
			
							}
				
				
				jQuery('#id_mo').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							id_mo: $('#id_mo').val()
						});
				}
				});
				
				jQuery('#numero').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							numero: $('#numero').val()
						});
				}
				});
				
				jQuery('#ano').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							ano: $('#ano').val()
						});
				}
				});
				
				
				jQuery('#destinatario').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							destinatario: $('#destinatario').val()
						});
				}
				});

				jQuery('#assuntotitulo').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							assuntotitulo: $('#assuntotitulo').val()
						});
				}
				});
				

				jQuery('#emitenteusuario').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							emitenteusuario: $('#emitenteusuario').val()
						});
				}
				});
				
				jQuery('#data').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							data: $('#data').val()
						});
				}
				});
				
				jQuery('#hora').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							data: $('#hora').val()
						});
				}
				});

				function doSearch(){
					$('#dg3').datagrid('load',{
						id_mo: $('#id_mo').val(),
						numero: $('#numero').val(),
						ano: $('#ano').val(),
						destinatario: $('#destinatario').val(),
						assuntotitulo: $('#assuntotitulo').val(),
						emitenteusuario: $('#emitenteusuario').val(),
						data: $('#data').val()
					});
				}
	
				
					$(function(){
						$('#dg3').datagrid({
							view: detailview,
							detailFormatter:function(index,row){
								return '<div id="ddv-' + index + '"></div>';
							},
							onExpandRow: function(index,row){
								$('#ddv-'+index).panel({
									border:false,
									cache:false,
									href:'datagrid21_getdetail_MO.php?itemid='+row.id_mo,
									onLoad:function(){
										$('#dg3').datagrid('fixDetailRowHeight',index);
									}
								});
								$('#dg3').datagrid('fixDetailRowHeight',index);
							}
						});
					});
					
				</script>
			</div>	

</div>
 
	
</body>
</html>

<?php 
include "Dialogos/dlg_login_MO.php";
?>