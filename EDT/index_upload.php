<html>
  <head>
<link rel="stylesheet" type="text/css" href="../../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../../easyui/themes/color.css">
<link rel="stylesheet" type="text/css" href="../../easyui/demo/demo.css">
<script type="text/javascript" src="../../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../../easyui/jquery.easyui.min.js"></script>
    <title>Envio de arquivo</title>
  </head>
  <body style="padding:10px;font:Helvetica;font-size:14px; border:0px solid #4682B4;">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      Selecione o arquivo: <input type="file" name="arquivo" />
      <input class="easyui-linkbutton c6" type="submit" style="width:120px; padding:3px" value="Anexar"/>
    </form>
  </body>
</html>