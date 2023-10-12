<html>
<?php
include_once 'conn.php';

$itemid = mysql_real_escape_string($_REQUEST['itemid']);

$rs = mysql_query("select * from ATEIE where id_ateie='$itemid'");
$item = mysql_fetch_array($rs);
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION)) $name= $_SESSION['UsuarioNome'];
?>



<body>
<table width="100%" border="0"><tr><td>

<table style="width:70%; padding:10px; border-collapse:collapse; border-radius:0px;border:0px solid #000000;margin-top:30px;" >
		<tr border=1>
		 <td style=" padding:5px; border-radius:0px;border:1px solid #000000;" width="15%" align="center"><img  style="width:100%;" src="img/logoMarcaChesf2.png"></td> 
		 <td style=" border-radius:0px; font:Helvetica; font-size:12px; border:1px solid #000000;" width="70%"><h3 style="text-align: center;">ATEIE - Autorização para Trabalhos em Equipamentos de Interligação Energizados</h3></td> 
		 <td style="padding:5px; width:15%; border-radius:0px;border:1px solid #000000; text-align: center;"><b>ATEIE Número</b><br><font color='#1139B1'><?php echo nl2br($item['numero']); echo "/"; echo nl2br($item['ano']);?>
		 <div style="padding:0px; padding-top:3px;"><i><font size="2"><?php echo nl2br($item['revisaoSaida']);?></font></i></div>
		</font></td>
			
		<tr>
		
