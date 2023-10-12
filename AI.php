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

<!-- Início MENU-->
<div class="barratopo">

<table border="0" class="tabletopo">
		<tr>
			<td  class="tabletopo_colunalogo">				
				<a href="index.php"> <img src="https:ilustracoes/logo02.png" class="logo" /></a>
			</td>
			<td  align="right" valign="top" class="tabletopo_colunamenu">
			<font size="3" color='grey'>|</font><a class="transp2" href="index.php" style="text-decoration: none;"><font size="3" class="efeitomenu"> &nbsp  Página Inicial &nbsp</font></a>
			<font size="3" color='grey'>|</font><a class="transp2" href="javascript:void(0)" onclick="login()" style="text-decoration: none;"><font size="3" class="efeitomenu"> &nbsp Login &nbsp</a> |</font>
						
			</td>
		</tr> 

		<tr>
			<td colspan="2" class="titulocorpo">
					<table class="titulocorpo_tabela" border="0">
						<tr>
							<td align="center"><b>AI - Autorização para Impedimento de Equipamento de Interligação</b></td>
						</tr>
					</table>
			</td>
		</tr>
	</table>
</div>


<!-- Fim MENU-->


<div data-options="tools:'#tab-tools'" class="barracorpo">

	<!--<iframe scrolling="yes" frameborder="0"  src="Norte/sub-tab-acessantes.php" style="width:100%;height:100%;"></iframe>-->
	
	<div align="center" style="width:100%; height:100%; ">
				<table id="dg3" border="0" style="width:100%;height:100%; "
						url="datagrid8_getdata_AI.php<?php //echo $inicial; ?>"
						rownumbers="true" pagination="true" sortName="id" sortOrder="desc"
						title=""
						singleSelect="true" fitColumns="true" toolbar="#toolbar1">
					<thead>
						
						<tr>
							<th  field="numero" align="center" width="5">Nº</th>
							<th  field="ano" align="center" width="5">Ano</th>
							<th  field="equipamento" align="center" width="10">Equipamento</th>
							<th  field="subestacao" align="center" width="10">Local</th>
							<th  field="servico" align="left" width="39">Serviço</th>
							<th  field="datainicio" align="center" width="9">Data Inicio</th>
							<th  field="datafim" align="center" width="9">Data Fim</th>
							<th field="emitenteusuario" align="center" width="11">Criado Por</th>
							<th field="data" align="center" width="10">Data</th>
							<th field="hora" align="center" width="7">Hora</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar1" style="padding:5px;">
					<!--<a href="javascript:void(0)" onclick="imprimir()" class="easyui-linkbutton" iconCls="icon-print" plain="false">Imprimir</a>
					<a href="javascript:void(0)" onclick="PED_230kV()" class="easyui-linkbutton" iconCls="icon-tip" plain="false">PED 230kV</a><br><small><small><small><small><small><small><br></small></small></small></small></small></small>-->
 
					<a href="javascript:void(0)" class="easyui-linkbutton" style="padding:0px" onclick="imprimir()" plain="false"><table style="padding:0px;margin:0px; border-collapse:collapse;"><tr><td style="align:center;border:0px;padding:0px;margin:0px;"><img style="width:20px;height:23px;" src="img/pdf.png"></td><td style="align:center;padding-left:4px;">  Visualizar PDF</td></tr></table></a>
					<small><small><small><small><small><small><br><br></small></small></small></small></small></small>
					
					<input id="numero" type="search" placeholder="  Número" style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="ano" type="search" placeholder="  Ano" style="width:8%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="equipamento" type="search" placeholder="  Equipamento" style="width:10%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="subestacao"  type="search" placeholder=" Subestação"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="servico"  type="search" placeholder=" Serviço"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="datainicio"  type="search" placeholder=" Início"style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="datafim"  type="search" placeholder=" Fim"style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="emitenteusuario"  type="search" placeholder=" Criado Por"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<a href="javascript:void(0)" onclick="doSearch()" class="easyui-linkbutton" style="padding:0px" iconCls="icon-search" plain="false">Buscar</a>
		
				</div>
				

		</div>
				
				
				
		<script type="text/javascript">

				
				
		function imprimir(){
			row = $('#dg3').datagrid('getSelected');
			window.open("EDT/gerarpdf/index_AI.php?id_ai="+row.id_ai);
			
			}
			
			
				
				jQuery('#id_ai').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							id_ai: $('#id_ai').val()
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
				
				
				jQuery('#equipamento').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							equipamento: $('#equipamento').val()
						});
				}
				});

				jQuery('#subestacao').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							subestacao: $('#subestacao').val()
						});
				}
				});
				
				jQuery('#servico').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							servico: $('#servico').val()
						});
				}
				});
					
				jQuery('#datainicio').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							datainicio: $('#datainicio').val()
						});
				}
				});
				
				jQuery('#datafim').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							datafim: $('#datafim').val()
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
				

				

				function doSearch(){
					$('#dg3').datagrid('load',{
						id_ai: $('#id_ai').val(),
						numero: $('#numero').val(),
						ano: $('#ano').val(),
						equipamento: $('#equipamento').val(),
						subestacao: $('#subestacao').val(),
						servico: $('#servico').val(),
						datainicio: $('#datainicio').val(),
						datafim: $('#datafim').val(),
						emitenteusuario: $('#emitenteusuario').val()
					});
				}
	
				
					$(function(){
						$('#dg3').datagrid({
							view: detailview,
							detailFormatter:function(index,row){
								return '<div id="ddv-' + index + '" style="padding:5px 0"></div>';
							},
							onExpandRow: function(index,row){
								$('#ddv-'+index).panel({
									border:false,
									cache:false,
									href:'datagrid21_getdetail_AI.php?itemid='+row.id_ai,
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
include "DLG_listadetransmissao.php";
include "Dialogos/dlg_login_AI.php";
?>