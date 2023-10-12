<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORM - Dashboard</title>

<link rel="stylesheet" type="text/css" href="../../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../../easyui/demo/demo.css">
<script type="text/javascript" src="../../easyui/jquery.min.js"></script>
<script type="text/javascript" src="js/incrementalNumber.js"> </script>
<script type="text/javascript" src="../../easyui/jquery.easyui.min.js"></script>
<link rel="icon" type="imagem/ico" href="../img/favicon02.png" />
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mukta|Karla" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">


</head>
<?php 
//include "../permissaoN1.php";
$name = $_GET['name'];
include '../config.php';
include 'contadores.php';	
?>

<body style="width:100%;height:100%; border-collapse:collapse; table-layout:; align: center; ">
<table border="0" style="width:100%;height:100%; padding-bottom:50px; border-collapse:collapse; table-layout:; align: center; **background: url(ilustracoes/fundo3.png)no-repeat right bottom fixed; ">
<tr>
		<td colspan="2">
			<table border="0" width="100%" style="border-collapse:collapse;">
				<tr>
				<td  width="30%" style="padding:00px">
					
					<br><a style="text-decoration: none;" href="../index-adm.php?name=<?php echo $name;?>" target="">
					<img src="https:../ilustracoes/logo02.png" style=" width:290px;height:75px; padding-left:50px;" />
					</a>
				</td>
				<td   width="70%" align="right" valign="top" style="padding-right:10px">
						<table border="0" align="right" valign="top" >
						<tr>
						<font size="3" color="grey">|<a style="text-decoration: none;" href="../index-adm.php?name=<?php echo $name;?>" target=""><font size="3" class="efeitomenu"> &nbsp Pagina Inicial &nbsp 
						<font size="3" color="grey">|<a style="text-decoration: none;" href="../logout.php" ><font size="3" class="efeitomenu"> &nbsp Logout &nbsp </font> </a>
						<font size="3" color='grey'>|</font> <font size="3" color='grey'>&nbsp Olá, <?php echo $name;?> &nbsp </font>
						</td>
						</tr>
						</table>
				</td>
				</tr>
			</table>
		</td>
		</tr> 

		<tr>
			<td colspan="2"  width="100%" style="padding-bottom:10px">
				<table width="100%" border="0">
					<tr>
						<td></td>	
						<td width="95%" style="border-top: #DCDCDC 1px solid;"></td>
						<td></td>
					</tr>
				</table>
			</td>
		</tr>
<tr>
			
<td  width="100%" height="100px" valign="top" style="padding-bottom:30px;">

<table border="0" align="center" cellpadding="0" style="background-color:white;">

<tr>
<td colspan="2">
	<table border="0" align="center" style="padding:10px;">
		<tr>
		<td align="center" valign="center" class="titulo"><b> Dashboard </b></td>
		</tr>
	</table>
</td>
</tr>
</table>

	
</td>
</tr>

<?php include 'graph.php'; ?>

</table>
</body>
</html>