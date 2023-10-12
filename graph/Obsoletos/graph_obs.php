<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AVA - Dashboard</title>

<link rel="stylesheet" type="text/css" href="../../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../../easyui/demo/demo.css">
<script type="text/javascript" src="../../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../../easyui/jquery.easyui.min.js"></script>
<link rel="icon" type="imagem/ico" href="../img/favicon.png" />

<link rel="stylesheet" href="css/jquery.listtopie.css">
<script src="./js/jquery.listtopie.min.js"></script>
<script type="text/javascript" src="js/snap.svg-min.js"></script>


</head>


<body style="width:100%;height:100%; border-collapse:collapse; table-layout:; align: center; ">
<table border="0" style="width:100%;height:100%; border-collapse:collapse; table-layout:; align: center; **background: url(ilustracoes/fundo3.png)no-repeat right bottom fixed; ">
		<tr>
		<td colspan="2">
			<table border="0" width="100%" style="border-collapse:collapse;">
				<tr>
				<td  width="30%" style="padding:00px">
					
					<br><a style="text-decoration: none;" href="../index.php" target="">
					<img src="http:../img/logo00.png" style=" width:290px;height:75px; padding-left:50px;" />
					</a>
				</td>
				<td   width="70%" align="right" valign="top" style="padding:15px">
						<table border="0" align="right" valign="top" >
						<tr>
						<td colspan="2"  align="right" width="100%" style="padding:5px; padding-right:20px">
						<font size="3" color="grey">|<a style="text-decoration: none;" href="../index.php" target=""><font size="3" class="efeitomenu"> &nbsp Pagina Inicial &nbsp </font></a><font size="3" color="grey">|</font>
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
			
<td  width="100%" style="padding-left:50px;">

<table border="0" align="center" cellpadding="0" style="background-color:white;">

<tr>
<td colspan="2">
	<table border="0" align="center" style="padding:50px;">
		<tr>
		<!--<td align="center" valign="center"><img src="../img/favicon.png" style="width:70px; height:70px;"></td>-->
		<td align="center" valign="center" style="padding-left:10px;"><div style="align:center; text-align:center; padding:0px; font-family: Sans-Serif, Arial, Verdana, Tahoma; color: #51a0ff; font-size: 45px;text-shadow: 0.07em 0.07em 0.07em grey"> Dashboard</div></td>
		</tr>
	</table>
</td>
</tr>

<tr colspan="2">
<td>

<table align="center" border="0" cellpadding="3">
<tr><td align="center" colspan="2">
<h3>Número de Acessantes</h3>
</td></tr>
<tr>
<td style="margin: 150px; width: 340px;" colspan="2">

    	<div id="static">
 	 	<div data-lcolor="#51a0ff">          
			 <?php
				include '../config.php';					
				$acessante=0;	
				$sql = mysql_query("Select * From acessantes");
				while($exibe = mysql_fetch_assoc($sql)){
				$acessante= $acessante+1;
				}
				echo $acessante;
			?>
		</div>

  	 	<div data-lcolor="#88EB88">
			 <?php					
				$acessantes_oeste=0;	
				$sql2 = mysql_query("Select * From acessantes_oeste");
				while($exibe2 = mysql_fetch_assoc($sql2)){
				$acessantes_oeste= $acessantes_oeste+1;
				}
				echo $acessantes_oeste;
			?>
		</div>

	</div>

</td>
</tr>

<tr>
<td align="right"><div style="background:#71c0ff;" id="rectangle"></div></td>
<td>NORTE</td>
</tr>

<tr>
<td align="right"><div style="background:#A8FBA8;" id="rectangle"></div></td>
<td>OESTE</td>
</tr>

</table>
<br><br>

</td>
<td>


<table align="center" border="0" cellpadding="3" style="height:auto;">
<tr><td align="center" colspan="2">
<h3>Número de Subestações</h3>
</td></tr>
<tr>
<td style="margin: 150px; width: 340px;" colspan="2">

    	<div id="static2">
 	 	<div data-lcolor="#51a0ff">          
			 <?php
				include '../config.php';					
				$ses=0;	
				$sql3 = mysql_query("Select * From contato_ses");
				while($exibe3 = mysql_fetch_assoc($sql3)){
				$ses= $ses+1;
				}
				$ses = $ses+1;
				echo $ses;
			?>
		</div>

  	 	<div data-lcolor="#88EB88">
			 <?php					
				$ses_oeste=0;	
				$sql4 = mysql_query("Select * From contato_ses_oeste");
				while($exibe4 = mysql_fetch_assoc($sql4)){
				$ses_oeste= $ses_oeste+1;
				}
				echo $ses_oeste;
			?>
		</div>
	</div>

</td>
</tr>

<tr>
<td align="right"><div style="background:#71c0ff;" id="rectangle"></div></td>
<td>NORTE</td>
</tr>

<tr>
<td align="right"><div style="background:#A8FBA8;" id="rectangle"></div></td>
<td>OESTE</td>
</tr>

</table>
<br><br>

</td>
</tr>

<tr><td colspan="2">
<!--Início grafico de coluna area Norte-->
   <div title="Acessantes" style="padding-top:1px;">
	<iframe scrolling="yes" frameborder="0"  src="BarChart/index.php" style="width:1000px;height:600px;"></iframe>
   </div>					
<!--Fim de grafico de coluna area Norte-->
</td></tr>

<tr><td colspan="2">
<!--Início grafico de coluna area Oeste-->
   <div title="Acessantes" style="padding-top:1px;">
	<iframe scrolling="yes" frameborder="0"  src="BarChart/index2.php" style="width:1000px;height:600px;"></iframe>
   </div>					
<!--Fim de grafico de coluna area Oeste-->

</td></tr>
</table>

<br><br><br><br><br><br>

			</td></tr>
			</table>





</body>
</html>

<style>
#rectangle{
    width:40px;
    height:20px;
    border-style: solid;
    border-width: 2px;
}

a{
	text-decoration: none;
}

.efeitomenu {
	text-decoration: none;
    color: #777;
    **background-color: green;
}

.efeitomenu:hover {
	text-decoration: none;
     color: #CCC;
     **background-color: green;
}
</style>


</style>

<script>
  $('#static').listtopie({
    startAngle:0,
    strokeWidth:0,
      hoverEvent:false,
      drawType:'round',
      speedDraw:150,
      hoverColor:'#ffffff',
      textColor:'#000',
      strokeColor:'#ffffff',
      textSize:'18',
      hoverAnimate:true,
      marginCenter:1,
      sectorRotate:true,
      easingType:mina.bounce,
      infoText:true,
  });
  $('#static2').listtopie({
    startAngle:0,
    strokeWidth:0,
      hoverEvent:false,
      drawType:'round',
      speedDraw:150,
      hoverColor:'#ffffff',
      textColor:'#000',
      strokeColor:'#ffffff',
      textSize:'18',
      hoverAnimate:true,
      marginCenter:1,
      sectorRotate:true,
      easingType:mina.bounce,
      infoText:true,
  }) ;




</script>