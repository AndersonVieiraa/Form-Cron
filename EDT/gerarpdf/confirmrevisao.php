<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AVA</title>
<link href="wgrafael.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="imagem/ico" href="../img/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="../../../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../../../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../../../easyui/themes/color.css">
<link rel="stylesheet" type="text/css" href="../../../easyui/demo/demo.css">
<script type="text/javascript" src="../../../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../../../easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="../../../easyui/datagrid-detailview.js"></script>

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
	$revisao=$linn[0];
	$sql1 = "SELECT dia FROM revisaoacessantes";
	$res1 = mysqli_query($conn, $sql1);
	$linn1=mysqli_fetch_row($res1);
	$dia=$linn1[0];
	$sql2 = "SELECT mes FROM revisaoacessantes";
	$res2 = mysqli_query($conn, $sql2);
	$linn2=mysqli_fetch_row($res2);
	$mes=$linn2[0];
	$sql3 = "SELECT ano FROM revisaoacessantes";
	$res3 = mysqli_query($conn, $sql3);
	$linn3=mysqli_fetch_row($res3);
	$ano=$linn3[0];
	$revisao1= $revisao +1;
	
	
  ?>

	
<body bgcolor="#DCDCDC">  
  
  <div id="dlg8" class="easyui-dialog" title=" &nbsp; Confirmação" style="width:540px;height:200px;padding:10px"
            data-options="
                iconCls: 'icon-help',
               
                buttons: [{
                    text:'Sim',
                    iconCls:'icon-ok',
                    handler:function(){
					   window.location='http:../gerarpdf/alterarevisao.php'
                    }
                },{
                    text:'Não',
					iconCls:'icon-no',
                    handler:function(){
                        window.close('http:../gerarpdf/confirmrevisao.php');
                    }
                }]
            ">
        <br><br><big>Confirma a alteração da revisão "<?php echo "<b>Rev.$revisao</b>("; echo "$dia/"; echo "$mes/"; echo "$ano)";?>" para a revisão "<?php echo "<b>Rev.$revisao1</b>("; echo date('d/m/Y'); echo ")";?>"?</big>
   </div>
</body>
</html>