
<?php
//include "permissao.php";
include 'conn.php';
header('Content-type: text/html; charset=utf8');


if (!isset($_SESSION)) session_start();
$name= $_SESSION['UsuarioNome'];
$areaemitente= $_SESSION['AreaEmitente']; 
date_default_timezone_set('America/Fortaleza');
$date= date('d/m/Y');
$hora= date('H:i'); 



$id = $_REQUEST['id_mo'];
$revisao = $_REQUEST['revisao'];
$revisaonumero = $_REQUEST['revisaonumero'];
$classificacao = htmlspecialchars($_REQUEST['classificacao']);
$destinatario = htmlspecialchars($_REQUEST['destinatario']);
$nomedestinatario = htmlspecialchars($_REQUEST['nomedestinatario']);
$areadestinatario = htmlspecialchars($_REQUEST['areadestinatario']);
$assuntotitulo = htmlspecialchars($_REQUEST['assuntotitulo']);

$revisaoSIM = "revisaoSIM";
$revisaoNAO = "revisaoNAO";
$textRev = "Rev.";
$revisaoSaida = "";
if ($revisao == $revisaoSIM){
	$revisaoSaida = "Rev. 0$revisaonumero";
};
if ($revisao == $revisaoNAO){
	$revisaoSaida = "";
};

$rs = mysql_query("select * from MO where id_mo='$id'");
$item = mysql_fetch_array($rs); 
$echolog = $item['logi'];
$logi2 = "<div>".$date." ".$hora."h: Documento editado por ".$name.";</div>  $echolog";

$sql = "UPDATE MO set revisao='$revisao', revisaonumero='".$_POST['revisaonumero']."', revisaoSaida='$revisaoSaida', classificacao='$classificacao', destinatario='$destinatario', nomedestinatario='$nomedestinatario',areadestinatario='$areadestinatario', assuntotitulo='$assuntotitulo', assunto='".$_POST['assunto']."', emitenteusuario='$name', data='$date', hora='$hora', areaemitente='$areaemitente', logi='$logi2' where id_mo=$id";

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
