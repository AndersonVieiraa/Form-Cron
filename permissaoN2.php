<?php
  if (!isset($_SESSION)) session_start();
  $nivel_necessario = 2;
  if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] <$nivel_necessario)) {
    header("Location: index-com.php"); 
  }
?>