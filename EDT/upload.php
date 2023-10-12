<html>
  <head>
<link rel="stylesheet" type="text/css" href="../../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../../easyui/themes/color.css">
<link rel="stylesheet" type="text/css" href="../../easyui/demo/demo.css">
    <title>Envio de arquivo</title>
  </head>
  <body>
<?php 

/*  
*$dir é o caminho da pasta onde você deseja que os arquivos sejam salvos. 
*Neste exemplo, supondo que esta pagina esteja em public_html/upload/ 
*os arquivos serão salvos em public_html/upload/imagens/ 
*Obs.: Esta pasta de destino dos arquivos deve estar com as permissões de escrita habilitadas. 
*/ 

$dir = "../arquivos/"; 
// recebendo o arquivo multipart 
$file = $_FILES["arquivo"]; 
// Move o arquivo da pasta temporaria de upload para a pasta de destino 
if (move_uploaded_file($file["tmp_name"], "$dir/".$file["name"])) { 
    echo "Arquivo anexado com sucesso!"; 
} 
else { 
    echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
}           
?>
<script>
setTimeout(function() {
		window.location.href="index_upload.php"
}, 15000); //240 minutos 60000= 1 minuto
</script>

</body>
</html>