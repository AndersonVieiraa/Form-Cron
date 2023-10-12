

<?php
    
include "permissao.php";
 
include "config.php";

$id = intval($_REQUEST['id_recebidos']);

 
if (!isset($_SESSION)) session_start();
$name= $_SESSION['UsuarioNome'];
$areaemitente= $_SESSION['AreaEmitente'];
date_default_timezone_set('America/Fortaleza'); 
$date= date('d/m/Y');
$hora= date('H:i'); 

$dir = "../arquivos/"; 
// recebendo o arquivo multipart 
$file = $_FILES["arquivo"]; 
// Move o arquivo da pasta temporaria de upload para a pasta de destino 
if (move_uploaded_file($file["tmp_name"], "$dir/".$file["name"])) { 
    //echo "Arquivo anexado com sucesso!"; 
} 
else { 
    //echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
} 

$link= "arquivos/".$file["name"]."";
header('Content-type: text/html; charset=ISO-8859-1');

$sql = "INSERT INTO RECEBIDOS(
acessante,
nome,
ses,
classificacao,
link,
observacao,
emitenteusuario,
data,
hora
)
VALUES
(
'".$_POST['acessante']."',
'".$file["name"]."',
'".$_POST['ses']."',
'".$_POST['classificacao']."',
'".$link."',
'".$_POST['observacao']."',
'".$name."',
'".$date."',
'".$hora."'
)";




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
