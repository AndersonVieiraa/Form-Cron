<?php

include '../config.php';

$where309 = "ano like '%2021%' " ;
$sql309 = mysql_query("Select * From ATEIE where " . $where309 ."");
while($exibe309 = mysql_fetch_assoc($sql309)){
	

$data_inicial30 = $exibe309['data'];
$data_inicial301 = DateTime::createFromFormat("d/m/Y",$data_inicial30);
$data_inicial302 = $data_inicial301->format("m/d/Y");
$timestamp30 = date_parse($data_inicial302);
$timestamp302= $timestamp30['month'] - 1;

echo '[ new Date('.$timestamp30['year'].','.$timestamp302.','.$timestamp30['day'].'), 1 ],';

}

echo '[ new Date(2021, 11, 31), 0 ],';

$where319 = "ano like '%2022%' " ;
$sql319 = mysql_query("Select * From ATEIE where " . $where319 ."");
while($exibe319 = mysql_fetch_assoc($sql319)){
	

$data_inicial310 = $exibe319['data'];
$data_inicial3101 = DateTime::createFromFormat("d/m/Y",$data_inicial310);
$data_inicial3102 = $data_inicial3101->format("m/d/Y");
$timestamp310 = date_parse($data_inicial3102);
$timestamp3102= $timestamp310['month'] - 1;

echo '[ new Date('.$timestamp310['year'].','.$timestamp3102.','.$timestamp310['day'].'), 1 ],';

}

$where3193 = "ano like '%2023%' " ;
$sql3193 = mysql_query("Select * From ATEIE where " . $where3193 ."");
while($exibe3193 = mysql_fetch_assoc($sql3193)){
	

$data_inicial3103 = $exibe3193['data'];
$data_inicial31013 = DateTime::createFromFormat("d/m/Y",$data_inicial3103);
$data_inicial31023 = $data_inicial31013->format("m/d/Y");
$timestamp3103 = date_parse($data_inicial31023);
$timestamp31023= $timestamp3103['month'] - 1;

echo '[ new Date('.$timestamp3103['year'].','.$timestamp31023.','.$timestamp3103['day'].'), 1 ],';

}


?>