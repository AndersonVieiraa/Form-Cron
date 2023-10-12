<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AVA</title>
<link rel="icon" type="imagem/ico" href="../img/favicon.ico"/>


</head>

<?php
    
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
    
  $nivel_necessario = 1;
    
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] <$nivel_necessario)) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login	
      header("Location: ../index.php?a=3"); exit;
  }
    


	include_once("conexao.php");  
	
	
	$sql = "SELECT revisao FROM revisaoacessantes";
	$res = mysqli_query($conn, $sql);
	$linn=mysqli_fetch_row($res);
	$exibir=$linn[0];
	$revisao=$exibir + 1;
	$dia=date('d');
	$mes=date('m');
	$ano=date('Y');
	$enviar = "UPDATE revisaoacessantes SET revisao = '$revisao'";
	mysqli_query($conn, $enviar);
	$enviar1 = "UPDATE revisaoacessantes SET dia = '$dia'";
	mysqli_query($conn, $enviar1);
	$enviar2 = "UPDATE revisaoacessantes SET mes = '$mes'";
	mysqli_query($conn, $enviar2);
	$enviar3 = "UPDATE revisaoacessantes SET ano = '$ano'";
	mysqli_query($conn, $enviar3);
	mysqli_close($conn);
	
	
	echo "<script>window.location='../gerarpdf/index.php'</script>";
    
			
	
  ?>
  
	
<body bgcolor="#DCDCDC">  
  
  
</body>
</html>