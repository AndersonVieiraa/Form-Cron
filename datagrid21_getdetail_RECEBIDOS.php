<?php
include_once 'conn.php';

//$name = $_GET['name'];
$itemid = mysql_real_escape_string($_REQUEST['itemid']);

$rs = mysql_query("select * from RECEBIDOS where id_recebidos='$itemid'");
$item = mysql_fetch_array($rs);
?>
<br>
 &nbsp &nbsp <a class="easyui-linkbutton c6"  style="width:180px;padding:2px;" href="<?php echo $item['link']?>" target="_blank"> <table border="0"><tr><td style="align:center;border:0px;"><img style="width:20px;height:20px; filter: brightness(150%);" src="img/clip.png"></td><td style="padding-left:3px; align:center;border:0px;"> Abrir Anexo</td></tr></table> </a>
<br><br>
					<table cellpadding="0" style="width:90%;">
							<tr>
							<td style="padding:0px;font:Helvetica;font-size:14px; border-radius:5px; border:0px solid #000000;"><font color="#494949">Observações:</font></td>
							</tr>
							<tr>
							<td valign="top" style="padding:10px;font:Helvetica;font-size:12px; border-radius:5px; border:1px solid #494949; height:80px;">						
							<font color="#00008B"><?php echo nl2br($item['observacao'])?></font>
							</tr>
					</table>
<br><br><br><br>