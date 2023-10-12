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
</head>

<div style="position:relative; z-index:2;">
<?php 
include "permissaoN1.php";
include "Menu/index_AI.html";
include_once 'conn.php'; 
//$id = intval($_REQUEST['id_ai']);
//$rs = mysql_query("select * from AI where id_ai='$id'");
//$item = mysql_fetch_array($rs); 

 ?>	
</div>	


<body style="inline-block; width:100%; height:100%; padding:0px; background:rgba(240,240,240);">

<!-- Diálogo editar AI -->
		<form id="fm6" method="post" novalidate>
			<div style="margin:0px 0;"></div>
			<div class="easyui-panel" style="overflow: auto; width:100%;padding:10px 10px">		
					<table border="0" style="width:100%;">
						<tr>
						<td>
							<div align="center" style="margin-bottom:20px">
								<table border="0" cellpadding="3" style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:1px solid #B0C4DE;">
									<tr bgcolor="#f5f5f5">
									<td align="right" style="padding:15px" ><b>Classificação da Intervenção:</b></td> 
									<td align="left" style="padding:15px">
										<input type="radio" name="classificacao" value="p">Programada
										<input type="radio" name="classificacao" value="u">Urgência
										<input type="radio" name="classificacao" value="e">Emergência
									</td></tr>
								</table>
							</div>							
						</td>
						</tr>
						<tr>
						<td>
							<div align="center" style="margin-bottom:25px">
								<table border="1" cellpadding="3" style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:1px solid #B0C4DE;">
									<tr>
									<td align="center" bgcolor="#f5f5f5" style="width:300px;padding:15px;"> <b> Equipamento(s) </b></td>
									<td align="center" bgcolor="#f5f5f5" ><b>Com Manutenção</b></td>
									<td align="center" bgcolor="#f5f5f5" ><b>Família</b></td>
									<td align="center" bgcolor="#f5f5f5" ><b>Caracterização da Intervenção</b></td>
									</tr>
									<tr>
									<td align="center"><input class="easyui-textbox" prompt="Equipamento Principal" name="equipamentoprincipal" iconWidth="28" style="width:380px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38" required="true"></td>
									<td align="center"><input type="radio" name="commanutencao" value="Sim">Sim <input type="radio" name="commanutencao" value="Nao">Não </td>
									<td align="center"><input type="radio" name="familia" value="LT">Linha (LT) <input type="radio" name="familia" value="EQ">Equipamento (EQ)</td>
									<td align="center" colspan='1' rowspan='5'>
										<table><tr><td>
										<input type="radio" name="caracterizacao" value="CD">Com Desligamento (CD)<br><br>
										<input type="radio" name="caracterizacao" value="CD">Sem Desligamento (SD)<br><br>
										<input type="radio" name="caracterizacao" value="CD">Testes e Ensaios (TE)
										</td></tr></table>
									</td>
									</tr>
									</tr>
									<tr>
									<td align="center"><input class="easyui-textbox" prompt="Outros" name="equipamentooutros1" iconWidth="28" style="width:380px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38"></td>
									<td align="center"><input type="radio" name="commanutencao1" value="Sim">Sim <input type="radio" name="commanutencao" value="Nao">Não </td>
									<td align="center"><input type="radio" name="familia1" value="LT">Linha (LT) <input type="radio" name="familia" value="EQ">Equipamento (EQ)</td>
									</tr>
									<tr>
									<td align="center"><input class="easyui-textbox" prompt="Outros" name="equipamentooutros1" iconWidth="28" style="width:380px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38"></td>
									<td align="center"><input type="radio" name="commanutencao1" value="Sim">Sim <input type="radio" name="commanutencao" value="Nao">Não </td>
									<td align="center"><input type="radio" name="familia1" value="LT">Linha (LT) <input type="radio" name="familia" value="EQ">Equipamento (EQ)</td>
									</tr>
									<tr>
									<td align="center"><input class="easyui-textbox" prompt="Outros" name="equipamentooutros1" iconWidth="28" style="width:380px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38"></td>
									<td align="center"><input type="radio" name="commanutencao1" value="Sim">Sim <input type="radio" name="commanutencao" value="Nao">Não </td>
									<td align="center"><input type="radio" name="familia1" value="LT">Linha (LT) <input type="radio" name="familia" value="EQ">Equipamento (EQ)</td>
									</tr>
									<tr>
									<td align="center"><input class="easyui-textbox" prompt="Outros" name="equipamentooutros1" iconWidth="28" style="width:380px;padding:15px;" data-options="prompt:'Username',iconCls:'',iconWidth:38"></td>
									<td align="center"><input type="radio" name="commanutencao1" value="Sim">Sim <input type="radio" name="commanutencao" value="Nao">Não </td>
									<td align="center"><input type="radio" name="familia1" value="LT">Linha (LT) <input type="radio" name="familia" value="EQ">Equipamento (EQ)</td>
									</tr>
								</table>							
							</div>
							
							<div align="center" style="margin-bottom:25px">
								
								<table border="1" style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:1px solid #B0C4DE;">
								<!--<tr>
								<td align="center" colspan="4" style="width:100%;height:34px;padding:5px; background-color: #e9e9e9;"><b>Período:</b></td>
								</tr>-->
								
								<tr style="border:0px">
									<td rowspan="2" bgcolor="#f5f5f5" style="border-right:1px solid #B0C4DE;"><div class="vertical"><b>&nbsp;&nbsp;<b>Período</b>&nbsp;&nbsp;</b></td>
									<td style="width:25%;height:34px;padding:5px;border:0px"><input class="easyui-datebox" prompt="Data Inicio" name="datainicio" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:10%;height:34px;padding:5px;border:0px"><input class="easyui-timespinner" data-options="showSeconds:false" type="text" prompt="Hora Início" name="horainicio" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td rowspan="2" style="width:35%;height:34px;padding:5px;border-left:1px solid #B0C4DE;">
										<table border="0" style="width:250px; border-spacing:5px;  border-radius:7px;border:0px solid #B0C4DE;">
												<tr >
												<td style="width:100%;height:34px;padding:5px; border:0px"><i><b>Periodicidade:</b></i></td>
												</tr>
												<tr>
												<td style="width:75%;height:34px;padding:5px;border:0px">
													<input type="radio" name="periodicidade" value="Contínua">Contínua <br>
													<input type="radio" name="periodicidade" value="Diária">Diária
												</td>
												</tr>
										</table>
									</td>
								<td rowspan="2" style="width:30%;height:34px;padding:5px;border-left:1px solid #B0C4DE; border-right:0px;"><b>Tempo de manobras: </b><br> <input class="easyui-textbox" prompt="" name="manobras" iconWidth="28" style="width:180px;padding:15px;"></td>

								</tr>

								<tr colspan="5" style="border:0px">
									<td style="width:25%;height:34px;padding:5px;border:0px"><input class="easyui-datebox" prompt="Data Fim" name="datafim" iconWidth="28" style="width:100%;height:34px;padding:15px;">
									<td style="width:10%;height:34px;padding:5px;border:0px"><input class="easyui-timespinner" data-options="showSeconds:false" prompt="Hora Fim" name="horafim" iconWidth="28" style="width:100%;height:34px;padding:15px;">
												
									
								</tr>
								
								
								</table>
							</div>
							
							
							
							<div align="center" style="margin-bottom:25px">
								<table border="0" style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:1px solid #B0C4DE;">
								<tr>
								<td style="padding:15px;"><b> Tempo de devolução de Urgência:</b></td>
								<td><input type="radio" name="devolucao" value="TempoDefinido">
								<input class="easyui-timespinner" prompt="" name="devolucaoHora" iconWidth="28" style="width:150px;height:34px;padding:15px"> (hh:mm)&nbsp &nbsp &nbsp
								<input type="radio" name="devolucao" style="padding:35px" value="Imediato"> Imediato &nbsp &nbsp &nbsp
								<input type="radio" name="devolucao" style="padding:35px" value="Ao Final"> Ao Final 
								</td>
								</tr>
								</table>
								<table  border="0" style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:1px solid #B0C4DE;">
								
								
								
								</table>
							</div>	
							<div align="center" style="margin-bottom:25px">	
								
								<table border="1" cellpadding="3" style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:1px solid #B0C4DE;">
									<tr>
									<td colspan="3" style="padding:15px;"><b> Será utilizado franquia de 1080h para Compensador Síncrono?  </b><input type="radio" name="franquia" value="Sim">Sim <input type="radio" name="franquia" value="Nao">Não </td></td>
									</tr>
									
									<tr>
									<td style="padding:15px;"><b> Inclusão de Serviço: </b><input type="radio" name="franquia" value="Sim">Sim <input type="radio" name="franquia" value="Nao">Não </td></td>
									<td style="padding:15px;"><b> Aproveitamento: </b><input type="radio" name="franquia" value="Sim">Sim <input type="radio" name="franquia" value="Nao">Não </td></td>
									<td style="padding:15px;"><b>Referência: </b><input class="easyui-textbox" prompt="" name="referencia" iconWidth="28" style="width:200px;padding:15px;"></td>
									
									</tr>
								</table>
								
							</div>
							
							
							<div align="center" style="margin-bottom:25px">	
								
								<table border="1" cellpadding="3" style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:1px solid #B0C4DE;">
									<tr>
									<td colspan="1" style="padding:15px;"><b> Tipo da Intervenção: </b><input type="radio" name="tipo" value="1">1 &nbsp <input type="radio" name="tipo" value="2">2 &nbsp <input type="radio" name="tipo" value="3">3 &nbsp <input type="radio" name="tipo" value="4">4 &nbsp <input type="radio" name="tipo" value="5">5 &nbsp <input type="radio" name="tipo" value="6">6 &nbsp <input type="radio" name="tipo" value="7">7</td></td>
									</tr>
									
									<tr>
									<td colspan="1" style="padding:15px;"><b> Envolve Atividade de Manutenção na Proteção?</b><input type="radio" name="protecao" value="Sim">Sim <input type="radio" name="franquia" value="Nao">Não </td></td>
									</tr>
					
								</table>
								
							</div>
							
							
							
							
							
							<div align="center" style="margin-bottom:25px">	
								
									<table style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:1px solid #B0C4DE;">
										<tr style="border-bottom:1px solid #B0C4DE;">
										<td style="padding:10px; " bgcolor="#f5f5f5">
										<b>Natureza da Intervenção:</b>
										</td>
										</tr>
									
										<tr>
										<td style="padding:10px; ">
											<input type="radio" name="caracterizacao" value="MC">(MC) Manutenção Corretiva   <br>
											<input type="radio" name="caracterizacao" value="MP">(MP) Manutenção Preventiva   <br>
											<input type="radio" name="caracterizacao" value="IN">(IN) Ampliação, Reforço e Melhoria  <br>
											<input type="radio" name="caracterizacao" value="TN">(TN) Teste ou Energização de Novos Equipamentos   <br>
											<input type="radio" name="caracterizacao" value="TR">(TR) Testes em Equipamentos da Rede de Operação    <br>
											<input type="radio" name="caracterizacao" value="SO">(SO) Desligamento para Atendimento de Solicitação do ONS  <br>
											<input type="radio" name="caracterizacao" value="PD">(PD) Projeto de Pesquisa  e Desenvolvimento Aprovado pela ANEEL <br>
											<input type="radio" name="caracterizacao" value="ST">(ST) Segurança de Terceiros ou Obras de Utilidade Pública ou Serviços de Utilidade Pública   <br>
											<input type="radio" name="caracterizacao" value="RO">(RO) Restrição Operat. Temporária em Função de Equipamentos que Integram a Função Transmissão ou a Usina <br>
											<input type="radio" name="caracterizacao" value="RS">(RS) Restrição Operativa Temporária em Função de Outros Equipamentos ou Instalações do Sistema    <br>
											<input type="radio" name="caracterizacao" value="DE">(DE) Desligamento Originado por Equipamento que não Integre a Rede de Operação    <br>
											<input type="radio" name="caracterizacao" value="RE">(RE) Indisponibilidade de Equip. Reserva ou Utilização de Equip. Reserva para Substituição de Equip. de uma FT    <br>
											<input type="radio" name="caracterizacao" value="DN">(DN) Demais Naturezas 
										</td>
										</tr>
										<tr style="border-top:1px solid #B0C4DE;">
										<td style="padding:10px; ">
										<b>Caso Escolida Natureza “TN” , “IN”, “PD”  ou “SO”,  Justificar:</b> <input class="easyui-textbox" prompt="" name="referencia" iconWidth="28" style="width:450px;padding:15px;">
										</td>
										</tr>
									</table>
								
							</div>
							

							
							

							<div align="center" style="margin-bottom:25px">	
								
								<table border="0" cellpadding="3" style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:0px solid #B0C4DE;">
									<tr>
									<td><b>Finalidade:</b>
									<TEXTAREA name="finalidade" prompt="" class="easyui-textbox" multiline="true" style="width:100%;height:100px;padding:0px"></TEXTAREA>
									</tr>
								</table>
								
							</div>
							
							<div align="center" style="margin-bottom:25px">
								<b>Observações:</b><br><small><small><small><br></small></small></small>
								<TEXTAREA name="observacoes" prompt="" class="easyui-textbox" multiline="true" style="width:85%;height:80px;padding:15px"></TEXTAREA>
							</div>
							
							
							<div align="center" style="margin-bottom:25px">
								<b>CONDIÇÕES DE RECEBIMENTO/DEVOLUÇÃO:</b><br><small><small><small><br></small></small></small>
								<table style="width:85%;">
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
							
							<div align="center" style="margin-bottom:35px">
								<b>CONDIÇÕES EXIGIDAS DURANTE A INTERVENÇÃO: </b><br><small><small><small><br></small></small></small>
								<table style="width:85%;">
									<tr><td>
										<div id="dvCentro">
											<TEXTAREA id="condicoes2" name="condicoes2"></TEXTAREA>
										</div>
								   </td></tr>
								</table>
									<script src="ckeditor/ckeditor.js"></script>
									<script>$(document).ready(function(){						
									CKEDITOR.replace( 'condicoes2' );});				
									</script>
													
							</div>
							
										
							<div align="center" style="margin-bottom:20px">
								<b>Justificativa para Solicitações fora do prazo:</b><br><small><small><small><br></small></small></small>
								<TEXTAREA name="servico" prompt="" class="easyui-textbox" multiline="true" style="width:85%;height:50px;padding:15px"></TEXTAREA>
							</div>
							
							<div align="center" style="margin-bottom:20px">
								<b>Responsável/ Substituto Eventual:</b><br><small><small><small><br></small></small></small>
								<TEXTAREA name="docinterno" prompt="" class="easyui-textbox" multiline="true" style="width:85%;height:80px;padding:15px"></TEXTAREA>
							</div>						
							
							
							<div align="center" style="margin-bottom:20px">
							<table border="0" cellpadding="3" style="width:85%; border-spacing:5px; border-collapse:collapse; border-radius:7px;border:1px solid #B0C4DE;">
									<tr>
									<td style="padding:15px;"><b>Risco de Desligamento Acidental? Caso positivo Descreva</b></td>
									<td align="center" style="border-left:0px solid #B0C4DE;"><input type="radio" name="commanutencao" value="Sim">Sim <input type="radio" name="commanutencao" value="Nao">Não </td>
									<td ><input class="easyui-textbox" prompt="Descrever" name="equipamentoprincipal" style="width:380px;padding:15px;"></td>
									</tr>
									<tr  style="border-top:1px solid #B0C4DE;">
									<td style="padding:15px;"><b>Pode ser Realizado em Período Noturno? Caso negativo Descreva</b></td>
									<td align="center" style="border-left:0px solid #B0C4DE;"><input type="radio" name="commanutencao" value="Sim">Sim <input type="radio" name="commanutencao" value="Nao">Não </td>
									<td ><input class="easyui-textbox" prompt="Descrever" name="equipamentoprincipal" style="width:380px;padding:15px;"></td>
									</tr>
									<tr style="border-top:1px solid #B0C4DE;">
									<td style="padding:15px;"><b>Depende de Condições Climáticas? Caso positivo Descreva</b></td>
									<td align="center" style="border-left:0px solid #B0C4DE;"><input type="radio" name="commanutencao" value="Sim">Sim <input type="radio" name="commanutencao" value="Nao">Não </td>
									<td ><input class="easyui-textbox" prompt="Descrever" name="equipamentoprincipal" style="width:380px;padding:15px;"></td>
									</tr>
									<tr style="border-top:1px solid #B0C4DE;">
									<td style="padding:15px;"><b>Postergação traz Risco para o Equipamento?</b></td>
									<td align="center" style="border-left:0px solid #B0C4DE;"><input type="radio" name="commanutencao" value="Sim">Sim <input type="radio" name="commanutencao" value="Nao">Não </td>
									<td style="border-left:0px solid #B0C4DE; padding-left:10px;">(OBS: Caso Positivo Anexar Documento)</td>
									</tr>
									
								</table>
								</div>
						</td>		
						</tr>
					</table><br><br><br><br><br><br><br><br><br><br><br><br>
									
			</div>
		</form>


		<div align="right" style="width:90%; height:50px; padding:10px;" id="dlg5-buttons">
			<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveeditAI()" style="width:190px;padding:3px;">Criar</a>
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
<style>
			.vertical {
			-ms-transform: rotate(270deg);
			-moz-transform: rotate(270deg);
			-webkit-transform: rotate(270deg);
			transform: rotate(270deg);
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			float: left;
			text-align: left;
			white-space: nowrap;
			color:#000000;
			
			}
</style>

	<!--<iframe src="atualiza_session.php" width="0" height="0"></iframe>-->

</html>
<?php 
include "DLG_listadetransmissao.php"; 
//include "contador_logout.php";
 ?>