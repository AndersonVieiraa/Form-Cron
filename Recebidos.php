<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form-CRON</title>

<link rel="stylesheet" type="text/css" href="../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/color.css">
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
			<td   class="tabletopo_colunalogo">				
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
							<td align="center"><b>FORMULÁRIOS RECEBIDOS DE ACESSANTES</b></td>
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
						url="datagrid8_getdata_RECEBIDOS.php<?php //echo $inicial; ?>"
						rownumbers="true" pagination="true" sortName="id" sortOrder="desc"
						title=""
						singleSelect="true" fitColumns="true" toolbar="#toolbar1">
					<thead>
						
						<tr>
							<th  field="acessante" align="center" width="10">Acessante</th>
							<th  field="nome" align="center" width="15">Nome/Nº documento</th>
							<th  field="ses" align="center" width="10">SE´s relacionadas</th>
							<th  field="classificacao" align="center" width="12" data-options="formatter:formatPrice">Exige Ação em Tempo Real?</th>
							<th field="emitenteusuario" align="center" width="10">Criado Por</th>
							<th field="data" align="center" width="7">Data</th>
							<th field="hora" align="center" width="5">Hora</th>
							
						</tr>
					</thead>
					
					
					    <script>
							function formatPrice(val,row){
								if (val == 'SIM'){
									return '<span style="color:red;">'+val+'</span>';
								} else {
									return '<span style="color:green;">'+val+'</span>';
									//return val;
								}
							}
						</script>
					
					
					
					
				</table>
				<div id="toolbar1" style="padding:5px;">
				
		
					<input id="acessante" type="search" placeholder="  Acessante" style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="nome" type="search" placeholder="  Nome/Nº documento" style="width:18%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="ses" type="search" placeholder="  Subestação" style="width:10%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="emitenteusuario"  type="search" placeholder=" Criado por"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="data"  type="search" placeholder=" Data"style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<a href="javascript:void(0)" onclick="doSearch()" class="easyui-linkbutton" style="padding:0px" iconCls="icon-search" plain="false">Buscar</a>
		
				</div>
				

		</div>
				
				
				
				<script type="text/javascript">

				
				jQuery('#id_recebidos').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							id_recebidos: $('#id_recebidos').val()
						});
				}
				});
				
				jQuery('#acessante').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							acessante: $('#acessante').val()
						});
				}
				});
				
				jQuery('#nome').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							nome: $('#nome').val()
						});
				}
				});
				
				
				jQuery('#ses').keypress(function(event){

					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						$('#dg3').datagrid('load',{
							ses: $('#ses').val()
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
				
			
				function doSearch(){
					$('#dg3').datagrid('load',{
						id_recebidos: $('#id_recebidos').val(),
						acessante: $('#acessante').val(),
						nome: $('#nome').val(),
						ses: $('#ses').val(),
						emitenteusuario: $('#emitenteusuario').val(),
						data: $('#data').val()
						
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
									href:'datagrid21_getdetail_RECEBIDOS.php?itemid='+row.id_recebidos,
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
include "Dialogos/dlg_login_RECEBIDOS.php"; 
 ?>