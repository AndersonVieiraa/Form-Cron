﻿<!--Sistema de mensagens-->	
<?php

 if (empty($_GET['a'])) {
}
else{	
$e = $_GET['a'];

switch ($e) {
	case 1:
	$msg = "AI Editado com Sucesso!";
	break;
	
	case 2:
	$msg = "AI Criado com Sucesso!";
	break;
	
}

if ($e == 1 or $e == 2) {	
echo "<script>$.messager.show({title:'Mensagem',msg:'$msg',timeout:2500,showType:'show'});</script>";

}
}

?>	

<!--Fim sistema de mensagens -->
