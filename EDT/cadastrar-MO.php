

<?php
    
//include "permissao.php";
 
include "config.php";

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
 
if (!isset($_SESSION)) session_start();
$name= $_SESSION['UsuarioNome'];
$areaemitente= $_SESSION['AreaEmitente'];
date_default_timezone_set('America/Fortaleza'); 
$date= date('d/m/Y');
$hora= date('H:i'); 

header('Content-type: text/html; charset=ISO-8859-1');

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
'<div>".$date." ".$hora."h: Documento criado por ".$name."; </div>')";




//	echo $sql;
//Executo a minha query
//echo $sql;
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
?>
