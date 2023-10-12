<?php	

	include_once("conexao.php");
	$id = htmlspecialchars($_REQUEST['id_ateie']);
	$result_transacoes = "SELECT * FROM ATEIE where id_ateie='$id'";
	$resultado_trasacoes = mysqli_query($conn, $result_transacoes);
	$row_transacoes = mysqli_fetch_assoc($resultado_trasacoes);
	//$assunto= nl2br($row_transacoes['assunto']);
	//$nomedestinatario= nl2br($row_transacoes['nomedestinatario']);
	$condicoes= $row_transacoes['condicoes'];
	$servico= nl2br($row_transacoes['servico']);
	$observacoes= nl2br($row_transacoes['observacoes']);
	$docinterno= nl2br($row_transacoes['docinterno']);
	$notificadosnome= nl2br($row_transacoes['notificadosnome']);
	$notificadossetor= nl2br($row_transacoes['notificadossetor']);
	$notificadosempresa= nl2br($row_transacoes['notificadosempresa']);
	if (empty($row_transacoes['revisaoSaida'])) {
		$traco= '';
	}
	else {
		$traco= '-';
	};
	
	$p="p";
	$x = " ";
	$u="u";
	$y = " ";
	$e="e";
	$z = " ";	
	if ($row_transacoes['classificacao'] ==$p) {$x="<img style='width:15px;height:15px;' src='../../img/check2.png'>";}
	if ($row_transacoes['classificacao'] ==$u) {$y="<img style='width:15px;height:15px;' src='../../img/check2.png'>";}
	if ($row_transacoes['classificacao'] ==$e) {$z="<img style='width:15px;height:15px;' src='../../img/check2.png'>";}

	$html = '<table style="width:100%;padding-bottom:5px;border-collapse:collapse; border-spacing:0px;  border-radius:0px;border:1px solid #000000;">';	
	$html .= '<tbody>';


	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='width:100%;'>";
	
	$html .= "<table style='border-spacing:0px; border-collapse:collapse; border-style: hidden; width:100%;font-size:13px'>";
	$html .= "<tr align='center'>";
	$html .= "<td colspan='3' style='padding:5px; font:Helvetica; font-size:13px; border-radius:0px; border:0px solid #000000; width:100%'>";
	$html .= "<table align='center' border='0'><tr><td><b>Classificação da Atividade: &nbsp;</b></td>";
	$html .= "<td align='center' style='border:1px solid #000000;width:20px;'><font color='#1139B1'>".$x."</font></td><td><b>Programada &nbsp;</b></td>";
	$html .= "<td align='center' style='border:1px solid #000000;width:20px;'><font color='#1139B1'>".$y."</font></td><td><b>Urgência &nbsp;</b></td>";
	$html .= "<td align='center' style='border:1px solid #000000;width:20px;'><font color='#1139B1'>".$z."</font></td><td><b>Emergência</b></td></tr></table>";
	$html .= "</td>";
	$html .= "</tr>";

	$html .= '<tr>';
	$html .= '<td colspan="3" style="padding:10px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:100%"><b>Equipamento sob Intervenção: </b> <font color="#1139B1">'.$row_transacoes['equipamento'].'</td>';
	$html .= '</tr>';

	$html .= '<tr>';
	$html .= '<td style="padding:10px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:33%"><b>Local: </b> <font color="#1139B1">'.$row_transacoes['subestacao'].'</font></td>';
	$html .= '<td style="padding:10px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:33%"><b>Manobra de Liberação:</b> <font color="#1139B1">'.$row_transacoes['liberacao'].' min</font></td>	';
	$html .= '<td style="padding:10px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:33%"><b>Manobra de Normalização:</b> <font color="#1139B1">'.$row_transacoes['normalizacao'].' min</font></td>	';
	$html .= '</tr>';
	$html .= '<tr>';
	$html .= '<td colspan="3" style="padding:10px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:100%"><b>Em caso de necessidade pode-se dispor do equipamento em (hh:mm): </b> <font color="#1139B1">'.$row_transacoes['devolucaoSaida'].'</font></td>';	
	$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<td colspan="3" rowspan="1" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:100%">';
			$html .= '<table>';
			$html .= '<tr>';
				$html .= '<td style="padding-top:0px; padding-left:5px; padding-left:5px; "><b>Condições Requeridas: </b></td>';
			$html .= '</tr>';
			$html .= '<tr>';
				$html .= '<style type="text/css">.condicoes li{margin-top: -10px;} .condicoes ol li{margin-top: 0px;} .condicoes p{margin-top:0px;} </style><td class="condicoes" style="padding-left:5px;"><font color="#1139B1"><small><small><small><small><br></small></small></small></small>'.$condicoes.'</font></td>';
			$html .= '</tr>';
			$html .= '</table>';
		$html .= '</td>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td colspan="3" rowspan="1" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:100%">';
			$html .= '<table>';
			$html .= '<tr>';
				$html .= '<td style="padding:0px; border:0px solid #000000;width:18%"><b>Serviços a executar:</b></td>';
				$html .= '<td style="padding:3px; border:0px solid #000000;width:82%"><font color="#1139B1">'.$servico.'</font></td>';
			$html .= '</tr>';
			$html .= '</table>';		
		$html .= '</td>';		
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td colspan="3" style="padding:5px; border-radius:0px;font:Helvetica;font-size:12px; border:1px solid #000000; width:50%">';
				
			$html .= '<table>';
			$html .= '<tr>';
				$html .= '<td style="padding:5px; width:14%"><b>Observações: </b></td>';
				$html .= '<td><font color="#1139B1">'.$observacoes.'</font></td>';
			$html .= '</tr>';
			$html .= '</table>';
		
		$html .= '</td>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td colspan="3" style="padding:0px;;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:100%">';
		
			$html .= '<table style="width:100%;padding:0px;border-collapse:collapse; border-spacing:0px;  border-radius:0px; border-bottom:1px solid #000000;">';
			$html .= '<tr>';
				$html .= '<td style="width:30%; padding:5px;border-bottom:1px solid #000000;"><b>Documentos internos vinculados: </b></td>';
				$html .= '<td style="width:70%; padding:5px;border-bottom:1px solid #000000;"><font color="#1139B1">'.$docinterno.'</font></td>';
			$html .= '</tr>';
			$html .= '</table>';
		
		$html .= '</td>';		
		$html .= '</tr>';
		$html .= '</table>';
	$html .= "</td>";
	$html .= "</tr>";
	
	
	
	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='padding-top: 10px; width:100%'>"; 	
		$html .= '<table border="0" align="center" style="border-spacing:0px; border-collapse:collapse; border-style: solid; width:97%;font-size:13px">';

		$html .= '<tr>';
		$html .= '<td style="padding:10px;;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:50%"><b>Solicitado por: </b> <font color="#1139B1">'.$row_transacoes['emitenteusuario'].' ('.$row_transacoes['areaemitente'].')</font></td>';
		$html .= '<td style="padding:10px;;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:25%"><b>Data: </b> <font color="#1139B1">'.$row_transacoes['data'].'</font></td>';
		$html .= '<td style="padding:10px;;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:25%"><b>Hora: </b> <font color="#1139B1">'.$row_transacoes['hora'].'</font></td>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td style="padding:10px;;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:50%"><b>De acordo: </b></td>';
		$html .= '<td style="padding:10px;;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:25%"><b>Data: </td>';
		$html .= '<td style="padding:10px;;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #000000; width:25%"><b>Hora: </b></td>';
		$html .= '</tr>';
		
		$html .= '</table>';
	$html .= "</td>";
	$html .= "</tr>";	
	
	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='padding-top:5px; width:100%'>"; 	
		$html .= '<table border="0" style="padding:4px; border-collapse:collapse; border-spacing:0px; border-radius:0px; border:0px solid #000000; width:100%;font-size:13px">';
		$html .= '<tr bgcolor="#EFEFEF">';
		$html .= '<td colspan="5" align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:60%;"><b>Pessoal Notificado</b></td>';
		$html .= '</tr>';
		$html .= '<tr bgcolor="#EFEFEF">';
		$html .= '<td align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:30%"><b>Nome</b></td>';
		$html .= '<td align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:26%"><b>Setor</b></td>';
		$html .= '<td align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:27%"><b>Empresa</b></td>';
		$html .= '<td align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:10%"><b>Data</b></td>';
		$html .= '<td align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:4%"><b>Hora</b></td>';
		$html .= '</tr>';
		$html .= '<tr >';
		$html .= '<td style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:30%"><font color="#1139B1">'.$notificadosnome.'</font></td>';
		$html .= '<td style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:26%"><font color="#1139B1">'.$notificadossetor.'</font></td>';
		$html .= '<td style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:27%"><font color="#1139B1">'.$notificadosempresa.'</font></td>';
		$html .= '<td align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:10%"><font color="#1139B1">'.$row_transacoes['data'].'</font></td>';
		$html .= '<td align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:4%"><font color="#1139B1">'.$row_transacoes['hora'].'</font></td>';
		$html .= '</tr>';
	$html .= '</table>';
	$html .= "</td>";
	$html .= "</tr>";
	
	
	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='width:100%; padding-bottom:-2px;'>"; 
			$html .= '<table border="0" style="padding-top:4px; padding-left:4px; padding-right:4px; border-collapse:collapse; border-spacing:0px; width:100%;font-size:13px">';
			$html .= '<tr>';
			$html .= '<td>';
				$html .= '<table style="padding:0px; border-collapse:collapse; border-spacing:0px; width:97%;">';
				$html .= '<tr bgcolor="#EFEFEF">';
				$html .= '<td rowspan="3" align="center" style="padding:2px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:10%"><b>Número <br>ATEIE</b></td>';
				$html .= '<td rowspan="1" colspan="4" align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:44%"><b>PREVISTO</b></td>';
				$html .= '<td colspan="8" align="center" style="padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:46%"><b>EXECUÇÃO</b></td>';
				
				
				$html .= '<tr bgcolor="#EFEFEF">';
				$html .= '<td colspan="2" align="center" style="padding:3px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:22%"><b>Início</b></td>';		
				$html .= '<td colspan="2" align="center" style="padding:3px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:22%"><b>Término</b></td>';
				$html .= '<td colspan="4" align="center" style="padding:3px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:23%"><b>Liberado para Manutenção</b></td>';
				$html .= '<td colspan="4" align="center" style="padding:3px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:23%"><b>Liberado para Operação</b></td>';
				$html .= '</tr>';
				
				
				$html .= '</tr>';
				$html .= '<tr bgcolor="#EFEFEF">';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:12%"><b>Data</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:10%"><b>Hora</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:12%"><b>Data</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:10%"><b>Hora</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:8%"><b>Data</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:5%"><b>Hora</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:5%"><b>Desp.</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:5%"><b>Desp. OE</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:8%"><b>Data</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:5%"><b>Hora</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:5%"><b>Desp.</b></td>';
				$html .= '<td align="center" style="padding:4px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:5%"><b>Desp. OE</b></td>';
				$html .= '</tr>';
				$html .= '</table>';
			$html .= "</td>";
			$html .= "</tr>";
			$html .= '</table>';		
			
				
				$a = "Diária";
				if ($a == $row_transacoes['periodicidade']){
					
					
						$data_inicial = $row_transacoes['datainicio'];
						$data_inicial1 = DateTime::createFromFormat("d/m/Y",$data_inicial);
						$data_inicial2 = $data_inicial1->format("m/d/Y");


						$data_final = $row_transacoes['datafim'];
						$data_final1 = DateTime::createFromFormat("d/m/Y",$data_final);
						$data_final2 = $data_final1->format("m/d/Y"); 

						$diferenca = strtotime($data_final2) - strtotime($data_inicial2);

						$dias = floor($diferenca/(60*60*23.59));
						
						$i= 0;
						$dia = $data_inicial2;
						
						while($i <= $dias ){
							
							$dia1 = DateTime::createFromFormat("m/d/Y",$dia);
							$dia2 = $dia1->format("d/m/Y"); 
							$html .= "<tr>";
							$html .= "<td colspan='3' rowspan='1' style='width:100%; padding-bottom:-1px;'>"; 
							$html .= '<table  style="padding-left:5px; padding-right:0px; border-collapse: collapse; border-spacing:0px; width:98.8%;">';
							$html .= "<tr>";
							$html .= "<td align='center' style='padding:3px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:8.2%; color:#1139B1;'>" .$row_transacoes['numero']. "/" .$row_transacoes['ano']. "</td>";
							$html .= "<td align='center' style='padding:3px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:9.9%; color:#1139B1;'>" .$dia2. "</td>";
							$html .= "<td align='center' style='padding:3px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:9.1%; color:#1139B1;'>" .$row_transacoes['horainicio']."</td>";
							$html .= "<td align='center' style='padding:3px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:9.9%; color:#1139B1;'>" .$dia2."</td>";
							$html .= "<td align='center' style='padding:3px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:9.03%; color:#1139B1;'>" .$row_transacoes['horafim']."</td>";
							$html .= "<td align='center' style='padding:4px; border-radius:0px; border:1px solid #505050; width:6.6%; color:#000000;'></td>";
							$html .= "<td align='center' style='padding:4px; border-radius:0px; border:1px solid #505050; width:4.73%; color:#000000;'></td>";
							$html .= "<td align='center' style='padding:4px; border-radius:0px; border:1px solid #505050; width:5.3%; color:#000000;'></td>";
							$html .= "<td align='center' style='padding:4px; border-radius:0px; border:1px solid #505050; width:5.3%; color:#000000;'></td>";
							$html .= "<td align='center' style='padding:4px; border-radius:0px; border:1px solid #505050; width:6.6%; color:#000000;'></td>";
							$html .= "<td align='center' style='padding:4px; border-radius:0px; border:1px solid #505050; width:4.7%; color:#000000;'></td>";
							$html .= "<td align='center' style='padding:4px; border-radius:0px; border:1px solid #505050; width:5.3%; color:#000000;'></td>";
							$html .= "<td align='center' style='padding:4px; border-radius:0px; border:1px solid #505050; width:5.3%; color:#000000;'></td>";
							$html .= "</tr>";
							$html .= '</table>';
							$html .= "</td>";
							$html .= "</tr>";
							$dia = date('m/d/Y', strtotime(''.$dia.' + 1 days'));
							
							$i++;
						}	
						
				}	
				
									
				else {		
						$html .= "<tr>";
						$html .= "<td colspan='3' rowspan='1' style='width:100%'>"; 
						$html .= '<table  style="padding-left:5px; padding-right:0px; border-collapse: collapse; border-spacing:0px; width:98.8%;">';
							
						$html .= "<tr>";
						$html .= "<td align='center' style='padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:8.2%; color:#1139B1;'>" .$row_transacoes['numero']. "/" .$row_transacoes['ano']. "</td>";
						$html .= "<td align='center' style='padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:9.9%; color:#1139B1;'>" .$row_transacoes['datainicio']. "</td>";
						$html .= "<td align='center' style='padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:9.1%; color:#1139B1;'>" .$row_transacoes['horainicio']."</td>";
						$html .= "<td align='center' style='padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:9.9%; color:#1139B1;'>" .$row_transacoes['datafim']."</td>";
						$html .= "<td align='center' style='padding:5px;font:Helvetica;font-size:12px; border-radius:0px; border:1px solid #505050; width:9.03%; color:#1139B1;'>" .$row_transacoes['horafim']."</td>";
						$html .= "<td align='center' style='padding:5px; border-radius:0px; border:1px solid #505050; width:6.6%; color:#000000;'></td>";
						$html .= "<td align='center' style='padding:5px; border-radius:0px; border:1px solid #505050; width:4.73%; color:#000000;'></td>";
						$html .= "<td align='center' style='padding:5px; border-radius:0px; border:1px solid #505050; width:5.3%; color:#000000;'></td>";
						$html .= "<td align='center' style='padding:5px; border-radius:0px; border:1px solid #505050; width:5.3%; color:#000000;'></td>";
						$html .= "<td align='center' style='padding:5px; border-radius:0px; border:1px solid #505050; width:6.6%; color:#000000;'></td>";
						$html .= "<td align='center' style='padding:5px; border-radius:0px; border:1px solid #505050; width:4.7%; color:#000000;'></td>";
						$html .= "<td align='center' style='padding:5px; border-radius:0px; border:1px solid #505050; width:5.3%; color:#000000;'></td>";
						$html .= "<td align='center' style='padding:5px; border-radius:0px; border:1px solid #505050; width:5.3%; color:#000000;'></td>";
						$html .= "</tr>";
						$html .= '</table>';
						$html .= "</td>";
						$html .= "</tr>";					
				}
								
		
		$html .= "</td>";
		$html .= "</tr>";
		//INICIO - Apenas uma linha de espaço par a ultima linha da tabela		
		$html .= "<tr>";
		$html .= "<td colspan='3' rowspan='1' style='width:100%; padding:6px'>";
		$html .= "</td>";
		$html .= "</tr>";
		//FIM - Apenas uma linha de espaço par a ultima linha da tabela

		$html .= '</table>';

	$html .= '</tbody>';
	$html .= "</td>";
	$html .= "</tr>";
	$html .= '</table>';

	$html .= '<table>';
	$html .= '<tr><td style="padding:0px; font:Helvetica; font-size:11px;"><b>Desp.:</b> Operador do Centro de Operação do Agente que emitiu o documento.</td></tr>';
	$html .= '<tr><td style="padding:0px; font:Helvetica; font-size:11px;"><b>Desp. OE:</b> Operador do Centro de Operação do Agente que recebeu o documento.</td></tr>';
	$html .= '</table>';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

		
	
	// Carrega seu HTML
	$dompdf->load_html('

		<table style="width:100%; border-collapse:collapse; border-spacing:0px; padding:0px; border-radius:0px; border:1px solid #000000;" >

	<tr border="1">
		 <td style=" padding:10px; border-radius:0px;border:1px solid #000000;" width=15% align="center" valign="center"><img style="width:110px;" src="../../img/logoMarcaChesf.png"></td> 
		 <td style=" border-radius:0px; font:Helvetica; font-size:12px; border:1px solid #000000;" width=65%><h3 style="text-align: center;">ATEIE - Autorização para Trabalhos em Equipamentos de Interligação Energizados</h3></td> 
		 <td style="padding:5px; font:Helvetica; font-size:13px; width:20%; border-radius:0px;border:1px solid #000000; text-align: center;"><b>ATEIE Número</b><div style="color:#1139B1;"> '.$row_transacoes['numero'].'/'.$row_transacoes['ano'].' <br><i> '.$row_transacoes['revisaoSaida'].'</i></td>
	</tr>
	</table>
	<small><small><small><small><br></small></small></small></small>	
	
	
	<div style="position: fixed; font-size:8px; down:5px; bottom: 1;width: 100%;text-align: right;margin-left:0px; padding:5px;">
	
	<table border="0" style="width:100%; border-top:thin solid; border-color:black;"><tr>
	<td style="width:30%"><img style="width:70px;" src="../../img/form.png"></td>
	<td style="width:70%; text-align:right;"> http://10.128.151.18/cron/PHP/Form/EDT/gerarpdf/index_ATEIE.php?id_ateie='.$row_transacoes['id_ateie'].' </td>
	
	</tr>
	</table>


	</div>
	
			
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();
	
	//Gera contador de pagina
	$canvas = $dompdf->get_canvas(); 
	$canvas->page_text(510, 18, "Pág. {PAGE_NUM}/{PAGE_COUNT}", $font, 6, array(0,0,0)); //header
	

	//Exibir a página
	$dompdf->stream( 
		'ATEIE-DONFS-'.$row_transacoes['numero'].'-'.$row_transacoes['ano'].''.$traco.''.$row_transacoes['revisaoSaida'],  
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>
