<?php
	include 'conn.php';
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	
	$result = array();
	
	$rs = mysql_query("select * from CHAMADO Order By id_chamado DESC limit $offset,$rows");
	
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	
	echo json_encode($result);


//	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
//	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
//	$offset = ($page-1)*$rows;
	
//	$result = array();
	
//	include 'conn.php';
//	$inicial= $_GET['contato'];
//	$rs = mysql_query("select count(*) from acessantes where destinatario like '$inicial%'");
//	$row = mysql_fetch_row($rs);
//	$result["total"] = $row[0];
	
//	$rs = mysql_query("select * from acessantes where destinatario like '$inicial%' Order By destinatario ASC limit $offset,$rows");

//	$items = array();
//	while($row = mysql_fetch_object($rs)){
//		array_push($items, $row);
//	}
//	$result["rows"] = $items;
	
//	echo json_encode($result);

?>