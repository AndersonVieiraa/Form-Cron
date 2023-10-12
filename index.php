<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form CRON</title>

<link rel="stylesheet" type="text/css" href="../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
<link href="css/style_index.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="imagem/ico" href="img/favicon02.png" />

</head>


<body style="position:fixed; width:100%; height:100%; padding:0px;">

<table border="0" style="width:100%;height:100%; table-layout:; align: center; background: url(ilustracoes/fundo3.png)no-repeat right bottom fixed; ">
		<tr>
			<td colspan="2"  align="right" width="100%" style="padding:5px; padding-right:20px">
			<!--<font size="3" color="grey">|<a style="text-decoration: none;" href="graph/index.php"><font size="3" class="efeitomenu"> &nbsp Dashboard &nbsp </font></a>
			<font size="3" color="grey">|<a style="text-decoration: none;" href="anexos.php"><font size="3" class="efeitomenu"> &nbsp Anexos &nbsp </font></a>-->
			<font size="3" color="grey">|<a style="text-decoration: none;" href="suporte.php"><font size="3" class="efeitomenu"> &nbsp Suporte &nbsp </font></a>
			<font size="3" color="grey">|<a style="text-decoration: none;" href="javascript:void(0)" onclick="login()" ><font size="3" class="efeitomenu"> &nbsp Login &nbsp </font> <font size="3" color="grey">|</font></a>
			</td>
		</tr> 

		<tr width="100%">
			<td colspan="1" style="padding:00px">
				
				<img src="https:ilustracoes/logo02.png" style=" width:270px;height:70px; padding-left:50px;" />
			</td>
			<td colspan="1" align="right"  width="100%" style="padding-right:20px; padding-top:10px">
				<a class="transp2" href="javascript:void(0)" onclick="search1()" >
					<img src="https:img/search.svg" align="center" class="img_search" style="width:70px;height:50px;"/>
				</a>
			</td>
		</tr> 

		<tr>
			<td colspan="2"  width="100%" style="padding-bottom:10px">
				<table width="100%" border="0">
					<tr>
						<td></td>	
						<td width="90%" style="border-top: #DCDCDC 1px solid;"></td>
						<td></td>
					</tr>
				</table>
			</td>
		</tr>


		<tr>
			<td  align="center" valign="top" width="40%" style="padding-left:50px;">
				<img src="https:ilustracoes/img2.png" style=" width:500px;height:400px; padding-top:15px;" />
			</td>
			<td  width="60%">

				<table border="0" style="width:100%;height:100%; table-layout:fixed; align: center; padding:50px; padding-left:80px; padding-top:00px;">
					<tr>
					<td valign="top" style="">
						<table>
							<tr>
							<td>
								<a class="transp2" href="MO.php" target="">
								<img src="https:ilustracoes/msg.png" class="img_menu" />
								</a>
							</td>
							<td style="padding-left:30px;"><i><b>MO</b> <br> Mensagens Operativas</i>
							</td>
							</tr>
						</table>
					</td>
					<td valign="top" style="">
						<table>
							<tr>
							<td>
								<a class="transp2" href="AI.php" target="">
								<img src="https:ilustracoes/ai.png" class="img_menu" />
								</a>
							</td>
							<td style="padding-left:30px;"><i><b>AI</b> <br> Autorização para Impedimento de Equipamento de Interligação</i>
							</td>
							</tr>
						</table>
					</td>
					</tr> 
					<tr>
					<td valign="top" style="">
						<table>
							<tr>
							<td>
								<a class="transp2" href="ATEIE.php" target="">
								<img src="https:ilustracoes/ateie.png" class="img_menu" />
								</a>
							</td>
							<td style="padding-left:30px;"><i><b>ATEIE</b> <br> Autorização para Trabalhos em Equipamentos de Interligação Energizados</i>
							</td>
							</tr>
						</table>
					</td>
					<td valign="top" style="">
						<table>
							<tr>
							<td>
								<a class="transp2" href="graph/index.php" target="">
								<img src="https:ilustracoes/atee.png" class="img_menu" />
								</a>
							</td>
							<td style="padding-left:30px;"><i><b>DASHBOARD</b> <br>Gráficos e estatísticas do aplicativo</i>
							</td>
							</tr>
						</table>
					</td>
					</tr> 
					
					<tr>
					<td valign="top" style="">
						<table>
							<tr>
							<td>
								<a class="transp2" href="Recebidos.php" target="">	
								<img src="https:ilustracoes/recebidos.png" class="img_menu" />
								</a>
							</td>
							<td style="padding-left:30px;"><i><b>RECEBIDOS</b> <br> Todos os formulários que são enviados pelos acessantes para nossa análise</i>
							</td>
							</tr>
						</table>
					</td>
					<td valign="top" style="">
						<table>
							<tr>
							<td>
								<a class="transp2" href="anexos.php" target="">
								<img src="https:ilustracoes/ava.png" class="img_menu" />
								</a>
							</td>
							<td style="padding-left:30px;"><i><b>ANEXOS</b> <br> Repositório de anexos do aplicativo</i>
							</td>
							</tr>
						</table>
					</td>
					</tr> 


				</table>

			</td>
		</tr>
		
		<tr>
			<td colspan="2"  align="center" width="100%" style="font-size:11px; color:#AAA ;background-color: ; padding-right:15px; padding-bottom:5px;">
				<table style="border:1px #ddd solid; border-radius: 10px; padding-left:15px; padding-right:15px;"><tr><td>
					&copyANDERSON-<?php echo date('Y');?>
				</td></tr></table>
			</td>
		</tr>
	</table>
</div>

</body>
</html>
 
<?php 
include "Mensagens/msg_index.php";
include "Dialogos/dlg_login.php";
include "Dialogos/dlg_search.php";
include "Dialogos/dlg_lt_energizada.php";

?>