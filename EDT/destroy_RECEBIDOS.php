<?php

$id = intval($_REQUEST['id']);
$nome = htmlspecialchars($_REQUEST['nome']);

include 'conn.php';

$sql = "delete from RECEBIDOS where id_recebidos=$id";
$result = @mysql_query($sql);


if ($result){
	$dir = "../arquivos/$nome"; 
	$resultado = unlink($dir);
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>