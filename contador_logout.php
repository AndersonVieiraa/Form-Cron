
<!-- Início Sistema de logout por tempo de uso-->
<script>


setTimeout(function() {
	$.messager.alert('AVISO','Você será deslogado em 1 minuto, atualize a pagina ou refaça o Login','warning');
}, 2640 * 1000); //59 minutos 60000= 1 minuto	
	
setTimeout(function() {
		window.location.href="logout2.php"
}, 2700 * 1000); //60 minutos 60000= 1 minuto

</script>
<!-- Fim Sistema de logout por tempo de uso-->