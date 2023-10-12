<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FormCRON</title>


<link rel="stylesheet" type="text/css" href="../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="imagem/ico" href="img/favicon02.png" />
</head>

<?php //include "permissaoN1.php"; 
$name = $_GET['name'];
?>	


<body style="position:fixed; width:100%; height:100%; padding:0px;">

<table border="0" style="width:100%;height:100%; table-layout:; align: center; background: url(ilustracoes/fundo3.png)no-repeat right bottom fixed; ">
		<tr>
			
			<td  align="right" width="100%" height="7%" style="padding:5px; padding-right:20px">
			<font size="3" color='grey'>|</font><a class="transp2" href="index-adm.php?name=<?php echo $name;?>" style="text-decoration: none;"><font size="4" class="efeitomenu"> &nbsp  Página Inicial &nbsp</font></a>
			<font size="3" color='grey'>|</font><a class="transp2" href="logout.php" style="text-decoration: none;" > <font size="4" class="efeitomenu">&nbsp Logout &nbsp</a> </font>
			<font size="3" color='grey'>|</font> <font size="4" color='grey'>&nbsp Olá, <?php echo $name;?> &nbsp </font>
			
			</td>
		</tr> 

		<tr>
			<td   width="100%" height="12%" style="padding-bottom: 10px">
				
				<a href="index-adm.php?name=<?php echo $name;?>"> <img src="https:ilustracoes/logo02.png" style=" width:270px;height:70px; padding-left:50px;" /></a>
			</td>
		</tr> 

		<tr>
			<td width="100%" height="2%" style="padding-bottom:5px">
				<table width="100%" border="0">
					<tr>
						<td></td>	
						<td width="90%" style="border-top: #DCDCDC 1px solid;"></td>
						<td></td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td valign="top" >
				<?php
					include "tableANEXOS/index.html";
				?>
			</td>
		</tr>
		<tr>
			<td colspan="2"  align="center" width="100%" style="font-size:11px; color:#AAA ;background-color: ; padding-right:15px; padding-bottom:5px;">
				<table style="border:1px #ddd solid; border-radius: 10px; padding-left:15px; padding-right:15px;"><tr><td>
					&copyANDERSON-2023
				</td></tr></table>
			</td>
		</tr>


	</table>


<script>
var url;
	function login(){
			$('#dlg').dialog('open').dialog('setTitle','&nbsp Dados de Login');
	}
</script>

</body>

</html>

<iframe src="atualiza_session.php" width="0" height="0"></iframe>
<?php 
include "VerificaAnoNumeracao.php";
?>

<!-- Início Sistema de logout por tempo de uso-->
<script>
	
setTimeout(function() {
		window.location.href="logout2.php"
}, 1800 * 1000); //60 minutos 60000= 1 minuto

</script>
<!-- Fim Sistema de logout por tempo de uso-->
