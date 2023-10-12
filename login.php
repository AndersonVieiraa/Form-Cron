<?php

include "config.php";
	
	
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)

  
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
	 
     header("Location: index.php?a=1"); exit;
	
  }
  
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  
  $sql = "SELECT `id`, `nome`, `login`, `setor`, `nivel` FROM `users` WHERE (`login` = '".$usuario."') AND (`senha` = '".$senha."') LIMIT 1";
  $query = mysql_query($sql);

  
  
// Salvar os dados na sessão e redirecionar o visitante para uma página restrita

  if (mysql_num_rows($query) != 1) {
	header("Location: index.php?a=2"); exit;
	 
	 
  } else {
      // Salva os dados encontrados na variável $resultado
      $resultado = mysql_fetch_assoc($query);
    
      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
    
      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];
	  $_SESSION['UsuarioLogin'] = $resultado['login'];
	  $_SESSION['AreaEmitente'] = $resultado['setor'];
    
      // Redireciona o visitante para pagina de administrador - OBS: caso o perfil seja comum, será redirecionado para Usuario comum
      header("Location: index-adm.php?name=".$resultado['nome'].""); 
      exit;
  }

  ?>

