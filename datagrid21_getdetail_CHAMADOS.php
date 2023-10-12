<?php
include_once 'conn.php';

$itemid = mysql_real_escape_string($_REQUEST['itemid']);

$rs = mysql_query("select * from CHAMADO where id_chamado='$itemid'");
$item = mysql_fetch_array($rs);
?>

<br>

	<table style="width:70%; height:60px; border-collapse:collapse; border-radius:0px;border:0px solid #000000;" >
		<tr><td>
		Mensagem:<small><small><small><br><br></small></small></small>
		</td></tr>
		<tr border=1>
		 <td style="padding:10px; width:100%; border-radius:0px;border:1px solid #000000; text-align: left;">
		 <?php echo nl2br($item['chamado']);?>
		 </td>
		 
		<tr>
		
	</table>
	<small><small><br><br><br></small></small>

