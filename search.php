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
<link rel="icon" type="imagem/ico" href="img/favicon02.png" />
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>


<?php 
//include "permissaoN1.php";
include_once 'conn.php'; 
$numero = intval($_REQUEST['numero']);
$ano = intval($_REQUEST['ano']);
?>	
<!-- Inicio MENU-->
<div>
<table border="0" style="border-collapse:collapse; width:100%;height:100%; table-layout:; align: center; ">
		<tr>
			<td  colspan="2" align="right" valign="top" width="100%" height="" style="padding:10px; padding-right:20px:">
				<table border="0" style="border-collapse:collapse;">
					<tr>
					<td>
					<font size="3" color='grey'>|</font>
					<a class="transp2" href="index.php" style="text-decoration: none;"><font size="3" class="efeitomenu"> &nbsp  Página Inicial &nbsp</font></a>
					<font size="3" color='grey'>| &nbsp &nbsp</font>
					</td>
					<td>
					<form action="login-SEARCH.php?num=<?php echo $numero;?>&ano=<?php echo $ano;?>" method="post">
						<input prompt="Usuário" name="usuario" type="text" iconWidth="28" class="easyui-textbox" style="width:100px;height:30px;padding:10px; border-radius:4px; border:1px solid #96C2F4;">
						<input prompt="Password" name="senha" type="password" iconWidth="28" class="easyui-textbox" style="width:100px;height:30px;padding:10px; border-radius:4px; border:1px solid #96C2F4;" >
						<input type="submit" value="Login" class="easyui-linkbutton" style="width:70px; height:30px;"/>
					</form>
					</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td   width="30%" height="12%" style="padding:15px">				
				<a href="index.php"> <img src="http:ilustracoes/logo02.png" class="logo" /></a>
			</td>
			<!--<td align="right"  width="100%" style="padding-right:20px; padding-top:10px">
				<a class="transp2" href="javascript:void(0)" onclick="search2()" >
					<img src="http:img/search.svg" align="center" class="img_search" />
				</a>
			</td>-->
			<td>
				<form action="search.php" target="" method="post">
					<div align="right" style="margin-top:30px; margin-right:10%;color:grey;padding-top:5px;">
						<table border="0" cellpadding="3px">
							<tr>
							<td>
								<input name="numero" prompt="Número" class="easyui-numberbox" iconWidth="28" style="width:150px;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;" >
							</td >
							<td >	
								<input name="ano" prompt="Ano (Opcional)" class="easyui-numberbox" iconWidth="28" style="width:150px;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
							</td>
							<td>
								<input type="submit" value="Buscar" class="botao_search" >
							</td>
							</tr>
						</table>					
					</div>					
				</form>

			</td>
		</tr>

		<tr>
			<td colspan="2"  width="100%" style="padding-bottom:20px">
				<table width="100%" border="0">
					<tr>
						<td></td>	
						<td width="90%" style="border-top: #DCDCDC 1px solid;"></td>
						<td></td>
					</tr>
				</table>
			</td>
		</tr>
		
	</table>
</div>
<!-- Fim MENU-->

<?php
if (!empty($_POST) AND (empty($_POST['numero']))) {
	 
     header("Location: search.php?a=1"); exit;
	
  }

if (empty($_GET['a'])) {
}
else{	
$e = $_GET['a'];

switch ($e) {
	case 1:
	$msg = "Formulário vazio! <br><br> Número Obrigatório!";
	break;

	default:
	echo "";
}

if ($e != 0) {	
echo "<script>$.messager.alert('Mensagem','$msg','warning')</script>";

}
}


?>
<body>


