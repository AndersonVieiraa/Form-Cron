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
			<td  class="tabletopo_colunalogo">				
				<a href="index-adm.php?name=<?php echo $name;?>"> <img src="https:ilustracoes/logo02.png" class="logo" /></a>
			</td>
			<td  align="right" valign="top" class="tabletopo_colunamenu">
			<font size="3" color='grey'>|</font><a class="transp2" href="index-adm.php?name=<?php echo $name;?>" style="text-decoration: none;"><font size="3" class="efeitomenu"> &nbsp  Página Inicial &nbsp</font></a>
			<font size="3" color='grey'>|</font><a class="transp2" href="logout.php" style="text-decoration: none;" > <font size="3" class="efeitomenu">&nbsp Logout &nbsp</a> </font>
			<font size="3" color='grey'>|</font> <font size="3" color="grey">&nbsp Olá, <?php echo $name;?> &nbsp </font>
			
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
	
	<div align="center" style="width: 100%; height: 100%;">
				<table id="dg3" border="0" style="width:100%;height:100%"
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
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="additem()"> Novo </a><font size="3" color='grey'> | </font>
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editarAI()"> Editar </a><font size="3" color='grey'> | </font>
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-redo" plain="true" onclick="criaridentico()"> Criar Idêntica </a><font size="3" color='grey'> | </font>
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" plain="true" onclick="destroyItem()"> Remover </a><font size="3" color='grey'> | </font>
					<a href="javascript:void(0)" class="easyui-linkbutton" onclick="imprimir()"plain="true"> <img style="vertical-align:middle;margin-top:-3px; width:20px;height:23px;" src="img/pdf.png"> Visualizar PDF</a>
					<small><small><small><small><small><small><br><br></small></small></small></small></small></small>
					
					<input id="numero" type="search" placeholder="  Número" style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="ano" type="search" placeholder="  Ano" style="width:8%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="equipamento" type="search" placeholder="  Equipamento" style="width:10%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="subestacao"  type="search" placeholder=" Subestação"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="servico"  type="search" placeholder=" Serviço"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="datainicio"  type="search" placeholder=" Início"style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="datafim"  type="search" placeholder=" Fim"style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="emitenteusuario"  type="search" placeholder=" Criado Por"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<a href="javascript:void(0)" onclick="doSearch()" class="easyui-linkbutton" iconCls="icon-search" plain="false">Buscar</a>
		
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
					
					
							function destroyItem(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirmação','Tem certeza que deseja remover o AI?',function(r){
					if (r){
						$.post('EDT/destroy_AI.php',{id:row.id_ai},function(result){
							if (result.success){
								$('#dg3').datagrid('reload');	// reload the user data
								$.messager.show({title:'Mensagem',msg:'AI Removido com Sucesso',timeout:2500,showType:'show'});
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
		
		
		function editarAI(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				window.location.href='AI-edita-form.php?name=<?php echo $name;?>&id_ai='+row.id_ai;
			}
		}


		function criaridentico(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				window.location.href='AI-duplica-form.php?name=<?php echo $name;?>&id_ai='+row.id_ai;
			}
		}
		
		
				
				</script>
			</div>	
</div>
 
</body>

<!--Diálogo para adicionar nova AI-->

		<div align="center" id="dlg" iconCls="icon-add" class="easyui-dialog" title="Cadastro de Acessante" style="width:90%; height:90%; padding:10px 10px; left:5%; top:0%;" closed="true" buttons="#dlg3-buttons">
		<!--<div><b><font color="303099">Criar Mensagem Operativa</font></b></div><br>-->
		<form id="fm6" method="post" novalidate>
			<div style="margin:0px 0;"></div>
			<div class="easyui-panel" style="overflow: auto; width:100%;padding:10px 10px">		
					<table border="0" style="width:100%;">
						<tr>
						<td>
							<div style="margin-bottom:20px">
								<input type="radio" name="classificacao" value="p">Programada
								<input type="radio" name="classificacao" value="u">Urgência
								<input type="radio" name="classificacao" value="e">Emergência
																
							</div>
						</td>
						</tr>
						<tr>
						<td>
							<div style="margin-bottom:10px">
								<input class="easyui-textbox" prompt="Equipamento a impedir" name="equipamento" iconWidth="28" style="width:370px;height:34px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38" required="true">
							</div>
							<div style="margin-bottom:10px">	
								<input class="easyui-textbox" prompt="Local: (Ex.: SE PED)" name="subestacao" iconWidth="28" style="width:370px;height:34px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38" required="true">
							</div>
							
							<div style="margin-bottom:25px">
								<table border="0" style="width:70%; padding:0px">
								<tr>
									<td style="width:15%;height:34px;padding:5px"><input class="easyui-datebox" prompt="Data Inicio" name="datainicio" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:10%;height:34px;padding:5px"><input class="easyui-timespinner" data-options="showSeconds:false" type="text" prompt="Hora Início" name="horainicio" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:10%;height:34px;padding:5px"></td>
									<td rowspan="2" style="width:45%;height:34px;padding:5px">
										<table border="1" style="width:100%; border-spacing:5px;  border-radius:7px;border:1px solid #B0C4DE;">
												<tr>
												<td style="width:100%;height:34px;padding:5px; border:0px"><i>Periodicidade:</i></td>
												</tr>
												<tr>
												<td style="width:75%;height:34px;padding:5px;border:0px">
													<input type="radio" name="periodicidade" value="Contínua">Contínua <br>
													<input type="radio" name="periodicidade" value="Diária">Diária
												</td>
												</tr>
										</table>
									</td>

								</tr>

								<tr colspan="4">
									<td style="width:15%;height:34px;padding:5px"><input class="easyui-datebox" prompt="Data Fim" name="datafim" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:10%;height:34px;padding:5px"><input class="easyui-timespinner" data-options="showSeconds:false" prompt="Hora Fim" name="horafim" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:20;height:34px;padding:5px"></td>
									
								</tr>
								</table>
							</div>						

							
							<div style="margin-bottom:25px">	
								<table border="0" style="width:60%; padding:0px">
								<tr>
									<td style="width:50%;height:34px;padding:5px">Tempo de manobra de Liberação:</td>   
									<td style="width:50%;height:34px;padding:5px"><input class="easyui-numberbox" prompt="" name="liberacao" iconWidth="28" style="width:20%;height:34px;padding:10px"> min </td>

								</tr>
								<tr>	
									<td style="width:50%;height:34px;padding:5px">Tempo de manobra de Normalização:</td>
									<td style="width:50%;height:34px;padding:5px"><input class="easyui-numberbox" name="normalizacao" iconWidth="28" style="width:20%;height:34px;padding:10px"> min</td>
								</tr>
								</table>
							</div>	
						
							<div style="margin-bottom:25px">
								<table><tr>
								<td>Em caso de necessidade pode-se dispor do equipamento em:</td>
								<td><input type="radio" name="devolucao" value="TempoDefinido">
								<input class="easyui-timespinner" prompt="" name="devolucaoHora" iconWidth="28" style="width:150px;height:34px;padding:15px"> (hh:mm)</td>
								<td style="padding:15px"><input type="radio" name="devolucao" style="padding:35px" value="Imediato">Imediato</td>
								<td style="padding:15px"><input type="radio" name="devolucao" style="padding:35px" value="Ao Final">Ao Final
								</td></tr>
								</table>
							<br>
							</div>						
							
							<div style="margin-bottom:35px">
								Condições do impedimento:<br><small><small><small><br></small></small></small>
								<table style="width:88%;">
									<tr><td>
										<div id="dvCentro">
											<TEXTAREA id="condicoes" name="condicoes"></TEXTAREA>
										</div>
								   </td></tr>
								</table>
									<script src="ckeditor/ckeditor.js"></script>
									<script>$(document).ready(function(){						
									CKEDITOR.replace( 'condicoes' );});				
									</script>
													
							</div>
										
							<div style="margin-bottom:20px">
								Serviços a executar:<br><small><small><small><br></small></small></small>
								<TEXTAREA name="servico" prompt="Serviços a executar" class="easyui-textbox" multiline="true" style="width:88%;height:100px;padding:15px"></TEXTAREA>
							</div>
							<div style="margin-bottom:20px">
								Observações:<br><small><small><small><br></small></small></small>
								<TEXTAREA name="observacoes" prompt="Observações" class="easyui-textbox" multiline="true" style="width:88%;height:80px;padding:15px"></TEXTAREA>
							</div>						
							<div style="margin-bottom:20px">
								Documentos internos vinculados:<br><small><small><small><br></small></small></small>
								<TEXTAREA name="docinterno" prompt="Documentos internos vinculados" class="easyui-textbox" multiline="true" style="width:88%;height:80px;padding:15px"></TEXTAREA>
							</div>						
							<div style="margin-bottom:20px">
								<table border="0" cellpadding="3" style="width:80%; height:10%;">
									<tr>
										<td colspan="2" style="text-align:center; padding:3px">Nomes do Pessoal notificado</td>
										<td colspan="2" style="text-align:center; padding:3px">Setor do Pessoal notificado</td>
										<td colspan="2" style="text-align:center; padding:3px">Empresa do Pessoal notificado</td>
									</tr>
									<tr>
										<td style="text-align:right; vertical-align: top; color: #B0C4DE;padding:7px">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15</td>
										<td style="width:30%;"><TEXTAREA name="notificadosnome" prompt="Nomes do Pessoal notificado" class="easyui-textbox" multiline="true" style="width:100%;height:300px;padding:5px"></TEXTAREA></td>
										<td style="text-align:right; vertical-align: top; color: #B0C4DE;padding:7px">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15</td>
										<td style="width:30%;"><TEXTAREA name="notificadossetor" prompt="Setor do Pessoal notificado" class="easyui-textbox" multiline="true" style="width:100%;height:300px;padding:5px"></TEXTAREA></td>
										<td style="text-align:right; vertical-align: top; color: #B0C4DE;padding:7px">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15</td>
										<td style="width:30%;"><TEXTAREA name="notificadosempresa" prompt="Empresa do Pessoal notificado" class="easyui-textbox" multiline="true" style="width:100%;height:300px;padding:5px"></TEXTAREA></td>
									</tr>
								</table>
							</div>
							
						</td>		
						<td valign="top"></td>
						</tr>
					</table>
				<a href="javascript:void(0)" onclick="listadetransmissao()" class="easyui-linkbutton" iconCls="icon-search" plain="false" style="width:250px"> Listas de Transmissão </a>
				<a href="javascript:void(0)" onclick="abrirAVA()" class="easyui-linkbutton" iconCls="icon-search" plain="false" style="width:120px"> AVA </a>
				<script> function abrirAVA(){ window.open('../AVA/index-adm.php', '', 'left=10, right=10, top=10, width=1400, height=1000')}</script>
									
			</div>
		</form>
		</div>
		<div id="dlg3-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="criarAI()" style="width:120px">Criar</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:120px">Cancelar</a>
		</div>
	<script>	
			function additem(){
			$('#dlg').dialog('open').dialog('setTitle','&nbsp Criar Novo AI');
			$('#fm6').form('clear');
			url = 'EDT/cadastrar-AI.php';
		}
	
				function criarAI(){
			$('#fm6').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg3').datagrid('reload');	// reload the user data
						$.messager.show({title:'Mensagem',msg:'AI Criado com Sucesso',timeout:2500,showType:'show'});
				}
			});
		}
	</script>
<!-- FIM Diálogo para adicionar nova AI-->

<iframe src="atualiza_session.php" width="0" height="0"></iframe>

</html>
<?php 
include "DLG_listadetransmissao.php"; 
include "contador_logout.php";
include "Mensagens/msg_AI.php";
 ?>
 
