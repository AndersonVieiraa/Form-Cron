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


<?php 
//include "permissaoN1.php";
$name = $_GET['name'];
include "Dialogos/dlg_loading_adm.html";
 ?>	

<body>

<!-- Início MENU-->
<div class="barratopo">
<table border="0" class="tabletopo">
		<tr>
			<td class="tabletopo_colunalogo">				
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
				
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="additem()">Novo</a><font size="3" color='grey'> | </font>
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editarITEM()">Editar Dados</a><font size="3" color='grey'> | </font>
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-redo" plain="true" onclick="criaridentico()">Criar Idêntica</a><font size="3" color='grey'> | </font>
					<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" plain="true" onclick="destroyItem()">Remover</a>  
					<small><small><small><small><small><small><br><br></small></small></small></small></small></small>
					
					<input id="acessante" type="search" placeholder="  Acessante" style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="nome" type="search" placeholder="  Nome/Nº documento" style="width:18%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="ses" type="search" placeholder="  Subestação" style="width:10%; line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="emitenteusuario"  type="search" placeholder=" Criado por"style="width:10%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<input id="data"  type="search" placeholder=" Data"style="width:8%;line-height:26px;border:1px solid #aaa; border-radius:5px;">
					<a href="javascript:void(0)" onclick="doSearch()" class="easyui-linkbutton" iconCls="icon-search" plain="false">Buscar</a>
		
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
					
					
							function destroyItem(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirmação','Tem certeza que deseja remover o Arquivo?',function(r){
					if (r){
						$.post('EDT/destroy_RECEBIDOS.php',{id:row.id_recebidos, nome:row.nome},function(result){
							if (result.success){
								$('#dg3').datagrid('reload');	// reload the user data
								$.messager.show({title:'Mensagem',msg:'Documento Removido com Sucesso',timeout:2500,showType:'slide'});
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
			</div>	

</div>
 


</body>

<!--Diálogo para adicionar nova-->

		<div align="center" id="dlg" iconCls="icon-add" class="easyui-dialog" title="Cadastro de Documento" style="width:60%; height:70%; padding:10px 10px; left:5%; top:0%;" closed="true" buttons="#dlg3-buttons">
		<!--<div><b><font color="303099">Criar Mensagem Operativa</font></b></div><br>-->
		<form id="fm6" method="post" enctype="multipart/form-data" novalidate>
			<div style="margin:0px 0;"></div>
			<div class="easyui-panel" style="overflow: auto; width:100%;padding:5px 5px">		
					<table border="0" style="width:100%;">

						<tr>
						<td>
							<div style="margin-bottom:10px">
							<table cellpadding="5" border="0">
							<tr>
							<td>Acessante:</td><td><input class="easyui-textbox" prompt="Acessante" name="acessante" iconWidth="28" style="width:370px;height:34px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38" required="true"></td>
							</tr>
							<tr>
							<td>Subestação envolvida:</td>
							<td> <input class="easyui-textbox" prompt="SE´s relacionadas" name="ses" iconWidth="28" style="width:370px;height:34px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38" ></td>
							</tr>
							</table>
							</div>
							
							<div style="margin-bottom:10px">
								Alguma ação para o Tempo Real CRON?
								<input type="radio" name="classificacao" value="SIM">Sim
								<input type="radio" name="classificacao" value="NÃO">Não
							</div>
							<br>
														
						</td>		
						</tr>
						<tr>
						<td style="padding:0px 0px;border:0px solid #4682B4;">
						  Selecione o arquivo: <input type="file" name="arquivo" />
						</td>
						</tr>
					</table><br>
					<table border="0" cellpadding="0" style="width:90%;">
							<tr>
							<td>Observações:</td>
							</tr>
							<tr>
							<td>
							
							<TEXTAREA name="observacao" prompt="Observações" class="easyui-textbox" multiline="true" style="width:100%;height:80px;padding:5px"></TEXTAREA></td>
							</tr>
					</table>
							
									
			</div>
		</form>
		</div>
		<div id="dlg3-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="criarRECEBIDOS()" style="width:120px">Criar</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:120px">Cancelar</a>
		</div>
		
		<div style="padding:10px 200px">
   

		
	<script>	
			function additem(){
			$('#dlg').dialog('open').dialog('setTitle','&nbsp Criar Novo Documento');
			$('#fm6').form('clear');
			url = 'EDT/cadastrar-RECEBIDOS.php';
		}
	
				function criarRECEBIDOS(){
			$('#fm6').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg3').datagrid('reload');	// reload the user data
						$.messager.show({title:'Mensagem',msg:'Documento Criado com Sucesso',timeout:2500,showType:'slide'});
				}
			});
		}
	</script>
<!-- FIM Diálogo para adicionar nova-->



<!-- Diálogo editar -->
<div id="dlg7" iconCls="icon-edit" class="easyui-dialog" align='center' style="width:60%; height:70%; padding:10px 10px; left:5%; top:0%;"closed="true" buttons="#dlg5-buttons">
				<form id="fm7" method="post" enctype="multipart/form-data" novalidate>
			<div style="margin:0px 0;"></div>
			<div class="easyui-panel" style="overflow: auto; width:100%;padding:5px 5px">		
					<table border="0" style="width:100%;">

						<tr>
						<td>
							<div style="margin-bottom:10px">
							<table cellpadding="5" style="">
							<tr>
							<td>Acessante:</td><td><input class="easyui-textbox" prompt="Acessante" name="acessante" iconWidth="28" style="width:370px;height:34px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38" required="true"></td>
							</tr>
							
							<tr>
							<td>Subestação envolvida:</td>
							<td> <input class="easyui-textbox" prompt="SE´s relacionadas" name="ses" iconWidth="28" style="width:370px;height:34px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38" ></td>
							</tr>
							</table>
							</div>
							
							<div style="margin-bottom:10px"><br>
								Alguma ação para o Tempo Real CRON?
								<input type="radio" name="classificacao" value="SIM">Sim
								<input type="radio" name="classificacao" value="NÃO">Não
																
							</div>
														
						</td>		
						</tr>
						<!--<tr>
						<td style="padding:0px 0px;border:0px solid #4682B4;">
							Selecione o arquivo: <input type="file" name="arquivo" />
						</td>
						</tr>-->
					</table>
					<br>
					<table border="0" cellpadding="0" style="width:90%;">
							<tr>
							<td>Observações:</td>
							</tr>
							<tr>
							<td>
							
							<TEXTAREA name="observacao" prompt="Observações" class="easyui-textbox" multiline="true" style="width:100%;height:80px;padding:5px"></TEXTAREA></td>
							</tr>
					</table>
									
			</div>
		</form>
	</div>
		<div id="dlg5-buttons">
			<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveeditITEM()" style="width:190px">Salvar Alteração</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg7').dialog('close')" style="width:120px">Cancelar</a>
		</div>
		<script>

				
		function editarITEM(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				$('#dlg7').dialog('open').dialog('setTitle','&nbsp Editar Documentos Recebidos');
				$('#fm7').form('load',row);
				url = 'EDT/altera-RECEBIDOS.php?id_recebidos='+row.id_recebidos;
			}
		}
		function saveeditITEM(){
			$('#fm7').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){

						$('#dlg7').dialog('close');		// close the dialog
						$('#dg3').datagrid('reload'); 	// reload the user data
						$.messager.show({title:'Mensagem',msg:'Documento Alterado com Sucesso',timeout:2500,showType:'slide'});
					
				}
			});
		}
	</script>
