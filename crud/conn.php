<?php

$conn = @mysql_connect('localhost','id21375130_avsantos','22_Dezembro');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('id21375130_cron', $conn);

?>