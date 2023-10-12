<?php
	include 'conn.php';
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	
	$id_mo = isset($_POST['id_mo']) ? mysql_real_escape_string($_POST['id_mo']) : '';
	$numero = isset($_POST['numero']) ? mysql_real_escape_string($_POST['numero']) : '';
	$ano = isset($_POST['ano']) ? mysql_real_escape_string($_POST['ano']) : '';
	$destinatario = isset($_POST['destinatario']) ? mysql_real_escape_string($_POST['destinatario']) : '';
	$assuntotitulo = isset($_POST['assuntotitulo']) ? mysql_real_escape_string($_POST['assuntotitulo']) : '';
	$emitenteusuario = isset($_POST['emitenteusuario']) ? mysql_real_escape_string($_POST['emitenteusuario']) : '';
	$data = isset($_POST['data']) ? mysql_real_escape_string($_POST['data']) : '';
	$offset = ($page-1)*$rows;
	
	$result = array();
	
	$where = "id_mo like '%$id_mo%' and destinatario like '%$destinatario%' and assuntotitulo like '%$assuntotitulo%' and numero like '%$numero%' and ano like '%$ano%' and emitenteusuario like '%$emitenteusuario%' and data like '%$data%'";
	$rs = mysql_query("select count(*) from MO where " . $where);
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	
	$rs = mysql_query("select * from MO where " . $where . " Order By id_mo DESC limit $offset,$rows");
	
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