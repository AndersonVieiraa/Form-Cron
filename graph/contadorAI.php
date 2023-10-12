<?php

include '../config.php';

$where209 = "ano like '%2021%' " ;
$sql209 = mysql_query("Select * From AI where " . $where209 ."");
while($exibe209 = mysql_fetch_assoc($sql209)){
	

$data_inicial20 = $exibe209['data'];
$data_inicial201 = DateTime::createFromFormat("d/m/Y",$data_inicial20);
$data_inicial202 = $data_inicial201->format("m/d/Y");
$timestamp20 = date_parse($data_inicial202);
$timestamp202= $timestamp20['month'] - 1;

echo '[ new Date('.$timestamp20['year'].','.$timestamp202.','.$timestamp20['day'].'), 1 ],';

}

echo '[ new Date(2021, 11, 31), 0 ],';

$where219 = "ano like '%2022%' " ;
$sql219 = mysql_query("Select * From AI where " . $where219 ."");
while($exibe219 = mysql_fetch_assoc($sql219)){
	

$data_inicial210 = $exibe219['data'];
$data_inicial2101 = DateTime::createFromFormat("d/m/Y",$data_inicial210);
$data_inicial2102 = $data_inicial2101->format("m/d/Y");
$timestamp210 = date_parse($data_inicial2102);
$timestamp2102= $timestamp210['month'] - 1;

echo '[ new Date('.$timestamp210['year'].','.$timestamp2102.','.$timestamp210['day'].'), 1 ],';

}

$where2193 = "ano like '%2023%' " ;
$sql2193 = mysql_query("Select * From AI where " . $where2193 ."");
while($exibe2193 = mysql_fetch_assoc($sql2193)){
	

$data_inicial2103 = $exibe2193['data'];
$data_inicial21013 = DateTime::createFromFormat("d/m/Y",$data_inicial2103);
$data_inicial21023 = $data_inicial21013->format("m/d/Y");
$timestamp2103 = date_parse($data_inicial21023);
$timestamp21023= $timestamp2103['month'] - 1;

echo '[ new Date('.$timestamp2103['year'].','.$timestamp21023.','.$timestamp2103['day'].'), 1 ],';

}


?>