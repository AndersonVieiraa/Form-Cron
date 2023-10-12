<?php
	include "permissaoN1.php";

  if (empty($_POST['senha'])) {
	 
     header("Location: index-com.php?b=4"); exit;
	
  }
  $id= $_SESSION['UsuarioID'];
  $senha = $_POST['senha'];
  

include 'config.php';

$sql = "update users set senha='".$senha ."'  where id='".$id."'";
//senha=SHA1('$senha')
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		
		'id' => $id,
		'senha' => $senha,
		 header("Location: index-com.php?b=3"),
		 exit
	));
} else {
	echo json_encode(array('errorMsg'=>'Não foi possível inserir novo usuário.<br> * Falha na conexão <br> * Usuário ja existente'));
}
?>