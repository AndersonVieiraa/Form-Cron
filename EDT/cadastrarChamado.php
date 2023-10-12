<?php
     
include "config.php";
 
header('Content-type: text/html; charset=ISO-8859-1');

$sql = "INSERT INTO CHAMADO(
tipochamado,
chamado,
email
)
VALUES
('".$_POST['tipochamado']."',
'".$_POST['chamado']."', 
'".$_POST['email']."' 
)";

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
