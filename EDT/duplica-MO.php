
<?php
//include "permissao.php";
header('Content-type: text/html; charset=utf8');
if (!isset($_SESSION)) session_start();
$name= $_SESSION['UsuarioNome'];
$areaemitente= $_SESSION['AreaEmitente']; 
date_default_timezone_set('America/Fortaleza');
$date= date('d/m/Y');
$hora= date('H:i');

include '../config.php';

	//Codigo do numeração para gerar numero do documento
		$sql2 = "SELECT numero FROM numeracao2 WHERE id = 1";
		$res = mysql_query($sql2);
		$linn=mysql_fetch_row($res);
		$exibir=$linn[0];
		$somar=$exibir + 1;
		$enviar = "UPDATE numeracao2 SET numero = '$somar' WHERE id = 1";
		mysql_query($enviar);
		$ano=date('Y');
	//FIM Codigo do numeração para gerar numero do documento



include 'conn.php';

$sql = "INSERT INTO MO(
numero,
ano,
classificacao,
destinatario,
areadestinatario,
nomedestinatario,
assuntotitulo,
assunto,
emitenteusuario,
data,
hora,
areaemitente,
logi
)
VALUES
('".$somar."',
'".$ano."',
'".$_POST["classificacao"]."',
'".$_POST["destinatario"]."',
'".$_POST['areadestinatario']."',
'".$_POST['nomedestinatario']."',
'".$_POST['assuntotitulo']."',
'".$_POST['assunto']."',
'".$name."',
'".$date."',
'".$hora."',
'".$areaemitente."',
'<div>".$date." ".$hora."h: Documento criado por ".$name.";</div> ')";

$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(


	));
} else {
	echo json_encode(array('errorMsg'=>'Não foi possível inserir novo usuário.<br> * Falha na conexão <br> * Usuário ja existente'));
}



//Verifico se o registro foi inserido com sucesso
if ($result == true) {
//	echo "<script>window.location.href='index-adm.php?b=1'</script>";
    //include "index.php";
	}
else {
   echo "<script>window.location.href='index-adm.php?b=2'</script>";
	//echo " &nbsp; &nbsp; &nbsp; &nbsp; Não foi possivel inserir o registro!<br>".mysql_error();
}


/**senha=SHA1('$senha')
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		
		'empresa' => $empresa,
		'ses' => $ses,
		'remoto' => $remoto,
		'centros' => $centros,
		'nomespre' => $nomespre,
		'emailspre' => $emailspre,
		'telefonespre' => $telefonespre,
		'nomestr' => $nomestr,
		'emailstr' => $emailstr,
		'telefonestr' => $telefonestr,
		'nomespos' => $nomespos,
		'emailspos' => $emailspos,
	
		'nomesoutros' => $nomesoutros,
		'emailsoutros' => $emailsoutros,
		'telefonesoutros' => $telefonesoutros
	));
} else {
	echo json_encode(array('errorMsg'=>'Não foi possível inserir novo usuário.<br> * Falha na conexão <br> * Usuário ja existente'));
}**/













//$sql = ("UPDATE agenda SET
//nome='".$_POST['nome']."',
//telefone='".$_POST['telefone']."',
//comercial='".$_POST['comercial']."',
//celular='".$_POST['celular']."',
//celular2='".$_POST['celular2']."',
//email='".$_POST['email']."',
//site='".$_POST['site']."',
//observacao='".$_POST['observacao']."'

//where id_contato=" intval($_REQUEST['id']));

//$resultado = mysql_query($sql)
//or die (mysql_error());

//if ($resultado == true) {
//	echo "Contato alterado COM SUCESSO!";
    //echo "<script>window.location.href='index.php'</script>";
//	}
//else {
//    echo "&nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; Não foi possivel alterar o registro ".mysql_error();
	//echo "<script>window.location.href='index.php'</script>";
//}
?>
