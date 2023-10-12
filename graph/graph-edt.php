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
<link rel="icon" type="imagem/ico" href="../img/favicon.png" />
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mukta|Karla" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">


</head>

<?php 
include "../permissaoN1.php";
include '../config.php';
include 'contadores.php';	
include "contador_logout.php";
?>

<body style="width:100%;height:100%; border-collapse:collapse; table-layout:; align: center; ">
<table border="0" style="width:100%;height:100%; border-collapse:collapse; table-layout:; align: center; **background: url(ilustracoes/fundo3.png)no-repeat right bottom fixed; ">
		<tr>
		<td colspan="2">
			<table border="0" width="100%" style="border-collapse:collapse;">
				<tr>
				<td  width="30%" style="padding:00px">
					
					<br><a style="text-decoration: none;" href="../index-adm.php" target="">
					<img src="http:../ilustracoes/logo02.png" style=" width:290px;height:75px; padding-left:50px;" />
					</a>
				</td>
				<td   width="70%" align="right" valign="top" style="padding:15px">
						<table border="0" align="right" valign="top" >
						<tr>
						<font size="3" color="grey">|<a style="text-decoration: none;" href="../index-adm.php" target=""><font size="3" class="efeitomenu"> &nbsp Pagina Inicial &nbsp 
						<font size="3" color="grey">|<a style="text-decoration: none;" href="../logout.php" ><font size="3" class="efeitomenu"> &nbsp Logout &nbsp </font> </a>
						<font size="3" color='grey'>|</font> <font size="3" color='grey'>&nbsp Olá, <?php    echo $_SESSION['UsuarioNome'];?> &nbsp </font>
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



<tr>			
<td  width="100%" align="center" valign="top" style="padding-bottom:50px;">
<table border="0" width="100%" align="center" style="padding:10px;">
		<tr>
		<td align="center" width="33%" valign="center" style="padding-left:0px;">
				<table border="0" align="right" class="botao">
					<tr>
						<td align="center" class="botao_text1">Total de MO's </td>
					</tr>
					<tr>
	  
						<td align="center" valign="top" class="botao_text2">
		  					<b>= <span class="incrementalNumber" set-time="2500" data-value="<?php echo $mo;?>"></span></b>
						</td>
					</tr>
				</table>
		</td>
		
		<td align="center" width="33%" valign="center" style="padding-left:0px;">
				<table border="0" align="center" class="botao3">
					<tr>
						<td align="center" class="botao_text1">Total de AI's</td>
					</tr>
					<tr>
						<td align="center" class="botao_text2">
							<b>= <span class="incrementalNumber" set-time="2500" data-value="<?php echo $ai;?>"></span></b>
						</td>
					</tr>
				</table>
		</td>
		<td align="center" width="33%" valign="center" style="padding-left:0px;">
				<table border="0" align="left" class="botao2">
					<tr>
						<td align="center" class="botao_text1">Total de ATEIE's</td>
					</tr>
					<tr>
						<td align="center" class="botao_text2">
							<b>= <span class="incrementalNumber" set-time="2500" data-value="<?php echo $ateie;?>"></span></b>
						</td>
					</tr>
				</table>
		</td>
		</tr>
</table>

</td>
</tr>



<tr>
<td  width="100%" align="center" valign="top" style="padding-bottom:10px;">
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart3);

function drawChart3() {
var data = google.visualization.arrayToDataTable([
  ['Ano', 'NORTE', 'OESTE'],
  ['2021',  26,      12],
  ['2022',  29,      14]
]);

var options = {
  title: 'Evolução da quantidade de Acessantes por Área',
  curveType: 'function',
  legend: { position: 'bottom' }
};

var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

chart.draw(data, options);
}
</script>

<div id="curve_chart" style="width: 1200px; height: 500px; border: 1px solid #ccc; border-radius: 00px;"></div>

</td>
</tr>




<tr>
<td  width="100%" align="center" valign="top" style="padding-bottom:50px; padding-top:10px; border-radius:0px;">
<script type="text/javascript">

// Load Charts and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Draw the pie chart for Sarah's pizza when Charts is loaded.
google.charts.setOnLoadCallback(drawSarahChart);

