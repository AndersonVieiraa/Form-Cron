<?php
//include "../permissaoN2.php";

$nome = htmlspecialchars($_REQUEST['nome']);
$login = htmlspecialchars($_REQUEST['login']);
$email = htmlspecialchars($_REQUEST['email']);
$setor = htmlspecialchars($_REQUEST['setor']);
$senha = htmlspecialchars($_REQUEST['senha']);
$nivel = htmlspecialchars($_REQUEST['nivel']);

include 'conn.php';

$sql = "insert into users(nome,login,email,setor,senha,nivel) values('$nome','$login','$email','$setor','$senha','$nivel')";
//SHA1('".$_REQUEST['senha']."')
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => mysql_insert_id(),
		'nome' => $nome,
		'login' => $login,
		'setor' => $setor,
		'email' => $email,
		'nivel' => $nivel
	));
} else {
	echo json_encode(array('errorMsg'=>'Não foi possível inserir novo usuário.<br> * Falha na conexão <br> * Usuário ja existente'));
}
?>