<!--Diálogo editar MOargo -->

		<form id="fm7" method="post" novalidate>
			<div class="easyui-panel" style="width:100%;padding:10px 10px; border:0px solid #96C2F4; padding-bottom:40px;">	
			
				<table align="center" style="width:90%; border-spacing:10px;  border-radius:4px; border:0px solid #96C2F4; background:#6BA6DB;">
					<tr><td style="text-align:center;">
					<b><font size="3" color="white">MO´S CHESF</font></b>
					</td></tr>
				</table>
			
					<table border="1" align="center" style="border-collapse:collapse; width:90%; border-spacing:0px; margin-top:10px; padding: 0PX; border-radius:4px; border:0px solid #DCDCDC; padding-top:5px;">
					<tr style="background:#CDCDCD;">
							<td align="center" style="padding:10px;"></td>
							<td align="center" style="padding:10px;">NÚMERO</td>
							<td align="center" style="padding:10px;">ANO</td>
							<td align="center" style="padding:10px;" >DESTINATÁRIO</td>
							<td align="center" style="padding:10px;">ASSUNTO</td>
							<td align="center" style="padding:10px;">CRIADO EM</td>
							<td align="center" style="padding:10px;">PDF</td>
					
						</tr>
						<?php



							
							$rs1 = mysql_query("select * from MO where numero LIKE '$numero' AND ano LIKE '%$ano%' Order By id_mo DESC limit 10");
							$sequencia1 = 1;
									
									while($item1 = mysql_fetch_array($rs1)){
									echo '<tr>';
									echo '<td style="padding:10px; background:#EFEFEF;">';
									echo $sequencia1; 
									echo '</td>';
									echo '<td align="center" style="padding:10px;">';
									echo $item1['numero']; 
									echo '</td>';
									echo '<td align="center" style="padding:10px;">';
									echo $item1['ano'];	
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item1['destinatario'];		
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item1['assuntotitulo'];		
									echo '</td>';
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item1['data'];		
									echo '</td>';
									echo '<td align="center" style="padding:10px;">';
									echo '<a href="/cron/PHP/Form/EDT/gerarpdf/index.php?id_mo='; echo $item1['id_mo'];
									echo ' " target="_blank"><img style="width:22px; height:28px; padding:0px;" src="img/pdf.png" name="Image2">';		
									echo '</td>';
									echo '</tr>';
									$sequencia1++;
									}

									if ($sequencia1 == 1){
										echo '</tr>';
										echo '</table>';										
										echo '<div align="center" style="padding:20px;"><font size="3" color="red"> Sem Resultados...</font></div>';
									}
						?>
					</table>
					
					<table width="100%" border="0" style="margin-top:20px;">
					<tr>
						<td></td>	
						<td width="90%" style="border-top: #DCDCDC 1px solid;"></td>
						<td></td>
					</tr>
					</table>

					<div style="padding:0px; margin-left:5%; margin-bottom:100px; color: #676767;" ><i>*Limite de 10 resultados...</i></div>



					<table align="center" style="width:90%; border-spacing:10px;  border-radius:4px; border:0px solid #96C2F4; background:#6BA6DB;">
					<tr><td style="text-align:center;">
					<b><font size="3" color="white">AI´S CHESF</font></b>
					</td></tr>
				</table>
			
					<table border="1" align="center" style="border-collapse:collapse; width:90%; border-spacing:0px; margin-top:10px; padding: 0PX; border-radius:4px; border:0px solid #DCDCDC; padding-top:5px;">
					<tr style="background:#CDCDCD;">
							<td align="center" style="padding:10px;"></td>
							<td align="center" style="padding:10px;">NÚMERO</td>
							<td align="center" style="padding:10px;">ANO</td>
							<td align="center" style="padding:10px;" >EQUIPAMENTO</td>
							<td align="center" style="padding:10px;" >LOCAL</td>
							<td align="center" style="padding:10px;">ATIVIDADE</td>
							<td align="center" style="padding:10px;">CRIADO EM</td>
							<td align="center" style="padding:10px;">PDF</td>
					
						</tr>
						<?php



							$rs2 = mysql_query("select * from AI where numero LIKE '$numero' AND ano LIKE '%$ano%' Order By id_ai DESC limit 10");
							$sequencia2 = 1; 
							//if ($sequencia2 >1){
							//	echo '</tr>';
							//	echo '</table>';										
							//	echo '<div align="center" style="padding:20px;"><font size="3" color="red"> Sem Resultados...</font></div>';
							//}		
								
						
									while($item2 = mysql_fetch_array($rs2)){

									echo '<tr>';
									echo '<td style="padding:10px; background:#EFEFEF;">';
									echo $sequencia2; 
									echo '</td>';
									echo '<td align="center" style="padding:10px;">';
									echo $item2['numero']; 
									echo '</td>';
									echo '<td align="center" style="padding:10px;">';
									echo $item2['ano'];	
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item2['equipamento'];		
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item2['subestacao'];		
									echo '</td>';
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item2['servico'];		
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item2['data'];		
									echo '</td>';
									echo '<td align="center" style="padding:10px;">';
									echo '<a href="/cron/PHP/Form/EDT/gerarpdf/index_AI.php?id_ai='; echo $item2['id_ai'];
									echo ' " target="_blank"><img style="width:22px; height:28px; padding:0px;" src="img/pdf.png" name="Image2">';		
									echo '</td>';
									echo '</tr>';
									$sequencia2++;
									}

									if ($sequencia2 == 1){
											echo '</tr>';
											echo '</table>';										
											echo '<div align="center" style="padding:20px;"><font size="3" color="red"> Sem Resultados...</font></div>';
									}		
								


								
						?>
					</table>
					
					<table width="100%" border="0" style="margin-top:20px;">
						<tr>
							<td></td>	
							<td width="90%" style="border-top: #DCDCDC 1px solid;"></td>
							<td></td>
						</tr>
					</table>

					<div style="padding:0px; margin-left:5%; margin-bottom:100px; color: #676767;" ><i>*Limite de 10 resultados...</i></div>






				<table align="center" style="width:90%; border-spacing:10px;  border-radius:4px; border:0px solid #96C2F4; background:#6BA6DB;">
					<tr><td style="text-align:center;">
					<b><font size="3" color="white">ATEIE´S CHESF</font></b>
					</td></tr>
				</table>
			
					<table border="1" align="center" style="border-collapse:collapse; width:90%; border-spacing:0px; margin-top:10px; padding: 0PX; border-radius:4px; border:0px solid #DCDCDC; padding-top:5px;">
					<tr style="background:#CDCDCD;">
							<td align="center" style="padding:10px;"></td>
							<td align="center" style="padding:10px;">NÚMERO</td>
							<td align="center" style="padding:10px;">ANO</td>
							<td align="center" style="padding:10px;" >EQUIPAMENTO</td>
							<td align="center" style="padding:10px;" >LOCAL</td>
							<td align="center" style="padding:10px;">ATIVIDADE</td>
							<td align="center" style="padding:10px;">CRIADO EM</td>
							<td align="center" style="padding:10px;">PDF</td>
					
						</tr>
						<?php



							$rs3 = mysql_query("select * from ATEIE where numero LIKE '$numero' AND ano LIKE '%$ano%' Order By id_ateie DESC limit 10");
							$sequencia3 = 1;
									
									while($item3 = mysql_fetch_array($rs3)){
									echo '<tr>';
									echo '<td style="padding:10px; background:#EFEFEF;">';
									echo $sequencia3; 
									echo '</td>';
									echo '<td align="center" style="padding:10px;">';
									echo $item3['numero']; 
									echo '</td>';
									echo '<td align="center" style="padding:10px;">';
									echo $item3['ano'];	
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item3['equipamento'];		
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item3['subestacao'];		
									echo '</td>';
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item3['servico'];		
									echo '</td>';
									echo '<td style="padding:10px;">';
									echo $item3['data'];		
									echo '</td>';
									echo '<td align="center" style="padding:10px;">';
									echo '<a href="/cron/PHP/Form/EDT/gerarpdf/index_ATEIE.php?id_ateie='; echo $item3['id_ateie'];
									echo ' " target="_blank"><img style="width:22px; height:28px; padding:0px;" src="img/pdf.png" name="Image2">';		
									echo '</td>';
									echo '</tr>';
									$sequencia3++;
									}
									if ($sequencia3 == 1){
										echo '</tr>';
										echo '</table>';										
										echo '<div align="center" style="padding:20px;"><font size="3" color="red"> Sem Resultados...</font></div>';
									}
						?>
					</table>

					<table width="100%" border="0" style="margin-top:20px;">
						<tr>
							<td></td>	
							<td width="90%" style="border-top: #DCDCDC 1px solid;"></td>
							<td></td>
						</tr>
					</table>

					<div style="padding:0px; margin-left:5%; margin-bottom:100px; color: #676767;" ><i>*Limite de 10 resultados...</i></div>











				<table align="center" style="width:90%; margin-top:80px;  border-spacing:10px;  border-radius:4px; border:0px solid #96C2F4; background:#6BA6DB;">
					<tr><td style="text-align:center;">
					<b><font size="3" color="white">RECEBIDOS</font></b>
					</td></tr>
				</table>


					<table border="1" align="center" style="border-collapse:collapse; width:90%; border-spacing:0px; margin-top:10px; padding: 0PX; border-radius:4px; border:0px solid #DCDCDC; padding-top:5px;">
						<tr style="background:#CDCDCD;">
						
							<td align="center" style="padding:10px;"></td>
							<td align="center" style="padding:10px;">NOME</td>
							<td align="center" style="padding:10px;">ACESSANTE</td>
							<td align="center" style="padding:10px;">SUBESTAÇÃO</td>
							<td align="center" style="padding:10px;">OBSERVAÇÃO</td>
							<td align="center" style="padding:10px;">AÇÕES EM TR?</td>
							<td align="center" style="padding:10px;">CRIADO EM</td>
							<td align="center" style="padding:10px;">ARQUIVO</td>
					
						</tr>
						

						<?php

						$rs = mysql_query("select * from RECEBIDOS where nome LIKE '%$numero%' AND data LIKE '%$ano%' Order By id_recebidos DESC limit 10");
						
						$sequencia = 1;
						if ($e !=1){
						while($item = mysql_fetch_array($rs)){
								//echo $item['nome'];
								//echo "<br>";
								echo '<tr>';
								echo '<td style="padding:10px; background:#EFEFEF;">';
								echo $sequencia;
								echo "</td>";
								echo '<td style="padding:10px;">';
								echo $item['nome'];
								echo "</td>";
								echo '<td align="center" style="padding:10px;">';
								echo $item['acessante'];	
								echo '</td>';
								echo '<td align="center" style="padding:10px;">';
								echo $item['ses'];		
								echo '</td>';
								echo '<td style="padding:10px;">';
								echo $item['observacao'];			
								echo '</td>';
								echo '<td align="center" style="padding:10px;">';
								if ($item['classificacao'] == 'SIM') { echo '<font color="red">'.$item['classificacao'].'</font>';} else{echo '<font color="#3CB371">'.$item['classificacao'].'</font>';}		
								echo '</td>';
								echo '<td style="padding:10px;">';
								echo $item['data'];			
								echo '</td>';
								echo '<td align="center" style="padding:10px;">';
								echo '<a href="';
								echo $item['link'];
								echo '"target="_blank"><img style="width:22px; height:28px; padding:0px;" src="img/pdf.png" name="Image2">';		
								echo '</td>';
								echo '</tr>';
								$sequencia++;

						}
						}
						if ($sequencia == 1){
							echo '</tr>';
							echo '</table>';										
							echo '<div align="center" style="padding:20px;"><font size="3" color="red"> Sem Resultados...</font></div>';
						}
						?>
								
						
					</table>

					<table width="100%" border="0" style="margin-top:20px;">
					<tr>
						<td></td>	
						<td width="90%" style="border-top: #DCDCDC 1px solid;"></td>
						<td></td>
					</tr>
					</table>

					<div style="padding:0px; margin-left:5%; margin-bottom:100px; color: #676767;" ><i>*Limite de 10 resultados...</i></div>

					<div style="margin-bottom:100px;"></div>
