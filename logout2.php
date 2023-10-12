<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORM</title>
<link href="wgrafael.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="imagem/ico" href="img/favicon.ico" />

		
</head>


<body>
<div id="caixa2">

<?php
include "config.php";
?>

 &nbsp; &nbsp;<a href="index.php"><small>Voltar</small></a><br><br><br>

  <?php
      session_start(); // Inicia a sessão
      session_destroy(); // Destrói a sessão limpando todos os valores salvos
      header("Location: index.php?a=3"); exit; // Redireciona o visitante
  ?>


<br>
<br>
<br>
<br>

</div>
</body>
</html>


