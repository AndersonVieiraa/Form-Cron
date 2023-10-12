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
<link rel="icon" type="imagem/ico" href="img/favicon.png" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<?php include "Dialogos/dlg_loading.html"; ?>

<body>
<!-- Início de MENU-->
<div   class="barratopo">
	<table border="0" class="tabletopo">
		<tr>
			<td class="tabletopo_colunalogo">				
				<a href="index.php"> <img src="http:ilustracoes/logo02.png" class="logo" /></a>
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
							<td align="center"><b>CHAMADOS</b></td>
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
						url="datagrid8_getdata_CHAMADOS.php<?php //echo $inicial; ?>"
						rownumbers="true" pagination="true" sortName="id" sortOrder="desc"
						title=""
						singleSelect="true" fitColumns="true" toolbar="#toolbar1">
					
					<thead>
						<tr>
							<th field="id_chamado" align="center" width="5">ID</th>
							<th field="tipochamado" align="center" width="10">TIPO</th>
							<th field="email" width="40">Email</th>
							<th field="chamado" width="75">Mensagem</th>
							<!--<th field="data" align="center" width="25">Data</th>
							<th field="hora" align="center" width="20">Hora</th>-->
						</tr>
					</thead>
				</table>
			
			<script type="text/javascript">
							
				
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
									href:'datagrid21_getdetail_CHAMADOS.php?itemid='+row.id_chamado,
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
//include "Dialogos/dlg_login_MO.php";
?>