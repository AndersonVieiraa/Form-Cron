<?php

$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "delete from AI where id_ai=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Ocorreu um erro ao tentar remover o AI'));
}
?>