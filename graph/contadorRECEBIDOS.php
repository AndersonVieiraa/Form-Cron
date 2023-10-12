<?php

include '../config.php';

$where409 = "data like '%2022%' " ;
$sql409 = mysql_query("Select * From RECEBIDOS where " . $where409 ."");
while($exibe409 = mysql_fetch_assoc($sql409)){
	

$data_inicial40 = $exibe409['data'];
$data_inicial401 = DateTime::createFromFormat("d/m/Y",$data_inicial40);
$data_inicial402 = $data_inicial401->format("m/d/Y");
$timestamp40 = date_parse($data_inicial402);
$timestamp402= $timestamp40['month'] - 1;

echo '[ new Date('.$timestamp40['year'].','.$timestamp402.','.$timestamp40['day'].'), 1 ],';

}

echo '[ new Date(2022, 11, 41), 0 ],';

$where4093 = "data like '%2023%' " ;
$sql4093 = mysql_query("Select * From RECEBIDOS where " . $where4093 ."");
while($exibe4093 = mysql_fetch_assoc($sql4093)){
	

$data_inicial403 = $exibe4093['data'];
$data_inicial4013 = DateTime::createFromFormat("d/m/Y",$data_inicial403);
$data_inicial4023 = $data_inicial4013->format("m/d/Y");
$timestamp403 = date_parse($data_inicial4023);
$timestamp4023= $timestamp403['month'] - 1;

echo '[ new Date('.$timestamp403['year'].','.$timestamp4023.','.$timestamp403['day'].'), 1 ],';

}



?>