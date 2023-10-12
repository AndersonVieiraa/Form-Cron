<?php	

	$lt = htmlspecialchars($_POST['lt']);
	$term1 = htmlspecialchars($_POST['term1']);
	$term2 = htmlspecialchars($_POST['term2']);
	$si_sap = htmlspecialchars($_POST['si_sap']);
	$ano_si_sap = htmlspecialchars($_POST['ano_si_sap']);
	$sgi_ons = htmlspecialchars($_POST['sgi_ons']);
	$ano_sgi_ons = htmlspecialchars($_POST['ano_sgi_ons']);
	$data1 = htmlspecialchars($_POST['data1']);
	$time1 = htmlspecialchars($_POST['time1']);
	$data2 = htmlspecialchars($_POST['data2']);
	$time2 = htmlspecialchars($_POST['time2']);


	$html = '<table border="1" style="width:100%; padding:0px;border-collapse:collapse; border-spacing:0px;">';	
	$html .= '<tbody>';


	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='width:100%'>";
	
	$html .= "<table border='1' style='border-collapse:collapse; padding:-3px; width:100%;font-size:13px;'>";
		$html .= "<tr align='center' style='background-color: #CDCDCD;'>";
			$html .= "<td style='padding:5px; font:Helvetica; font-size:13px;width:60%'>";
			$html .= "<b>INTERVENÇÃO EM LINHA ENERGIZADA REDE BÁSICA</b></td>";
			$html .= "<td style='padding:5px; font:Helvetica; font-size:15px; width:40%'>";
			$html .= "<b>LT:</b> $lt-$term1/$term2 </td>";
		$html .= "</tr>";
		$html .= "<tr style='background-color: #EFEFEF;'>";
			$html .= "<td colspan='2'>";	
				$html .= "<table border='1' style='padding:-3px; border-collapse:collapse;  width:100%; font-size:13px; '>";
				$html .= "<tr>";
				$html .= "<td style='padding:5px; width:23%;font:Helvetica; font-size:13px;'><b> SI CHESF:</b> $si_sap/$ano_si_sap";	
				$html .= "</td>";
				$html .= "<td style='padding:5px; width:23%;font:Helvetica;font-size:13px;'><b> SGI ONS:</b> $sgi_ons-$ano_sgi_ons";	
				$html .= "</td>";		
				$html .= "<td style='padding:5px; width:27%;font:Helvetica;font-size:13px;'><b> INÍCIO:</b> $data1 - $time1 h";	
				$html .= "</td>";
				$html .= "<td style='padding:5px; width:27%;font:Helvetica;font-size:13px;'><b> FIM:</b> $data2 - $time2 h";	
				$html .= "</td>";
				$html .= "</tr>";	
				$html .= '</table>';
	//$html .= "<table align='center' border='0'><tr><td><b>Classificação do Impedimento: &nbsp;</b></td>";
	//$html .= "<td align='center' style='border:1px solid #000000;width:20px;'><font color='#1139B1'>".$lt."</font></td><td><b>Programada &nbsp;</b></td>";
	//$html .= "<td align='center' style='border:1px solid #000000;width:20px;'><font color='#1139B1'>".$term1."</font></td><td><b>Urgência &nbsp;</b></td>";
	//$html .= "<td align='center' style='border:1px solid #000000;width:20px;'><font color='#1139B1'>".$term2."</font></td><td><b>Emergência</b></td></tr></table>";
			$html .= "</td>";
		$html .= "</tr>";

	$html .= "<tr style='background-color: #EFEFEF;'>";
	$html .= "<td colspan='2'>";
			$html .= "<table border='1' style='border-collapse:collapse; padding:-1px; border-spacing:0px; border-style: hidden; width:100%;font-size:13px; '>";
			$html .= "<tr>";
			$html .= "<td style='padding:5px; width:10%;font:Helvetica; font-size:13px; text-align:center; border:1px solid #505050;'> DATA";	
			$html .= "</td>";
			$html .= "<td style='padding:5px; width:10%;font:Helvetica;font-size:13px; text-align:center;'> SE";	
			$html .= "</td>";		
			$html .= "<td style='padding:5px; width:10%;font:Helvetica;font-size:13px; text-align:center;'> Contactar ONS";	
			$html .= "</td>";
			$html .= "<td style='padding:5px; width:10%;font:Helvetica;font-size:13px; text-align:center;'> Desativar Relig.";	
			$html .= "</td>";
			$html .= "<td style='padding:5px; width:10%;font:Helvetica;font-size:13px; text-align:center;'> Colocar Cartão";	
			$html .= "</td>";
			$html .= "<td style='padding:5px; width:10%;font:Helvetica;font-size:13px; text-align:center;'> Entregue ao Resp.";	
			$html .= "</td>";
			$html .= "<td style='padding:5px; width:10%;font:Helvetica;font-size:13px; text-align:center;'> Recebido do Resp.";	
			$html .= "</td>";
			$html .= "<td style='padding:5px; width:10%;font:Helvetica;font-size:13px; text-align:center;'> Contactar ONS";	
			$html .= "</td>";
			$html .= "<td style='padding:5px; width:10%;font:Helvetica;font-size:13px; text-align:center;'> Retirar Cartão";	
			$html .= "</td>";
			$html .= "<td style='padding:5px; width:10%;font:Helvetica;font-size:13px; text-align:center;'> Ativar Relig.";	
			$html .= "</td>";
			$html .= "</tr>";	
			$html .= '</table>';
	$html .= "</td>";
	$html .= "</tr>";
	$html .= '</table>';




						$data11 = DateTime::createFromFormat("d/m/Y",$data1);
						$data12 = $data11->format("m/d/Y");


						$data21 = DateTime::createFromFormat("d/m/Y",$data2);
						$data22 = $data21->format("m/d/Y"); 

						$diferenca = strtotime($data22) - strtotime($data12);

						$dias = floor($diferenca/(60*60*23.59));
						
						$i= 0;
						$dia = $data12;
						
						while($i <= $dias ){
							
							$dia1 = DateTime::createFromFormat("m/d/Y",$dia);
							$dia2 = $dia1->format("d/m/Y"); 
							$html .= "<tr>";
							$html .= "<td colspan='3' rowspan='1' style='width:100%; padding-bottom:-1px;'>"; 
							$html .= "<table border='1' style='border-collapse:collapse; padding:-1px; border-style: hidden; width:100%;font-size:13px; '>";
								$html .= "<tr>";
								$html .= "<td rowspan='' style='padding:5px; width:10%;font:Helvetica; font-size:12px;'> $dia2";	
								$html .= "</td>";
								$html .= "<td rowspan='' style='padding:0px; width:10%;font:Helvetica;font-size:13px;'>";	
								$html .= "<table border='1' style='width:100%; height:40px;border-collapse:collapse; border-style: hidden;'><tr><td style='height:20px;text-align:center;'>$term1</td></tr><tr><td style='height:20px;text-align:center;'>$term2</td></tr></table>";
								$html .= "</td>";		
								$html .= "<td rowspan='' style='padding:5px; width:10%;font:Helvetica;font-size:13px;'>";	
								$html .= "</td>";
								$html .= "<td rowspan='' style='padding:0px; width:10%;font:Helvetica;font-size:13px;'>";	
								$html .= "<table border='1' style='width:100%; height:40px;border-collapse:collapse; border-style: hidden;'><tr><td style='height:20px;'></td></tr><tr><td style='height:20px;'></td></tr></table>";
								$html .= "</td>";
								$html .= "<td rowspan='' style='padding:0px; width:10%;font:Helvetica;font-size:13px;'>";	
								$html .= "<table border='1' style='width:100%; height:40px;border-collapse:collapse; border-style: hidden;'><tr><td style='height:20px;'></td></tr><tr><td style='height:20px;'></td></tr></table>";
								$html .= "</td>";
								$html .= "<td rowspan='' style='padding:5px; width:10%;font:Helvetica;font-size:13px;'>";	
								$html .= "</td>";
								$html .= "<td rowspan='' style='padding:5px; width:10%;font:Helvetica;font-size:13px;'>";	
								$html .= "</td>";
								$html .= "<td rowspan='' style='padding:5px; width:10%;font:Helvetica;font-size:13px;'>";	
								$html .= "</td>";
								$html .= "<td rowspan='' style='padding:0px; width:10%;font:Helvetica;font-size:13px;'>";	
								$html .= "<table border='1' style='width:100%; height:40px;border-collapse:collapse; border-style: hidden;'><tr><td style='height:20px;'></td></tr><tr><td style='height:20px;'></td></tr></table>";
								$html .= "</td>";
								$html .= "<td rowspan='' style='padding:0px; width:10%;font:Helvetica;font-size:13px;'>";	
								$html .= "<table border='1' style='width:100%; height:40px;border-collapse:collapse; border-style: hidden;'><tr><td style='height:20px;'></td></tr><tr><td style='height:20px;'></td></tr></table>";
								$html .= "</td>";
								$html .= "</tr>";	
								$html .= '</table>';
							$html .= "</td>";
							$html .= "</tr>";
							
							$dia = date('m/d/Y', strtotime(''.$dia.' + 1 days'));
							
							$i++;
						}	

	

	$html .= '</tbody>';
	$html .= "</td>";
	$html .= "</tr>";
	$html .= '</table>';




	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

		
	
	// Carrega seu HTML
	$dompdf->load_html('
	<table border="1" style="width:100%; border-collapse:collapse; border-spacing:0px; padding:0px; border-radius:0px; border:1px solid #000000;" >

	<tr border="1">
		 <td rowspan="3" style="vertical-align: midlle; padding:3px; border-radius:0px;border:1px solid #000000;" width="15%"><img style="width:110px;" src="../../img/logoMarcaChesf.png"></td> 
		 <td rowspan="3" style="border-radius:0px; font:Helvetica; font-size:12px; border:1px solid #000000;" width=60%><h3 style="text-align: center;">INTERVENÇÃO EM LINHA ENERGIZADA ENERGIZADA REDE BÁSICA</h3></td> 
		 <td style="padding:5px; font:Helvetica; font-size:12px; width:30%; text-align: left;">
		 	Área: Operação de Sistema
		 	<tr>
				<td style="padding:5px; font:Helvetica; font-size:12px; width:30%; text-align: left;"> 
					Processo: Tempo Real 
				</td>
			</tr>
			<tr>
				<td style="padding:5px; font:Helvetica; font-size:12px; width:30%; text-align: left;"> 
					Código: F.O.TR.CRON.01.00
				</td>
			</tr>		 
		 </td>
	</tr>
	</table>
	<small><small><small><small><br></small></small></small></small>	

	<div style="position: fixed; font-size:8px; down:5px; bottom: 1;width: 100%;text-align: right;margin-left:0px; padding:0px;">
	
	

	<table border="0" style="width:100%; border-top:thin solid; padding:2px;  border-color:black;"><tr>
	<td style="width:15%; "><img style="width:70px;" src="../../img/form.png"></td>
	<td style="width:25%; text-align:center; font-size:11px;"><b>Nº Revisão:</b> 00</td>
	<td style="width:30%; text-align:center; font-size:11px;"><b>Aprovado por:</b> Geordan F.F. Soares</td>
	<td style="width:30%; text-align:right; font-size:11px;">  <b>Criado em:</b> '.date('d').' de '.date('M').' de '.date('Y').' às '.date('h:i A').' </td>
	
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
		'F.O.TR.CRON.01.00_'.$lt.'_'.$term1.'_'.$term2,  
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>
