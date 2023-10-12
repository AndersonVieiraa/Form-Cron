
<?php 
include '../config.php';
include 'contadores.php';	
?>


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
<td  width="100%" align="center" valign="top" style="padding-bottom:30px;">
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart4);

      function drawChart4() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['MO',     <?php echo $mo;?>],
          ['AI',     <?php echo $ai;?>],
          ['ATEIE',  <?php echo $ateie;?>]
        ]);

        var options = {
          title: 'Visão Geral (Nº de cadastros por Tipo)',
		  colors: ['#1E90FF', '#CD5C5C', '#00CED1']
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <div id="piechart" style="width: 1200px; height: 450px; border: 1px solid #ccc; border-radius: 00px;"></div>

</td>
</tr>


<tr>
<td  width="100%" align="center" valign="top" style="padding-bottom:30px;">
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'MO', 'AI', 'ATEIE'],
          ['2021',  <?php echo $mo2021;?>, <?php echo $ai2021;?>, <?php echo $ateie2021;?>],
          ['2022',  <?php echo $mo2022;?>, <?php echo $ai2022;?>, <?php echo $ateie2022;?>],
          ['2023',  <?php echo $mo2023;?>, <?php echo $ai2023;?>, <?php echo $ateie2023;?>],
          ['2024',  0,      0,       0],
          ['2025',  0,      0,       0]
        ]);

        var options = {
          title : 'Nº de cadastros por Ano',
          vAxis: {title: 'Quantidade'},
          hAxis: {title: 'Anos'},
          seriesType: 'bars',
          series: {4: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div4'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div4" style="width: 1200px; height: 500px; border: 1px solid #ccc; border-radius: 00px;"></div>
</td>
</tr>


<tr>
<td  width="100%" align="center" valign="top" style="padding-bottom:30px;">
	<script type="text/javascript">
      google.charts.load("current", {packages:["calendar"]});
      google.charts.setOnLoadCallback(drawChart6);

   function drawChart6() {
       var dataTable = new google.visualization.DataTable();
       dataTable.addColumn({ type: 'date', id: 'Date' });
       dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
       dataTable.addRows([
		<?php include 'contadorMO.php';?>
        ]);

       var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

       var options = {
         title: "Dias com Cadastros de MO",
         height: 550,
       };

       chart.draw(dataTable, options);
   }
    </script>
	<table style="width: 1200px; border: 1px solid #ccc;"><tr><td align="center" style="padding-top:50px;">
    	<div id="calendar_basic" style="width: 1000px; "></div>
	</td></tr></table>
</td>
</tr>

<tr>
<td  width="100%" align="center" valign="top" style="padding-bottom:30px;">
	<script type="text/javascript">
      google.charts.load("current", {packages:["calendar"]});
      google.charts.setOnLoadCallback(drawChart66);

   function drawChart66() {
       var dataTable = new google.visualization.DataTable();
       dataTable.addColumn({ type: 'date', id: 'Date' });
       dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
       dataTable.addRows([
		<?php include 'contadorAI.php';?>
        ]);

       var chart = new google.visualization.Calendar(document.getElementById('calendar_basic2'));

       var options = {
         title: "Dias com Cadastros de AI",
         height: 550,
       };

       chart.draw(dataTable, options);
   }
    </script>
	<table style="width: 1200px; border: 1px solid #ccc;"><tr><td align="center" style="padding-top:50px;">
    	<div id="calendar_basic2" style="width: 1000px; "></div>
	</td></tr></table>
</td>
</tr>

<tr>
<td  width="100%" align="center" valign="top" style="padding-bottom:30px;">
	<script type="text/javascript">
      google.charts.load("current", {packages:["calendar"]});
      google.charts.setOnLoadCallback(drawChart666);

   function drawChart666() {
       var dataTable = new google.visualization.DataTable();
       dataTable.addColumn({ type: 'date', id: 'Date' });
       dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
       dataTable.addRows([
		<?php include 'contadorATEIE.php';?>
        ]);

       var chart = new google.visualization.Calendar(document.getElementById('calendar_basic3'));

       var options = {
         title: "Dias com Cadastros de ATEIE",
         height: 550,
       };

       chart.draw(dataTable, options);
   }
    </script>
	<table style="width: 1200px; border: 1px solid #ccc;"><tr><td align="center" style="padding-top:50px;">
    	<div id="calendar_basic3" style="width: 1000px; "></div>
	</td></tr></table>
</td>
</tr>


<tr>
<td  width="100%" align="center" valign="top" style="padding-bottom:200px;">
	<script type="text/javascript">
      google.charts.load("current", {packages:["calendar"]});
      google.charts.setOnLoadCallback(drawChart7);

   function drawChart7() {
       var dataTable = new google.visualization.DataTable();
       dataTable.addColumn({ type: 'date', id: 'Date' });
       dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
       dataTable.addRows([
		<?php include 'contadorRECEBIDOS.php';?>
        ]);

       var chart = new google.visualization.Calendar(document.getElementById('calendar_basic4'));

       var options = {
         title: "Dias com Cadastros de RECEBIDOS",
         height: 350,
       };

       chart.draw(dataTable, options);
   }
    </script>
	<table style="width: 1200px; border: 1px solid #ccc;"><tr><td align="center" style="padding-top:50px;">
    	<div id="calendar_basic4" style="width: 1000px; "></div>
	</td></tr></table>
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
Copyright &copyANDERSON-2023
	</td>

</tr>

<script type="text/javascript">
$(document).ready(function(){
incrementalNumber();
});
</script>
