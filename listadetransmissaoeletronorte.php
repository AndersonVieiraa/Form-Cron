﻿

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Transmissão ELETRONORTE</title>
<link rel="icon" type="imagem/ico" href="img/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/color.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="../easyui/datagrid-detailview.js"></script>

</head>

	
<body>  
<div class="container2">

<div class="box" align="center">

    <div class="easyui-panel" title="Lista de Transmissão ELETRONORTE" style="width: 100%; height: 100%; padding:5px; ">
        <div>
           <?php
				include 'conn.php';
					
					
				$where = "empresa like '%ELETRONORTE%'" ;
				$sql = mysql_query("Select * From acessantes_oeste where " . $where . " Order By empresa ASC");
				$sql2 = mysql_query("Select * From acessantes_oeste where " . $where . " Order By empresa ASC");
				//while($exibe = mysql_fetch_assoc($sql)){
				//echo nl2br($exibe['emailspre']) .'<br><br>';
				//}

			?>
			<table border="1"  style="border-collapse:collapse; width: 100%; height: 100%px; padding:5px; ">
			<tr>
			<td style="width: 20%; text-align:center; padding:10px; background-color: #CACACA;"><b>Empresa</b></td>
			<td style="width: 40%; text-align:center; padding:10px; background-color: #CACACA;"><b>Pré-Operação</b></td>
			<!--<td style="width: 40%;text-align:center;padding:10px; background-color: #CACACA;"><b>Tempo-Real</b></td>-->
			</tr>
			<tr>
			<td colspan="3"><?php while($exibe = mysql_fetch_assoc($sql)){ 
			
			echo '<tr>';
			echo '<td style="width: 20%;text-align:center;padding:5px;">';
			echo nl2br($exibe['empresa']);
			echo '</td>';
			echo '<td style="width: 40%; padding:5px;">';
			echo nl2br($exibe['emailspre']);
			echo '</td>';
			//echo '<td style="width: 40%;">';
			//echo nl2br($exibe['emailstr']);
			//echo '</td>';			
			echo'</tr>';
			
			
			}
			echo'</table>';
			
			

?>			
			<br><br>
			<table border="1"  style="border-collapse:collapse; width: 100%; height: 100%px; padding:5px; ">
			<tr>
			<td style="width: 20%; text-align:center; padding:10px; background-color: #CACACA;"><b>Empresa</b></td>
			<td style="width: 40%; text-align:center; padding:10px; background-color: #CACACA;"><b>Tempo Real</b></td>
			<!--<td style="width: 40%;text-align:center;padding:10px; background-color: #CACACA;"><b>Tempo-Real</b></td>-->
			</tr>
			<tr>
			<td colspan="3">
			
			<?php while($exibe2 = mysql_fetch_assoc($sql2)){ 
			
			echo '<tr>';
			echo '<td style="width: 20%;text-align:center;padding:5px;">';
			echo nl2br($exibe2['empresa']);
			echo '</td>';
			//echo '<td style="width: 40%; padding:5px;">';
			//echo nl2br($exibe['emailspre']);
			//echo '</td>';
			echo '<td style="width: 40%;padding:5px;">';
			echo nl2br($exibe2['emailstr']);
			echo '</td>';			
			echo'</tr>';
						
			}
			

			?>
			
			<br><br>
			
			
        </div>

	</div>
	
	
		
</div>	
</div>
</body>
</html>

<style>
.container2 {
width: 100vw;
height: 100vh;
background: #6C7A89;
display: flex;
flex-direction: row;
justify-content: center;
align-items: center
}
.box {
width: 85%;
height: 85%;
background: #fff;
padding: 10px;
}
body {
margin: 0px;
}
</style>