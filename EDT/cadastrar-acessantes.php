

<?php
    
//include "permissaoN2.php";
 
include "config.php";


header('Content-type: text/html; charset=ISO-8859-1');

$sql = "INSERT INTO acessantes(
empresa,
ses,
remoto,
centros,
nomespre,
emailspre,
telefonespre,
nomestr,
emailstr,
telefonestr,
nomespos,
emailspos,
telefonespos,
nomesoutros,
emailsoutros,
telefonesoutros
)
VALUES
('".$_POST["empresa"]."',
'".$_POST['ses']."',
'".$_POST['remoto']."',
'".$_POST['centros']."',
'".$_POST['nomespre']."',
'".$_POST['emailspre']."',
'".$_POST['telefonespre']."',
'".$_POST['nomestr']."',
'".$_POST['emailstr']."',
'".$_POST['telefonestr']."',
'".$_POST['nomespos']."',
'".$_POST['emailspos']."',
'".$_POST['telefonespos']."',
'".$_POST['nomesoutros']."',
'".$_POST['emailsoutros']."',
'".$_POST['telefonesoutros']."'
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
