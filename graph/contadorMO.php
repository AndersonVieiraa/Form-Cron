<?php

include '../config.php';

$where9 = "ano like '%2021%' " ;
$sql9 = mysql_query("Select * From MO where " . $where9 ."");
while($exibe9 = mysql_fetch_assoc($sql9)){
	

$data_inicial = $exibe9['data'];
$data_inicial1 = DateTime::createFromFormat("d/m/Y",$data_inicial);
$data_inicial2 = $data_inicial1->format("m/d/Y");
$timestamp = date_parse($data_inicial2);
$timestamp2= $timestamp['month'] - 1;

echo '[ new Date('.$timestamp['year'].','.$timestamp2.','.$timestamp['day'].'), 1 ],';

}

echo '[ new Date(2021, 11, 31), 0 ],';

$where19 = "ano like '%2022%' " ;
$sql19 = mysql_query("Select * From MO where " . $where19 ."");
while($exibe19 = mysql_fetch_assoc($sql19)){
	

$data_inicial10 = $exibe19['data'];
$data_inicial101 = DateTime::createFromFormat("d/m/Y",$data_inicial10);
$data_inicial102 = $data_inicial101->format("m/d/Y");
$timestamp10 = date_parse($data_inicial102);
$timestamp102= $timestamp10['month'] - 1;

echo '[ new Date('.$timestamp10['year'].','.$timestamp102.','.$timestamp10['day'].'), 1 ],';

}


$where193 = "ano like '%2023%' " ;
$sql193 = mysql_query("Select * From MO where " . $where193 ."");
while($exibe193 = mysql_fetch_assoc($sql193)){
	

$data_inicial103 = $exibe193['data'];
$data_inicial1013 = DateTime::createFromFormat("d/m/Y",$data_inicial103);
$data_inicial1023 = $data_inicial1013->format("m/d/Y");
$timestamp103 = date_parse($data_inicial1023);
$timestamp1023= $timestamp103['month'] - 1;

echo '[ new Date('.$timestamp103['year'].','.$timestamp1023.','.$timestamp103['day'].'), 1 ],';

}



?>