</table>

	
<table style="width:70%; border-collapse:collapse; border-style: hidden; padding:5px; border-radius:0px;border:1px solid #000000; margin-top:5px;"><tr><td>
	

	<table style="border-collapse:collapse; border-style: hidden; border-spacing:0px; width:100%;font-size:13px">
		<tr align='center'>
			<td colspan="3" style="padding:10px; border-radius:0px; border:0px solid #000000; width:75%"> 
			<table><tr>
			<td style="border:0px solid #000000;"><b>Classificação da Atividade:  &nbsp;</b></td>
			<td align='center' style='border:1px solid #000000;width:25px; font-size:14px;'><font color='#1139B1'><b><?php $p="p"; if ($item['classificacao'] ==$p) {echo "&check;";} else {echo '';}?></b></font></td>
			<td style="border:0px solid #000000;"><b>Programada &nbsp;</b></td>
			<td align='center' style='border:1px solid #000000;width:25px; font-size:14px;'><font color='#1139B1'><b><?php $u='u'; if ($item['classificacao'] ==$u) {echo "&check;";} else {echo '';}?></b></font></td>
			<td style="border:0px solid #000000;"><b>Urgência &nbsp;</b></td>
			<td align='center' style='border:1px solid #000000;width:25px; font-size:14px;'><font color='#1139B1'><b><?php $e='e'; if ($item['classificacao'] ==$e) {echo "&check;";} else {echo '';}?></b></font></td>
			<td style="border:0px solid #000000;"><b>Emergência</b></td>
			</tr>
			</table>
			</td>
				
		</tr>

		<tr>
		<td colspan="3" style="padding:10px; border-radius:0px; border:1px solid #000000; width:50%"><b>Equipamento sob Intervenção: </b><font color='#1139B1'><?php echo nl2br($item['equipamento']);?></font></td>
		</tr>
		<tr>
		<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:33%"><b>Local: </b> <font color='#1139B1'><?php echo nl2br($item['subestacao']);?></font></td>
		<td style="padding:10px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:33%"><b>Manobra de Liberação:</b> <font color='#1139B1'><?php echo nl2br($item['liberacao']);?> min</font></td>
		<td style="padding:10px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:33%"><b>Manobra de Normalização:</b> <font color='#1139B1'><?php echo nl2br($item['normalizacao']);?> min</font></td>
		
		</tr>


		 <tr>
		 <td colspan="3" style="padding:10px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:36%"><b>Em caso de necessidade pode-se dispor do equipamento em (hh:mm):</b> <font color='#1139B1'><?php echo nl2br($item['devolucaoSaida']);?></font></td>
		 </tr>	

		<tr>
		<td colspan="3" rowspan="1" style="padding:5px; border-radius:0px; border:1px solid #000000; width:100%">
				<table>
					<tr>
						<td style="padding:5px; border:0px solid #000000;"><b>Condições Requeridas:</b></td>
						</tr>
						<tr>
						<style type="text/css">.condicoes ul{margin-top:1px;} .condicoes p{margin:7px;}</style>
							<td class="condicoes" style="padding:5px; border:0px solid #000000;"><font color='#1139B1'><?php echo $item['condicoes'];?></font></td>
					</tr>
				</table>	
		</td>		
		</tr>
		<tr>
		<td colspan="3" rowspan="1" style="padding:5px; border-radius:0px; border:1px solid #000000; width:100%">
		
			<table>
			<tr>
				<td style="padding:5px; border:0px solid #000000;width:20%"><b>Serviços a executar:</b></td>
				<td style="padding:5px; border:0px solid #000000;width:80%"><font color='#1139B1'><?php echo nl2br($item['servico']);?></font></td>
			</tr>
			</table>
			
		</td>
		</tr>
		<tr>
		<td colspan="3" style="padding:5px; border-radius:0px; border:1px solid #000000; width:50%">
			<table>
				<tr>
					<td style="padding:5px; border:0px solid #000000;"><b>Observações: </b></td>
					<td style="padding:5px; border:0px solid #000000;"><font color='#1139B1'><?php echo nl2br($item['observacoes']);?></font></td>
				</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td colspan="3" style="padding:0px; border-radius:0px; border:1px solid #000000; width:100%">
				<table style="width:100%;padding:0px;border-collapse:collapse; border-spacing:0px;  border-radius:0px; border-bottom:1px solid #000000;">
					<tr>
						<td style="width:30%; padding:5px;border-right:0px solid #000000;"><b>Documentos internos vinculados: </td>
						<td style="width:70%; padding:5px;border-bottom:1px solid #000000;"></b><font color='#1139B1'><?php echo nl2br($item['docinterno']);?></font></td>
					</tr>
				</table>
		</td>
		</tr>

	</table>

	
	<table border="0" align="center" style="border-collapse:collapse; border-spacing:0px; width:97%;font-size:13px; margin-top:5px;">

		<tr>
		<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:50%"><b>Solicitado por: </b><font color='#1139B1'><?php echo nl2br($item['emitenteusuario']); echo " ("; echo nl2br($item['areaemitente']); echo ")";?></font></td>
		<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:25%"><b>Data: </b><font color='#1139B1'><?php echo nl2br($item['data']);?></font></td>
		<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:25%"><b>Hora: </b><font color='#1139B1'><?php echo nl2br($item['hora']);?></font></td>
		</tr>
		<tr>
		<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:50%"><b>De acordo: </b></td>
		<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:25%"><b>Data: </td>
		<td style="padding:10px; border-radius:0px; border:1px solid #000000; width:25%"><b>Hora: </b></td>
		</tr>
		
	</table>
	
	
	<table border="0" align="center" style="padding:5px; border-collapse:collapse; border-spacing:0px; border-radius:0px; border:0px solid #000000; width:97%;font-size:13px; margin-top:5px;">
		<tr bgcolor="#EFEFEF">
		<td colspan="5" align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:50%;"><b>Pessoal Notificado</b></td>
		</tr>
		<tr bgcolor="#EFEFEF">
		<td align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:30%"><b>Nome</b></td>
		<td align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:19%"><b>Setor</b></td>
		<td align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:27%"><b>Empresa</b></td>
		<td align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:10%"><b>Data</b></td>
		<td align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:4%"><b>Hora</b></td>
		</tr>
		<tr >
		<td style="padding:10px; border-radius:0px; border:1px solid #505050; width:30%"><font color='#1139B1'><?php echo nl2br($item['notificadosnome']);?></font></td>
		<td style="padding:10px; border-radius:0px; border:1px solid #505050; width:19%"><font color='#1139B1'><?php echo nl2br($item['notificadossetor']);?></font></td>
		<td style="padding:10px; border-radius:0px; border:1px solid #505050; width:27%"><font color='#1139B1'><?php echo nl2br($item['notificadosempresa']);?></font></td>
		<td align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:10%"><font color='#1139B1'><?php echo nl2br($item['data']);?></font></td>
		<td align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:4%"><font color='#1139B1'><?php echo nl2br($item['hora']);?></font></td>
		</tr>
	</table>



			<table border="0" style="padding:5px; border-spacing:0px; width:100%;font-size:13px">
			<tr>

			<td>
				<table style="padding:0px; border-collapse:collapse; border-spacing:0px; width:100%;">
				<tr bgcolor="#EFEFEF">
				<td rowspan="3" align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:12%"><b>NÚMERO <br>ATEIE</b></td>
				<td rowspan="1" colspan="4" align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:44%"><b>PREVISTO</b></td>
				<td colspan="8" align="center" style="padding:10px; border-radius:0px; border:1px solid #505050; width:44%"><b>EXECUÇÃO</b></td>
				</tr>
				
				<tr bgcolor="#EFEFEF">
				<td colspan="2" align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:22%"><b>Início</b></td>
				<td colspan="2" align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:22%"><b>Término</b></td>
				<td colspan="4" align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:22%"><b>Liberado para <br>Manutenção</b></td>
				<td colspan="4" align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:22%"><b>Liberado para <br>Operação</b></td>
				</tr>
				
				<tr bgcolor="#EFEFEF">
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:14%"><b>Data</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:8%"><b>Hora</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:14%"><b>Data</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:8%"><b>Hora</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:8%"><b>Data</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:5%"><b>Hora</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:5%"><b>Desp.</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:4%"><b>Desp OE</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:8%"><b>Data</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:5%"><b>Hora</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:5%"><b>Desp.</b></td>
				<td align="center" style="padding:5px; border-radius:0px; border:1px solid #505050; width:4%"><b>Desp OE</b></td>
				</tr>
				
				<?php
				
				$a = "Diária";
				if ($a == $item['periodicidade']){
					
					
						$data_inicial = $item['datainicio'];
						$data_inicial1 = DateTime::createFromFormat("d/m/Y",$data_inicial);
						$data_inicial2 = $data_inicial1->format("m/d/Y");


						$data_final = $item['datafim'];
						$data_final1 = DateTime::createFromFormat("d/m/Y",$data_final);
						$data_final2 = $data_final1->format("m/d/Y"); 

						$diferenca = strtotime($data_final2) - strtotime($data_inicial2);

						$dias = floor($diferenca/(60*60*23.59));
						
						$i= 0;
						$dia = $data_inicial2;
						$num_diaria = 1;
						
						while($i <= $dias ){
							
							$dia1 = DateTime::createFromFormat("m/d/Y",$dia);
							$dia2 = $dia1->format("d/m/Y"); 
							echo "<tr>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:12%; color:#1139B1;'>" .$item['numero']. "." .$num_diaria. "/" .$item['ano']. "</td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:14%; color:#1139B1;'>" .$dia2. "</td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:8%; color:#1139B1;'>" .$item['horainicio']."</td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:14%; color:#1139B1;'>" .$dia2."</td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:8%; color:#1139B1;'>" .$item['horafim']."</td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:8%; color:#1139B1;'></td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:5%; color:#1139B1;'></td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:5%; color:#1139B1;'></td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:4%; color:#1139B1;'></td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:8%; color:#1139B1;'></td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:5%; color:#1139B1;'></td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:5%; color:#1139B1;'></td>";
							echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:4%; color:#1139B1;'></td>";
							echo "</tr>";
							
							$dia = date('m/d/Y', strtotime(''.$dia.' + 1 days'));
							
							$i++;					
							$num_diaria++;
						}	
				}	
					
									
				else {		
								
						echo "<tr>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:12%; color:#1139B1;'>" .$item['numero']. "/" .$item['ano']. "</td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:14%; color:#1139B1;'>" .$item['datainicio']. "</td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:8%; color:#1139B1;'>" .$item['horainicio']."</td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:14%; color:#1139B1;'>" .$item['datafim']."</td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:8%; color:#1139B1;'>" .$item['horafim']."</td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:8%; color:#1139B1;'></td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:5%; color:#1139B1;'></td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:5%; color:#1139B1;'></td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:5%; color:#1139B1;'></td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:7%; color:#1139B1;'></td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:5%; color:#1139B1;'></td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:5%; color:#1139B1;'></td>";
						echo "<td align='center' style='padding:10px; border-radius:0px; border:1px solid #505050; width:4%; color:#1139B1;'></td>";
						echo "</tr>";
				
												
				}
				
				
				?>
				
				</table>
			</td>
			</tr>
			</table>
		
			

	</td></tr>
	</table>

	<br>
	<div style="font-size:11px; color:#222; padding-bottom:10px;">
		<b><u>Log de Alterações:</u></b><br>
	</div>
	<div style="font-size:11px; color:#333; padding-bottom:200px; ">
		<?php echo nl2br($item['logi']);?>
	</div>

</td>
</tr>	
</table>	
</body>
</html>