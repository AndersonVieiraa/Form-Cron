
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
'<div>".$date." ".$hora."h: Documento criado por ".$name.";</div> ')";



/*Verifica equipamento para gerar lista de transmissão
$eqplistadetransmissao= htmlspecialchars($_REQUEST['equipamento']);

//SE PED
if ($eqplistadetransmissao == '04B1-PED') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
	}
if ($eqplistadetransmissao == '04B1/PED') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1-Pecém II') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1-Pecem II') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1/Pecém II') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
 	}
	if ($eqplistadetransmissao == '04B2-PED') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
	}
if ($eqplistadetransmissao == '04B2/PED') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2-Pecém II') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2-Pecem II') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2/Pecém II') {
	echo "<script>window.open('../listadetransmissaoped.php', '', 'width=80%')</script>";
 	}
	
//SE AUD
if ($eqplistadetransmissao == '04B1-AUD') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
	}
if ($eqplistadetransmissao == '04B1/AUD') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1-Acaraú II') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1-Acarau II') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1/Acaraú II') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
 	}
	if ($eqplistadetransmissao == '04B2-AUD') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
	}
if ($eqplistadetransmissao == '04B2/AUD') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2-Acaraú II') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2-Acarau II') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2/Acaraú II') {
	echo "<script>window.open('../listadetransmissaoaud.php', '', 'width=80%')</script>";
 	}

//SE SBT
if ($eqplistadetransmissao == '04B1-SBT') {
	echo "<script>window.open('../listadetransmissaosbt.php', '', 'width=80%')</script>";
	}
if ($eqplistadetransmissao == '04B1/SBT') {
	echo "<script>window.open('../listadetransmissaosbt.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1-Sobral III') {
	echo "<script>window.open('../listadetransmissaosbt.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1/Sobral III') {
	echo "<script>window.open('../listadetransmissaosbt.php', '', 'width=80%')</script>";
 	}
	if ($eqplistadetransmissao == '04B2-SBT') {
	echo "<script>window.open('../listadetransmissaosbt.php', '', 'width=80%')</script>";
	}
if ($eqplistadetransmissao == '04B2/SBT') {
	echo "<script>window.open('../listadetransmissaosbt.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2-Sobral III') {
	echo "<script>window.open('../listadetransmissaosbt.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2/Sobral III') {
	echo "<script>window.open('../listadetransmissaosbt.php', '', 'width=80%')</script>";
 	}
//SE RSD
if ($eqplistadetransmissao == '04B1-RSD') {
	echo "<script>window.open('../listadetransmissaorsd.php', '', 'width=80%')</script>";
	}
if ($eqplistadetransmissao == '04B1/RSD') {
	echo "<script>window.open('../listadetransmissaorsd.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1-Russas II') {
	echo "<script>window.open('../listadetransmissaorsd.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B1/Russas II') {
	echo "<script>window.open('../listadetransmissaorsd.php', '', 'width=80%')</script>";
 	}
	if ($eqplistadetransmissao == '04B2-RSD') {
	echo "<script>window.open('../listadetransmissaorsd.php', '', 'width=80%')</script>";
	}
if ($eqplistadetransmissao == '04B2/RSD') {
	echo "<script>window.open('../listadetransmissaorsd.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2-Russas II') {
	echo "<script>window.open('../listadetransmissaoarsd.php', '', 'width=80%')</script>";
 	}
if ($eqplistadetransmissao == '04B2/Russas II') {
	echo "<script>window.open('../listadetransmissaorsd.php', '', 'width=80%')</script>";
 	}

*/	
//Fim Verifica equipamento para gerar lista de transmissão





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
