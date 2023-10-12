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

<?php 
//include "permissaoN1.php";
include "Dialogos/dlg_loading_adm.html";
$name = $_GET['name'];
?> 

<body>

<!-- Início MENU-->
<div class="barratopo">

<table border="0" class="tabletopo">
		<tr>
			<td   class="tabletopo_colunalogo">				
				<a href="index-adm.php?name=<?php echo $name;?>"> <img src="https:ilustracoes/logo02.png" class="logo" /></a>
			</td>
			<td  align="right" valign="top" class="tabletopo_colunamenu">
			<font size="3" color='grey'>|</font><a class="transp2" href="index-adm.php?name=<?php echo $name;?>" style="text-decoration: none;"><font size="3" class="efeitomenu"> &nbsp  Página Inicial &nbsp</font></a>
			<font size="3" color='grey'>|</font><a class="transp2" href="logout.php" style="text-decoration: none;" > <font size="3" class="efeitomenu">&nbsp Logout &nbsp</a> </font>
			<font size="3" color='grey'>|</font> <font size="3" color='grey'>&nbsp Olá, 
			<?php  echo $name;?> &nbsp </font>
			
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
	
	<div align="center" style="width: 100%; height:100%;">
				<table id="dg3" border="0" style="width:100%; height:100%"
						url="datagrid8_getdata_MO.php<?php //echo $inicial; ?>"
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
					<!--<a href="javascript:void(0)" onclick="imprimir()" class="easyui-linkbutton" iconCls="icon-print" plain="false">Imprimir</a>
					<a href="javascript:void(0)" onclick="PED_230kV()" class="easyui-linkbutton" iconCls="icon-tip" plain="false">PED 230kV</a><br><small><small><small><small><small><small><br></small></small></small></small></small></small>-->
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="additem()">Novo </a> <font size="3" color='grey'> | </font>				
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editarMO()">Editar </a><font size="3" color='grey'> |</font>
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-redo" plain="true" onclick="criaridentico()">Criar Idêntica </a><font size="3" color='grey'> |</font>
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" plain="true" onclick="destroyItem()">Remover</a><font size="3" color='grey'> |</font>
					<a href="javascript:void(0)" class="easyui-linkbutton"  onclick="imprimir()"plain="true"><img style="vertical-align:middle;margin-top:-3px; width:20px;height:23px;" src="img/pdf.png"> Visualizar PDF</a>
					<small><small><small><small><small><small><br><br></small></small></small></small></small></small>
					
					<input id="numero" type="search" placeholder="  Número" style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="ano" type="search" placeholder="  Ano" style="width:10%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="destinatario" type="search" placeholder=" Destinatário" style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="assuntotitulo" type="search" placeholder=" Assunto" style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="emitenteusuario"  type="search" placeholder=" Criado Por"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="data"  type="search" placeholder=" Data"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<a href="javascript:void(0)" onclick="doSearch()" class="easyui-linkbutton" iconCls="icon-search" plain="false">Buscar</a>
		
				</div>
				

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
								return '<div id="ddv-' + index + '" style="padding:5px 0"></div>';
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
					
					
							function destroyItem(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirmação','Tem certeza que deseja remover a MO?',function(r){
					if (r){
						$.post('EDT/destroy_MO.php',{id:row.id_mo},function(result){
							if (result.success){
								$('#dg3').datagrid('reload');	// reload the user data
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
		
		function editarMO(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				window.location.href='MO-edita-form.php?name=<?php echo $name;?>&id_mo='+row.id_mo;
			}
		}


		function criaridentico(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				window.location.href='MO-duplica-form.php?name=<?php echo $name;?>&id_mo='+row.id_mo;
			}
		}
		
			
						
				</script>
			</div>	

</div>
 


</body>

<!--Diálogo para adicionar nova MO-->

		<div align="center" id="dlg" iconCls="icon-add" class="easyui-dialog" title="Cadastro de Acessante" style="width:80%; height:90%; padding:10px 10px; left:5%; top:0%;" closed="true" buttons="#dlg3-buttons">
		<!--<div><b><font color="303099">Criar Mensagem Operativa</font></b></div><br>-->
		<form id="fm6" method="post" novalidate>
			<div style="margin:0px 0;"></div>
			<div class="easyui-panel" style="overflow: auto; width:100%;padding:10px 10px">		
					<table border="0" style="width:100%;">
					<tr><td>
					<div style="margin-bottom:20px">
						<input type="radio" name="classificacao" value="p">Programada
						<input type="radio" name="classificacao" value="u">Urgência
						<input type="radio" name="classificacao" value="e">Emergência
					</div>
					</td></tr>
					<tr>
					<td>
					<div style="margin-bottom:10px">
						<input class="easyui-textbox" prompt="Empresa Destinatária" name="destinatario" iconWidth="28" style="width:370px;height:34px;padding:15px;" data-options="prompt:'Username',iconCls:'icon-man',iconWidth:38" required="true">
					</div>		
	
					<div style="margin-bottom:10px">
						<input class="easyui-textbox" prompt="Área do destinatário" name="areadestinatario" iconWidth="28" style="width:45%;height:34px;padding:15px">
					</div>
					<div style="margin-bottom:10px">					
						<input class="easyui-textbox" prompt="Nomes dos destinatários" name="nomedestinatario" iconWidth="28" style="width:45%;height:34px;padding:15px">
						<a href="javascript:void(0)" onclick="abrirAVA()" class="easyui-linkbutton" iconCls="icon-search" plain="false" style="width:90px"> AVA </a>
						<script> function abrirAVA(){ window.open('../AVA/index-adm.php', '', 'left=10, right=10, top=10, width=1400, height=1000')}</script>
					</div>
					
					<div style="margin-bottom:10px">
						<input class="easyui-textbox" prompt="Título do assunto" name="assuntotitulo" iconWidth="28" style="width:90%;height:34px;padding:15px">
					</div>
					
					<div style="margin-bottom:20px">
							<div style="padding:5px">Mensagem:</div>
							<div id="dvCentro">
								<TEXTAREA id="Assunto" name="assunto"></TEXTAREA>
							</div>
							<script src="ckeditor/ckeditor.js"></script>
							<script> 
								$(document).ready(function(){
								
								CKEDITOR.replace( 'Assunto' );
								});	
								
							</script>					
					</div>
				
				
					</td>		
					<td valign="top"></td>
										</tr>
					</table>
									
			</div>
		</form>
		</div>
		<div id="dlg3-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="criarMO()" style="width:120px">Criar</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:120px">Cancelar</a>
		</div>
	<script>	
			function additem(){
			$('#dlg').dialog('open').dialog('setTitle','&nbsp Criar Nova MO');
			$('#fm6').form('clear');
			url = 'EDT/cadastrar-MO.php';
		}
	
				function criarMO(){
			$('#fm6').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg3').datagrid('reload');	// reload the user data
						$.messager.show({title:'Mensagem',msg:'MO Criada com Sucesso',timeout:2500,showType:'slide'});
				}
			});
		}
	</script>
<!-- FIM Diálogo para adicionar nova MO-->

<iframe src="atualiza_session.php" width="0" height="0"></iframe>

</html>
<?php 
include "VerificaAnoNumeracao.php";
include "contador_logout.php";
include "Mensagens/msg_MO.php";
?>

 