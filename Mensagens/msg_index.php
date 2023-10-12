<!--Sistema de mensagens de erro-->	
<?php

 if (empty($_GET['a'])) {
}
else{	
$e = $_GET['a'];

switch ($e) {
	case 1:
	$msg = "Formulário vazio!";
	break;
	
	case 2:
	$msg = "Login incorreto!";
	break;
	
	case 3:
	$msg = "Refaça o Login!";
	break;

	case 4:
		$msg = "Chamado aberto com sucesso!";
		break;

	default:
	echo "";
}

if ($e != 0) {	
echo "<script>$.messager.alert('Mensagem','$msg','warning')</script>";

}
}
?>	

<!--Fim sistema de mensagens de erro-->	

<!--Sistema de mensagens de AVISOS-->	
<?php

 if (empty($_GET['b'])) {
}
else{	
$d = $_GET['b'];

switch ($d) {
	case 1:
	$msg2 = "Chamado aberto com Sucesso!";
	break;
	
	}

if ($d == 1 or $d == 2) {	
echo "<script>$.messager.show({title:'Mensagem',msg:'$msg2',timeout:2500,showType:'show'});</script>";

}
}?>	
<!--Fim Sistema de mensagens AVISOS-->	