<!--Fim diálogo Editar-->



<!-- Diálogo duplicar -->
<div id="dlg8" iconCls="icon-edit" class="easyui-dialog" align='center' style="width:60%; height:70%; padding:10px 10px; left:5%; top:0%;"closed="true" buttons="#dlg8-buttons">
				<form id="fm8" method="post" enctype="multipart/form-data" novalidate>
			<div style="margin:0px 0;"></div>
			<div class="easyui-panel" style="overflow: auto; width:100%;padding:5px 5px">		
					<table border="0" style="width:100%;">

						<tr>
						<td>
							<div style="margin-bottom:10px">
							<table cellpadding="5" style="">
							<tr>
							<td>Acessante:</td><td><input class="easyui-textbox" prompt="Acessante" name="acessante" iconWidth="28" style="width:370px;height:34px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38" required="true"></td>
							</tr>
							
							<tr>
							<td>Subestação envolvida:</td>
							<td> <input class="easyui-textbox" prompt="SE´s relacionadas" name="ses" iconWidth="28" style="width:370px;height:34px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38" ></td>
							</tr>
							</table>
							</div>
							
							<div style="margin-bottom:10px"><br>
								Alguma ação para o Tempo Real CRON?
								<input type="radio" name="classificacao" value="SIM">Sim
								<input type="radio" name="classificacao" value="NÃO">Não
																
							</div>
							<br>
														
						</td>		
						</tr>
						<tr>
						<td style="padding:0px 0px;border:0px solid #4682B4;">
							Selecione o arquivo: <input type="file" name="arquivo" required="true"/>
						</td>
						</tr>
					</table>
					<br>
					<table border="0" cellpadding="0" style="width:90%;">
							<tr>
							<td>Observações:</td>
							</tr>
							<tr>
							<td>
							
							<TEXTAREA name="observacao" prompt="Observações" class="easyui-textbox" multiline="true" style="width:100%;height:80px;padding:5px"></TEXTAREA></td>
							</tr>
					</table>
									
			</div>
		</form>
	</div>
		<div id="dlg8-buttons">
			<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="savenovoDOC()" style="width:190px">Criar</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg8').dialog('close')" style="width:120px">Cancelar</a>
		</div>
		<script>

		function criaridentico(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				$('#dlg8').dialog('open').dialog('setTitle','&nbsp RECEBIDOS - Criar como Modelo');
				$('#fm8').form('load',row);
				url = 'EDT/cadastrar-RECEBIDOS.php';
			}
		}
		
		
			function savenovoDOC(){
			$('#fm8').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){

						$('#dlg8').dialog('close');		// close the dialog
						$('#dg3').datagrid('reload');	// reload the user data
						$.messager.show({title:'Mensagem',msg:'DOCUMENTO Criado com Sucesso',timeout:2500,showType:'slide'});
					
				}
			});
		}

	</script>
<!--Fim diálogo duplicar-->



	<iframe src="atualiza_session.php" width="0" height="0"></iframe>

</html>
<?php 
include "DLG_listadetransmissao.php"; 
include "contador_logout.php";
 ?>