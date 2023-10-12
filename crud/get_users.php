

<?php
//include "../permissaoN2.php";

	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
	$login = isset($_POST['login']) ? $_POST['login'] : '';
	$setor = isset($_POST['setor']) ? $_POST['setor'] : '';
	$nivel = isset($_POST['nivel']) ? $_POST['nivel'] : '';
	
	$offset = ($page-1)*$rows;
	$result = array();

	include 'conn.php';
	$where = "id like '%$id%' and nome like '%$nome%' and login like '%$login%' and setor like '%$setor%' and nivel like '%$nivel%'";
	
	$rs = mysql_query("select count(*) from users where " . $where);
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("select * from users where " . $where . " Order By nome ASC limit $offset,$rows");
	
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>