

<?php
    
//include "permissao.php";
 
include "config.php";

$id = intval($_REQUEST['id_ai']);
$devolucao = htmlspecialchars($_REQUEST['devolucao']);
$devolucaoHora = htmlspecialchars($_REQUEST['devolucaoHora']);
$tempodefinido = "TempoDefinido";
$imediato = "Imediato";
$aofinal = "Ao Final";
$devolucaoSaida = "";

if ($devolucao == $tempodefinido){
	$devolucaoSaida = $devolucaoHora;
};
if ($devolucao == $imediato){
	$devolucaoSaida = "Imediato";
};
if ($devolucao == $aofinal){
	$devolucaoSaida = "Ao Final";
};


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

$sql = "INSERT INTO AI(
numero,
ano,
classificacao,
equipamento,
subestacao,
datainicio,
datafim,
horainicio,
horafim,
liberacao,
normalizacao,
devolucao,
devolucaoHora,
devolucaoSaida,
condicoes,
servico,
observacoes,
docinterno,
notificadosnome,
notificadossetor,
notificadosempresa,
emitenteusuario,
data,
hora,
areaemitente,
periodicidade,
logi
)
VALUES
('".$somar."',
'".$ano."',
'".$_POST['classificacao']."',
'".$_POST['equipamento']."',
'".$_POST['subestacao']."',
'".$_POST['datainicio']."',
'".$_POST['datafim']."',
'".$_POST['horainicio']."',
'".$_POST['horafim']."',
'".$_POST['liberacao']."',
'".$_POST['normalizacao']."',
'".$_POST['devolucao']."',
'".$_POST['devolucaoHora']."',
'".$devolucaoSaida."',
'".$_POST['condicoes']."',
'".$_POST['servico']."',
'".$_POST['observacoes']."',
'".$_POST['docinterno']."',
'".$_POST['notificadosnome']."',
'".$_POST['notificadossetor']."',
'".$_POST['notificadosempresa']."',
'".$name."',
'".$date."',
'".$hora."',
'".$areaemitente."',
'".$_POST['periodicidade']."',
'<div> ".$date." ".$hora."h: Documento criado por ".$name."; </div>')";

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
