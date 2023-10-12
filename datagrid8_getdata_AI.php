<?php
	include 'conn.php';
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	
	$id_ai = isset($_POST['id_ai']) ? mysql_real_escape_string($_POST['id_ai']) : '';
	$numero = isset($_POST['numero']) ? mysql_real_escape_string($_POST['numero']) : '';
	$ano = isset($_POST['ano']) ? mysql_real_escape_string($_POST['ano']) : '';
	$datainicio = isset($_POST['datainicio']) ? mysql_real_escape_string($_POST['datainicio']) : '';
	$horainicio = isset($_POST['horainicio']) ? mysql_real_escape_string($_POST['horainicio']) : '';
	$datafim = isset($_POST['datafim']) ? mysql_real_escape_string($_POST['datafim']) : '';
	$horafim = isset($_POST['horafim']) ? mysql_real_escape_string($_POST['horafim']) : '';
	$equipamento = isset($_POST['equipamento']) ? mysql_real_escape_string($_POST['equipamento']) : '';
	$subestacao = isset($_POST['subestacao']) ? mysql_real_escape_string($_POST['subestacao']) : '';
	$servico = isset($_POST['servico']) ? mysql_real_escape_string($_POST['servico']) : '';
	$emitenteusuario = isset($_POST['emitenteusuario']) ? mysql_real_escape_string($_POST['emitenteusuario']) : '';
	$offset = ($page-1)*$rows;
	
	$result = array();
	
	$where = "id_ai like '%$id_ai%' and numero like '%$numero%' and ano like '%$ano%' and ano like '%$ano%' and datainicio like '%$datainicio%' and horainicio like '%$horainicio%' and datafim like '%$datafim%' and horafim like '%$horafim%' and equipamento like '%$equipamento%' and subestacao like '%$subestacao%' and servico like '%$servico%' and emitenteusuario like '%$emitenteusuario%'";
	$rs = mysql_query("select count(*) from AI where " . $where);
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	
	$rs = mysql_query("select * from AI where " . $where . " Order By id_ai DESC limit $offset,$rows");
	
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