// Draw the pie chart for the Anthony's pizza when Charts is loaded.
google.charts.setOnLoadCallback(drawAnthonyChart);

// Callback that draws the pie chart for Sarah's pizza.
function drawSarahChart() {

// Create the data table for Sarah's pizza.
var data = new google.visualization.DataTable();
data.addColumn('string', 'Topping');
data.addColumn('number', 'Slices');
data.addRows([
  ['Norte', <?php echo $acessanteN;?>],
  ['Oeste', <?php echo $acessanteO;?>]
]);

// Set options for Sarah's pie chart.
var options = {title:'Número de Acessantes por Área',
			   width:600,
			   height:400,
			   colors: ['#0000CC', '#CD5C5C']
			};

// Instantiate and draw the chart for Sarah's pizza.
var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
chart.draw(data, options);
}

// Callback that draws the pie chart for Anthony's pizza.
function drawAnthonyChart() {

// Create the data table for Anthony's pizza.
var data = new google.visualization.DataTable();
data.addColumn('string', 'Topping');
data.addColumn('number', 'Slices');
data.addRows([
  ['Norte', <?php echo $sesN;?>],
  ['Oeste', <?php echo $sesO;?>]
]);

// Set options for Anthony's pie chart.
var options = {title:'Número de Subestações por Área',
			   width:600,
			   height:400,
			   colors: ['#4169E1', '#008B8B']
			};

// Instantiate and draw the chart for Anthony's pizza.
var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
chart.draw(data, options);
}
</script>
<!--Table and divs that hold the pie charts-->
<table class="columns">
<tr>
<td><div id="Sarah_chart_div" style="border: 1px solid #ccc; border-radius: 0px;"></div></td>
<td><div id="Anthony_chart_div" style="border: 1px solid #ccc"></div></td>
</tr>
</table>
</td>
</tr>



<tr>
<td  width="100%" align="center" valign="top" style="padding-bottom:150px;">
<script type="text/javascript">
google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart9);	  
google.charts.setOnLoadCallback(drawChart29);

function drawChart9() {
var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['AQD', <?php echo $AQD;?>],
  ['AUD', <?php echo $AUD;?>],
  ['BNB', <?php echo $BNB;?>],
  ['CMA', <?php echo $CMA;?>],
  ['CPE', <?php echo $CPE;?>],
  ['FZD', <?php echo $FZD;?>],
  ['MLG', <?php echo $MLG;?>],
  ['MSD', <?php echo $MSD;?>],
  ['MSQ', <?php echo $MSQ;?>],
  ['PED', <?php echo $PED;?>],
  ['QXA', <?php echo $QXA;?>],
  ['QXR', <?php echo $QXR;?>],
  ['RSD', <?php echo $RSD;?>],
  ['SBT', <?php echo $SBT;?>]
]);

var options = {
  title: 'Nº de Acessantes por Subestação - Área NORTE',
  pieHole: 0.4,
  width:600,
  height:500
};

var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
chart.draw(data, options);
}

function drawChart29() {
var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['BEA', <?php echo $BEA;?>],
  ['ELM', <?php echo $ELM;?>],
  ['IBD', <?php echo $IBD;?>],
  ['PIC', <?php echo $PIC;?>],
  ['SJI', <?php echo $SJI;?>],
  ['TSD', <?php echo $TSD;?>]
]);

var options = {
  title: 'Nº de Acessantes por Subestação - Área OESTE',
  pieHole: 0.4,
  width:600,
  height:500
};

var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
chart.draw(data, options);
}
</script>
<table class="columns">
<tr>
<td><div id="donutchart" style="width: 100%; border: 1px #DCDCDC solid;"></div></td>
<td><div id="donutchart2" style="width: 100%;border: 1px #DCDCDC solid;"></div></td>
</tr>
</table>


</td>
</tr>


<tr>			
<td  align="center">
<table align="center" width="90%"><tr><td style="border-bottom:1px #aaa solid;">

</td></tr</table>
</td>

</tr>
<tr>			
	<td colspan="5"  align="center" width="100%" style="font-size:13px; padding-bottom:30px; color:#555 ;background-color: ; padding-right:15px;">
Copyright &copyDONFS-2022
	</td>

</tr>



</table>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
incrementalNumber();
});
</script>
