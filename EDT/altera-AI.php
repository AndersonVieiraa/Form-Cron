
<?php
//include "permissaoN2.php";
header('Content-type: text/html; charset=utf8');
//include "permissao.php";
 include "config.php";

$id = intval($_REQUEST['id_ai']);
$revisao = $_REQUEST['revisao'];
$revisaonumero = $_REQUEST['revisaonumero'];
$classificacao = htmlspecialchars($_REQUEST['classificacao']);
$equipamento = htmlspecialchars($_REQUEST['equipamento']);
$subestacao = htmlspecialchars($_REQUEST['subestacao']);
$datainicio = htmlspecialchars($_REQUEST['datainicio']);
$datafim = htmlspecialchars($_REQUEST['datafim']);
$horainicio = htmlspecialchars($_REQUEST['horainicio']);
$horafim = htmlspecialchars($_REQUEST['horafim']);
$liberacao = htmlspecialchars($_REQUEST['liberacao']);
$normalizacao = htmlspecialchars($_REQUEST['normalizacao']);
$devolucao = htmlspecialchars($_REQUEST['devolucao']);
$devolucaoHora = htmlspecialchars($_REQUEST['devolucaoHora']);
//$condicoes = htmlspecialchars($_REQUEST['condicoes']);
$servico = htmlspecialchars($_REQUEST['servico']);
$observacoes = htmlspecialchars($_REQUEST['observacoes']);
$docinterno = htmlspecialchars($_REQUEST['docinterno']);
$notificadosnome = htmlspecialchars($_REQUEST['notificadosnome']);
$notificadossetor = htmlspecialchars($_REQUEST['notificadossetor']);
$notificadosempresa = htmlspecialchars($_REQUEST['notificadosempresa']);
$periodicidade = htmlspecialchars($_REQUEST['periodicidade']);
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

if (!isset($_SESSION)) session_start();
$emitenteusuario= $_SESSION['UsuarioNome'];
$areaemitente= $_SESSION['AreaEmitente']; 
date_default_timezone_set('America/Fortaleza');
$data= date('d/m/Y');
$hora= date('H:i');
$ano=date('Y'); 

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


include 'conn.php';

$rs = mysql_query("select * from AI where id_ai='$id'");
$item = mysql_fetch_array($rs); 
$echolog = $item['logi'];
$logi2 = "<div>".$data." ".$hora."h: Documento editado por ".$emitenteusuario.";</div>  $echolog";


$sql = "update AI set revisao='$revisao', revisaonumero='$revisaonumero', revisaoSaida='$revisaoSaida', classificacao='$classificacao',equipamento='$equipamento',subestacao='$subestacao',datainicio='$datainicio',datafim='$datafim',horainicio='$horainicio',horafim='$horafim',liberacao='$liberacao',normalizacao='$normalizacao',devolucao='$devolucao', devolucaoHora='$devolucaoHora',devolucaoSaida='$devolucaoSaida', condicoes='".$_POST['condicoes']."',servico='$servico',observacoes='$observacoes',docinterno='$docinterno',notificadosnome='$notificadosnome',notificadossetor='$notificadossetor',notificadosempresa='$notificadosempresa',emitenteusuario='$emitenteusuario',areaemitente='$areaemitente',data='$data',hora='$hora', periodicidade='$periodicidade', logi='$logi2'  where id_ai=$id";
//senha=SHA1('$senha')
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'ano' => $ano,
		'classificacao' => $classificacao,
		'equipamento' => $equipamento,
		'subestacao' => $subestacao,
		'datainicio' => $datainicio,
		'datafim' => $datafim,
		'horainicio' => $horainicio,
		'horafim' => $horafim,
		'liberacao' => $liberacao,
		'normalizacao' => $normalizacao,
		'devolucao' => $devolucao,
		'devolucaoHora' => $devolucaoHora,
		'condicoes' => $condicoes,
		'servico' => $servico,
		'observacoes' => $observacoes,
		'docinterno' => $docinterno,
		'notificadosnome' => $notificadosnome,
		'notificadossetor' => $notificadossetor,
		'notificadosempresa' => $notificadosempresa,
		'emitenteusuario' => $emitenteusuario,
		'areaemitente' => $areaemitente,
		'data' => $data,
		'hora' => $hora,
		'periodicidade' => $periodicidade
	));
	
} else {
	echo json_encode(array('errorMsg'=>'Não foi possível editar AI.<br> * Falha na conexão <br> * Procure o Administrador'));
}













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
