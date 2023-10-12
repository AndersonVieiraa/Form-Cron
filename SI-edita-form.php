﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
</head>

<div style="position:relative; z-index:2;">
<?php 
include "permissaoN1.php";
include "Menu/index_AI.html";
include_once 'conn.php'; 
$id = intval($_REQUEST['id_ai']);
$rs = mysql_query("select * from AI where id_ai='$id'");
$item = mysql_fetch_array($rs); 

 ?>	
</div>	


<body style="inline-block; width:100%; height:100%; padding:0px; background:rgba(240,240,240);">

<!-- Diálogo editar AI -->
		<form id="fm7" method="post" novalidate>
			<div class="easyui-panel" style="width:100%;padding:10px 10px">		
					<table align="center" border="0" style="width:90%; border-spacing:7px; border-radius:7px; border:1px solid #96C2F4;">
					
						<tr ><td colspan="2">
							<table style="width:350px; border-spacing:5px;  border-radius:7px; border:1px solid #96C2F4; background:rgba(250,250,250);">
								<tr>
								<td style="padding:3px;">
								Editando: <font color='red'>AI Nº <?php echo $item['numero']; echo "/"; echo $item['ano'];?> </font>
								</td>
								</tr>
							</table>	
						</td></tr>
					
						<tr >
							<div style="margin-bottom:0px">  
							<td style="padding:15px" > Classificação:
								<input type="radio" name="classificacao" value="p" <?php $p="p"; if ($item['classificacao'] ==$p) {echo "checked";} else {echo '';}?> >Programada
								<input type="radio" name="classificacao" value="u" <?php $u="u"; if ($item['classificacao'] ==$u) {echo "checked";} else {echo '';}?> >Urgência
								<input type="radio" name="classificacao" value="e" <?php $e="e"; if ($item['classificacao'] ==$e) {echo "checked";} else {echo '';}?>>Emergência
							</td>
							</div>
						</tr>
						
						<tr>
						<td>
							<div style="margin-bottom:10px">
								<table cellpadding="2" style="border-spacing:10px;">
								<tr>
								<td>Equipamento a impedir:</td> 
								<td><input class="easyui-textbox" prompt="Equipamento a impedir" value="<?php echo nl2br($item['equipamento']);?>" name="equipamento" iconWidth="28" style="width:370px;height:34px;padding:15px;" required="true"></td>
								<tr>
								<td>Local: </td>
								<td><input class="easyui-textbox" prompt="Local: (Ex.: SE PED)" value="<?php echo nl2br($item['subestacao']);?>" name="subestacao" iconWidth="28" style="width:370px;height:34px;padding:15px;" required="true"></td>
								</tr>
								</table>
							</div>
							
							<div style="margin-bottom:25px">
								<table border="0" style="width:70%; padding:0px">
								<tr>
									<td style="width:20%;">Data/Hora Início:</td>
									<td style="width:15%;height:34px;padding:5px"><input class="easyui-datebox" prompt="Data Inicio" value="<?php echo nl2br($item['datainicio']);?>" name="datainicio" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:10%;height:34px;padding:5px"><input class="easyui-timespinner" data-options="showSeconds:false" type="text" prompt="Hora Início" value="<?php echo nl2br($item['horainicio']);?>" name="horainicio" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:10%;height:34px;padding:5px"></td>
									<td rowspan="2" style="width:45%;height:34px;padding:5px">
										<table border="1" style="width:100%; border-spacing:5px;  border-radius:7px;border:1px solid #B0C4DE;">
												<tr>
												<td style="width:100%;height:34px;padding:5px; border:0px"><i>Periodicidade:</i></td>
												</tr>
												<tr>
												<td style="width:75%;height:34px;padding:5px;border:0px">
													<input type="radio" name="periodicidade" value="Contínua" <?php $p="Contínua"; if ($item['periodicidade'] ==$p) {echo "checked";} else {echo '';}?>>Contínua <br>
													<input type="radio" name="periodicidade" value="Diária" <?php $p="Diária"; if ($item['periodicidade'] ==$p) {echo "checked";} else {echo '';}?>>Diária
												</td>
												</tr>
										</table>
									</td>

								</tr>

								<tr colspan="5">
									<td style="width:20%;">Data/Hora Fim: </td>								
									<td style="width:15%;height:34px;padding:5px"><input class="easyui-datebox" prompt="Data Fim" value="<?php echo nl2br($item['datafim']);?>" name="datafim" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:10%;height:34px;padding:5px"><input class="easyui-timespinner" data-options="showSeconds:false" prompt="Hora Fim" value="<?php echo nl2br($item['horafim']);?>" name="horafim" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:20;height:34px;padding:5px"></td>
									
								</tr>
								</table>
							</div>						

							
							<div style="margin-bottom:25px">	
								<table border="0" style="width:60%; padding:0px">
								<tr>
									<td style="width:50%;height:34px;padding:5px">Tempo de manobra de Liberação:</td>   
									<td style="width:50%;height:34px;padding:5px"><input class="easyui-numberbox" prompt="" value="<?php echo nl2br($item['liberacao']);?>" name="liberacao" iconWidth="28" style="width:20%;height:34px;padding:10px"> min </td>

								</tr>
								<tr>	
									<td style="width:50%;height:34px;padding:5px">Tempo de manobra de Normalização:</td>
									<td style="width:50%;height:34px;padding:5px"><input class="easyui-numberbox" value="<?php echo nl2br($item['normalizacao']);?>" name="normalizacao" iconWidth="28" style="width:20%;height:34px;padding:10px"> min</td>
								</tr>
								</table>
							</div>

							<div style="margin-bottom:35px">
								 
								<table><tr>
								<td>Em caso de necessidade pode-se dispor do equipamento em:</td>
								<td><input type="radio" name="devolucao" value="TempoDefinido" <?php $p="TempoDefinido"; if ($item['devolucao'] ==$p) {echo "checked";} else {echo '';}?>>
								<input class="easyui-timespinner" prompt="" value="<?php echo nl2br($item['devolucaoHora']);?>" name="devolucaoHora" iconWidth="28" style="width:150px;height:34px;padding:15px"> (hh:mm)</td>
								<td style="padding:15px"><input type="radio" name="devolucao" style="padding:35px" value="Imediato" <?php $p="Imediato"; if ($item['devolucao'] ==$p) {echo "checked";} else {echo '';}?>>Imediato</td>
								<td style="padding:15px"><input type="radio" name="devolucao" style="padding:35px" value="Ao Final" <?php $p="Ao Final"; if ($item['devolucao'] ==$p) {echo "checked";} else {echo '';}?>>Ao Final
								</td></tr>
								</table>
							<br>
							</div>	
							<div style="margin-bottom:10px">
								Condições de impedimento: 
							</div>							
							<div style="margin-bottom:35px">
								<!--<TEXTAREA name="condicoes" prompt="Condições do impedimento" class="easyui-textbox" multiline="true" style="width:88%;height:350px;padding:15px"><?php echo $item['condicoes'];?></TEXTAREA>
								--><table style="width:88%;"><tr><td>
									<div id="dvCentro">
										<TEXTAREA id="condicoes" name="condicoes"><?php echo $item['condicoes'];?></TEXTAREA>
								   </div>
								   </td></tr></table>
									<script src="ckeditor/ckeditor.js"></script>
									<script>$(document).ready(function(){						
									CKEDITOR.replace( 'condicoes' );});				
									</script>
													
							</div>
							<div style="margin-bottom:10px">
								Serviço a executar: 
							</div>							
							<div style="margin-bottom:35px">
								<TEXTAREA name="servico"  prompt="Serviços a executar" class="easyui-textbox" multiline="true" style="width:88%;height:100px;padding:15px"><?php echo $item['servico'];?></TEXTAREA>
							</div>
							<div style="margin-bottom:10px">
								Observações: 
							</div>	
							<div style="margin-bottom:35px">
								<TEXTAREA name="observacoes" prompt="Observações" class="easyui-textbox" multiline="true" style="width:88%;height:80px;padding:15px"><?php echo $item['observacoes'];?></TEXTAREA>
							</div>
							<div style="margin-bottom:10px">
								Documentos internos vinculados: 
							</div>								
							<div style="margin-bottom:35px">
								<TEXTAREA name="docinterno" prompt="Documentos internos vinculados" class="easyui-textbox" multiline="true" style="width:88%;height:80px;padding:15px"><?php echo $item['docinterno'];?></TEXTAREA>
							</div>						
							<div style="margin-bottom:20px">
								<table border="0" cellpadding="3" style="width:80%; height:10%;">
									<tr>
										<td style="width:30%;padding:2px; text-align:center;">Nomes do Pessoal notificado:</td>
										<td style="width:29%;padding:2px;text-align:center;">Setor do Pessoal notificado:</td>
										<td style="width:28%;padding:2px;text-align:center;">Empresa do Pessoal notificado:</td>
									</tr>
									
								</table>
	
								<table border="0" cellpadding="3" style="width:80%; height:15%;">
									<tr>
										<td style="text-align:right; vertical-align: top; color: #B0C4DE;padding:7px">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15</td>
										<td style="width:30%;"><TEXTAREA name="notificadosnome" prompt="Nomes do Pessoal notificado" class="easyui-textbox" multiline="true" style="width:100%;height:300px;padding:5px"><?php echo $item['notificadosnome'];?></TEXTAREA></td>
										<td style="text-align:right; vertical-align: top; color: #B0C4DE;padding:7px">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15</td>
										<td style="width:30%;"><TEXTAREA name="notificadossetor" prompt="Setor do Pessoal notificado" class="easyui-textbox" multiline="true" style="width:100%;height:300px;padding:5px"><?php echo $item['notificadossetor'];?></TEXTAREA></td>
										<td style="text-align:right; vertical-align: top; color: #B0C4DE;padding:7px">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15</td>
										<td style="width:30%;"><TEXTAREA name="notificadosempresa" prompt="Empresa do Pessoal notificado" class="easyui-textbox" multiline="true" style="width:100%;height:300px;padding:5px"><?php echo $item['notificadosempresa'];?></TEXTAREA></td>
									</tr>
								</table>
	
							</div>
							
						</td>		
						</tr>
						
						<tr>
						<td>
							<!--<a href="javascript:void(0)" onclick="listadetransmissao()" class="easyui-linkbutton" iconCls="icon-search" plain="false" style="width:250px"> Listas de Transmissão </a>-->
							<a href="javascript:void(0)" onclick="abrirAVA()" class="easyui-linkbutton" iconCls="icon-search" plain="false" style="width:120px"> AVA </a>
							<script> function abrirAVA(){ window.open('../AVA2/index-adm.php', '', 'left=200, right=200, top=100, width=1000, height=1000')}</script>
						</td>
						</tr>
						
					</table><br><br>
						
									
			</div>
		</form>
	</div>

		<div align="right" style="width:90%; height:50px; padding:10px;" id="dlg5-buttons">
			<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveeditAI()" style="width:190px;padding:3px;">Salvar Alteração</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="window.location.href='AI-edt.php?a=3'" style="width:120px;padding:3px;">Cancelar</a>
		</div>

		<script>


		function saveeditAI(){
			$('#fm7').form('submit',{
				url: 'EDT/altera-AI.php?id_ai='+<?php echo $item['id_ai'];?> ,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
						var win = $.messager.progress({
							title:'',
							msg:'Salvando dados...'
						});
						setTimeout(function(){
							$.messager.progress('close');
							window.location.href='AI-edt.php?a=1';
						},1500);
					
				}
			});
		}
		
		
		
		
		
		
		
		
	</script>
<!--Fim diálogo Editar AI-->

</div>	
</body>


	<!--<iframe src="atualiza_session.php" width="0" height="0"></iframe>-->

</html>
<?php 
include "DLG_listadetransmissao.php"; 
//include "contador_logout.php";
 ?>