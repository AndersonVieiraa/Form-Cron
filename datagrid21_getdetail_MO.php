
<?php
include_once 'conn.php';

$itemid = mysql_real_escape_string($_REQUEST['itemid']);

$rs = mysql_query("select * from MO where id_mo='$itemid'");
$item = mysql_fetch_array($rs);
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION)) $name= $_SESSION['UsuarioNome'];
?>

<html>
<body>
<table width="100%" border="0"><tr><td>

	<table style="width:70%; border-collapse:collapse; border-radius:0px;border:0px solid #000000; margin-top:30px;" >
		<tr border=1>
		 <td style=" padding:5px; border-radius:0px;border:1px solid #000000;" width="15%" align="center"><img  style="width:100%;" src="img/logoMarcaChesf2.png"></td> 
		 <td style=" border-radius:0px; font:Helvetica; font-size:17px; border:1px solid #000000;" width="60%"><h3 style="text-align: center;">MO - Mensagem Operativa</h3></td> 
		 <td style="padding:15px; width:15%; border-radius:0px;border:1px solid #000000; text-align: center;"><b>MO Número</b><br> <?php echo nl2br($item['numero']); echo "/"; echo nl2br($item['ano']);?>
		 <div style="padding:0px; padding-top:3px;"><i><font size="2"><?php echo nl2br($item['revisaoSaida']);?></font></i></div>
		 </td>
		 <td style="padding:15px; width:15%; border-radius:0px;border:1px solid #000000; text-align: center;"><b>Data</b><br> <?php echo nl2br($item['data']);?></td>

		<tr>
		
	</table>

	<table style="width:70%;padding:0px; border-radius:0px; border:0px solid #000000; margin-top:10px;"><tr><td>
	

	
	
		<table align="center" style="border-collapse:collapse; border-spacing:0px; width:100%;font-size:13px">
			<tr>
				<td style='padding:10px; border:1px solid #000000; width:20%; background:#F0F0F0;'><b>Classificação: &nbsp;</b></td>
			
				<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:80%">
				<table align='center' border='0'>
				<tr>
				<td align='center' style='border:1px solid #000000;width:30px; font-size:14px;'><b><?php $p="p"; if ($item['classificacao'] ==$p) {echo "&check;";} else {echo '&nbsp &nbsp';}?></b></td>
				<td style='border:0px solid #000000;'><b>Programada &nbsp; </b></td>
				<td align='center' style='border:1px solid #000000;width:30px;font-size:14px;'><b><?php $u='u'; if ($item['classificacao'] ==$u) {echo "&check;";} else {echo '&nbsp &nbsp';}?></b></td>
				<td style='border:0px solid #000000;'><b>Urgência &nbsp;</b></td>
				<td align='center' style='border:1px solid #000000;width:30px;font-size:14px;'><b><?php $e='e'; if ($item['classificacao'] ==$e) {echo "&check;";} else {echo '&nbsp &nbsp';}?></b></td>
				<td style='border:0px solid #000000;'><b>Emergência</b></td>
				</tr>
				</table>
				
				</td>
			</tr>
		</table>
	
		<table border="0" align="center" style="border-collapse:collapse; border-spacing:0px; width:100%;font-size:13px; margin-top:5px;">
		
			<tr>
			<td rowspan="2" style="padding:10px;background:#F0F0F0; border-radius:0px; border:1px solid #000000; width:20%"><b>Emitente:</b></td>
			<td rowspan="2" style="padding:10px; border-radius:0px; border:1px solid #000000; width:40%">CHESF</td>
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:40%"><b>Nome:</b> <?php echo nl2br($item['emitenteusuario']);?></td>	
			</tr>
			<tr>
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:40%"><b>Área:</b> <?php echo nl2br($item['areaemitente']);?></td>
			</tr>
		</table>

		<table border="0" align="center" style="border-collapse:collapse; border-spacing:0px; border-spacing:5px; width:100%;font-size:13px; margin-top: 5px;">
			
			<tr>
			<td rowspan="2" style="padding:10px; background:#F0F0F0; border-radius:0px; border:1px solid #000000; width:20%"><b>Destinatário:</b></td>
			<td rowspan="2" style="padding:10px; border-radius:0px; border:1px solid #000000; width:40%"><?php echo nl2br($item['destinatario']);?></td>	
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:40%"><b>Nome: </b><?php echo nl2br($item['nomedestinatario']);?></td>	
			</tr>
			<tr>
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:40%"><b>Área: </b><?php echo nl2br($item['areadestinatario']);?> </div></td>
			</tr>
		</table>

		<table align="center" style="border-collapse:collapse; border-spacing:5px; width:100%;font-size:13px; border:0px solid #000000; margin-top:5px;">
		
			<tr >
			<td style="padding:10px; background:#F0F0F0; border-radius:0px; border:1px solid #000000; width:20%"><b>Recebido por:</b></td>
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:40%"></td>
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:25%"> <b>Data: </b></td>	
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:15%"><b>Hora: </b></td>	
			</tr>
		</table>

		<table border="0" align="center" style="border-collapse:collapse; border-spacing:0px; width:100%;font-size:13px; margin-top:5px;">
			<tr>
			<td rowspan="1" style="padding:10px; background:#F0F0F0; border-radius:0px; border:1px solid #000000; width:20%"><b>Assunto: </b></td>
			<td rowspan="1" style="padding:10px; border-radius:0px; border:1px solid #000000; width:80%"><?php echo nl2br($item['assuntotitulo']);?></td>
			</tr>
		
			<tr>
			<td colspan="2" style="padding:10px; border-radius:0px; border:1px solid #000000; width:100%"><b>Mensagem:</b><?php echo $item['assunto'];?></td>
			</tr>
		</table>

		<table border="0" align="center" style="border-collapse:collapse; border-spacing:0px; width:100%;font-size:13px; margin-top:5px;">
			<tr>
			<td style="padding:10px; background:#F0F0F0; border-radius:0px; border:1px solid #000000; width:15%"><b>Criado por: </b></td>
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:50%"><?php echo nl2br($item['emitenteusuario']);?></td>
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:20%"><b>Data: </b><?php echo nl2br($item['data']);?></td>
			<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:15%"><b>Hora: </b><?php echo nl2br($item['hora']);?></td>
			</tr>
		
		</table>
	
	</td>
	</tr>
	</table>

	<div style="font-size:11px; color:#222; padding-bottom:10px; margin-top:10px;">
		<b><u>Log de Alterações:</u></b>
	</div>
	<div style="font-size:11px; color:#333; padding-bottom:200px;">
		<?php echo $item['logi'];?>
	</div>
	
</td>
</tr>	
</table>	
</body>
</html>