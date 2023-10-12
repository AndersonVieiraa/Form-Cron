<?php
//include "../permissaoN2.php";


$id = intval($_REQUEST['id']);
$nome = htmlspecialchars($_REQUEST['nome']);
$login = htmlspecialchars($_REQUEST['login']);
$email = htmlspecialchars($_REQUEST['email']);
$setor = htmlspecialchars($_REQUEST['setor']);
$senha = htmlspecialchars($_REQUEST['senha']);
$nivel = htmlspecialchars($_REQUEST['nivel']);


include 'conn.php';

$sql = "update users set nome='$nome',login='$login',email='$email',senha='$senha',nivel='$nivel',setor='$setor'  where id=$id";
//senha=SHA1('$senha')
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => $id,
		'nome' => $nome,
		'login' => $login,
		'email' => $email,
		'setor' => $setor,
		'nivel' => $nivel
		//'senha' => $senha
	));
} else {
	echo json_encode(array('errorMsg'=>'Não foi possível inserir novo usuário.<br> * Falha na conexão <br> * Usuário ja existente'));
}
?>