<?php
	include 'conn.php';
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	
	$id_recebidos = isset($_POST['id_recebidos']) ? mysql_real_escape_string($_POST['id_recebidos']) : '';
	$acessante = isset($_POST['acessante']) ? mysql_real_escape_string($_POST['acessante']) : '';
	$nome = isset($_POST['nome']) ? mysql_real_escape_string($_POST['nome']) : '';
	$ses = isset($_POST['ses']) ? mysql_real_escape_string($_POST['ses']) : '';
	$classificacao = isset($_POST['classificacao']) ? mysql_real_escape_string($_POST['classificacao']) : '';
	$emitenteusuario = isset($_POST['emitenteusuario']) ? mysql_real_escape_string($_POST['emitenteusuario']) : '';
	$link = isset($_POST['link']) ? mysql_real_escape_string($_POST['link']) : '';
	$data = isset($_POST['data']) ? mysql_real_escape_string($_POST['data']) : '';
	$offset = ($page-1)*$rows;
	
	$result = array();
	
	$where = "id_recebidos like '%$id_recebidos%' and acessante like '%$acessante%' and nome like '%$nome%' and ses like '%$ses%' and emitenteusuario like '%$emitenteusuario%' and data like '%$data%'";
	$rs = mysql_query("select count(*) from RECEBIDOS where " . $where);
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	
	$rs = mysql_query("select * from RECEBIDOS where " . $where . " Order By id_recebidos DESC limit $offset,$rows");
	
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