<!-- FIM Diálogo editar MO 

	<iframe src="atualiza_session.php" width="0" height="0"></iframe>-->

</body>
</html>


<?php 
include "Dialogos/dlg_login_SEARCH.php";


$sequenciatotal = $sequencia1 + $sequencia2 + $sequencia3 + $sequencia;
//echo $sequenciatotal 
echo '<table align="center" style="padding:10px; border-collapse: collapse; border: 2px solid grey; border-radius: 25px;"><tr><td style="padding:30px;">';
echo '<font size="5" color="#676767">Total de ';
echo $sequenciatotal - 4;
echo ' Resultado(s)... </font>';
echo '</td><tr></table>'; 
?>

<div style="margin-bottom:120px;"></div>

	<table width="100%" border="0" align="center">
					<tr>
						<td></td>	
						<td width="95%" style="border-top: #DCDCDC 1px solid; "></td>
						<td></td>
					</tr>
		<tr>
			<td colspan="3"  align="center" width="100%" style="font-size:11px; color:#AAA ;background-color: ; padding-right:00px; padding-bottom:0px;">
				<table style="border:1px #ddd solid; border-radius: 10px; padding-left:00px; padding-right:00px; margin-top:15px;"><tr><td>
					&copyDONFS-<?php echo date('Y');?>
				</td></tr></table>
			</td>
		</tr>

		<tr>
			<td></td>	
			<td align="center"> <img src="http:img/form.png" style="width:90px; height:25px; margin-top:10px;" /></td>
			<td></td>
		</tr>
	</table>

