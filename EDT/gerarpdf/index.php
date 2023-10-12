<?php	

	include_once("conexao.php");
	$id = htmlspecialchars($_REQUEST['id_mo']);
	$result_transacoes = "SELECT * FROM MO where id_mo='$id'";
	$resultado_trasacoes = mysqli_query($conn, $result_transacoes);
	$row_transacoes = mysqli_fetch_assoc($resultado_trasacoes);
	$assunto= $row_transacoes['assunto'];
	$nomedestinatario= nl2br($row_transacoes['nomedestinatario']);
	$areadestinatario= nl2br($row_transacoes['areadestinatario']);
	$destinatario= nl2br($row_transacoes['destinatario']);
	
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
	if ($row_transacoes['classificacao'] ==$p) {$x="<img style='width:15px;height:15px;' src='../../img/check.png'>";}
	if ($row_transacoes['classificacao'] ==$u) {$y="<img style='width:15px;height:15px;' src='../../img/check.png'>";}
	if ($row_transacoes['classificacao'] ==$e) {$z="<img style='width:15px;height:15px;' src='../../img/check.png'>";}

	$html = '<table style="width:100%; border-collapse:collapse; border-spacing:0px;  border-radius:0px;border:0px solid #000000;">';	



	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='padding-bottom: 5px; width:100%'>";
			$html .= "<table style='border-collapse:collapse; border-spacing:0px; width:100%;font-size:13px'>";
			$html .= "<tr>";
			$html .= "<td  style='padding:10px; background:#F0F0F0; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:20%'>";
			$html .= "<b>Classificação: &nbsp;</b></td>";
			$html .= "<td style='padding:5px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:80%'>";
			$html .= "<table align='center' border='0'><tr>";
			$html .= "<td align='center' style='border:1px solid #000000;width:20px;'><b>".$x."</b></td><td><b>Programada &nbsp;</b></td>";
			$html .= "<td align='center' style='border:1px solid #000000;width:20px;'><b>".$y."</b></td><td><b>Urgência &nbsp;</b></td>";
			$html .= "<td align='center' style='border:1px solid #000000;width:20px;'><b>".$z."</b></td><td><b>Emergência</b></td></tr></table>";
			$html .= "</td>";
			$html .= "</tr>";
			$html .= '</table>';
	$html .= "</td>";
	$html .= "</tr>";
	

		
	
	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='padding-bottom: 5px;width:100%'>";
			$html .= "<table style='border-collapse:collapse; border-spacing:3px; width:100%;font-size:13px'>";	
			$html .= "<tr>";
			$html .= "<td rowspan='2' style='padding:10px; background:#F0F0F0; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:20%'><b>Emitente:&nbsp;</b></td>";
			$html .= "<td rowspan='2' style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:40%'>CHESF</td>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:40%'><b>Nome:&nbsp;</b>" .$row_transacoes['emitenteusuario']."</td>";	
			$html .= "</tr>";
			$html .= "<tr>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:10%'><b>Área:&nbsp;</b>" .$row_transacoes['areaemitente']."</td>";
			$html .= "</tr>";
			$html .= '</table>';
	$html .= "</td>";
	$html .= "</tr>";
	
	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='padding-bottom: 5px; width:100%'>";
			$html .= "<table style='border-collapse:collapse; border-spacing:3px; width:100%;font-size:13px'>";	
			$html .= "<tr>";
			$html .= "<td rowspan='2' style='padding:10px; background:#F0F0F0; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:20%'><b>Destinatário: &nbsp;</b></td>";
			$html .= "<td rowspan='2' style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:40%'>".$destinatario."</td>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:40%'><b>Nome: &nbsp;</b>".$nomedestinatario."</td>";
			$html .= "</tr>";
			$html .= "<tr>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:10%'><b>Área: &nbsp;</b>".$areadestinatario."</td>";	
			$html .= "</tr>";
			$html .= '</table>';
	$html .= "</td>";
	$html .= "</tr>";
	
	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='padding-bottom: 5px; width:100%'>";
			$html .= "<table style='border-collapse:collapse; border-spacing:3px; width:100%;font-size:13px'>";	
			$html .= "<tr >";
			$html .= "<td style='padding:10px; background:#F0F0F0; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:20%'><b>Recebido por:<br></b></td>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:40%'></td>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:25%'> <b>Data: <br></b></td>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:15%'><b>Hora: <br></b></td>";	
			$html .= "</tr>";
			$html .= '</table>';
	$html .= "</td>";
	$html .= "</tr>";


	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='padding-bottom: 5px; width:100%'>";
			$html .= "<table style='border-collapse:collapse; border-spacing:3px; width:100%;font-size:13px'>";		
			$html .= "<tr>";
			$html .= "<td colspan='1' style='padding:10px; background:#F0F0F0; font:Helvetica; font-size:13px; border:1px solid #000000; width:20%'><b>Assunto:</b></td>";
			$html .= "<td colspan='5' style='padding:10px; font:Helvetica; font-size:13px; border:1px solid #000000;  width:80%'>".$row_transacoes['assuntotitulo']."</td>";
			$html .= "</tr>";
			$html .= '</table>';
	$html .= "</td>";
	$html .= "</tr>";	
$html .= '</table>';

//Assunto em uma DIV
$html .= "<style type='text/css'>.condicoes li{margin-top: -15px;} .condicoes ol li{margin-top: 0px;} .condicoes p{margin:8px;} </style><div style='border:1px solid #000000; padding:10px; font:Helvetica; font-size:13px; vertical-align: top; border-radius:0px; border:1px solid #000000; width:100%;'> <b>Mensagem:<br><br></b> $assunto </div>";
//Fim Assunto em uma DIV


$html .= '<table style="border-collapse:collapse; width:100%; margin-top:5px;">';
	$html .= "<tr>";
	$html .= "<td colspan='3' rowspan='1' style='padding-bottom: 5px; width:100%'>";
			$html .= "<table style='border-collapse:collapse; border-spacing:3px; width:100%;font-size:13px'>";
			$html .= "<tr>";
			$html .= "<td style='padding:10px; background:#F0F0F0; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:20%'><b>Criado por: &nbsp;</b></td>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:40%'>".$row_transacoes['emitenteusuario']."</td>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:20%'><b>Data: &nbsp;</b>".$row_transacoes['data']."</td>";
			$html .= "<td style='padding:10px; font:Helvetica; font-size:13px; border-radius:0px; border:1px solid #000000; width:20%'><b>Hora: &nbsp;</b>".$row_transacoes['hora']."</td>";
			$html .= "</tr>";
			$html .= '</table>';
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
	<table style="border-collapse:collapse; width:100%; border-radius:0px;border:0px solid #000000;" >

	<tr border=1>
		 <td style=" padding:5px; border-radius:0px;border:1px solid #000000; align:center;" width=15% valign="center"><img style="width:120px;" src="../../img/logoMarcaChesf.png"></td> 
		 <td style=" padding:0px; border-radius:0px; font:Helvetica; font-size:16px; border:1px solid #000000;" width=55%><h3 style="text-align: center;">MO - Mensagem Operativa</h3></td> 
		 <td style="padding:5px; font:Helvetica; font-size:13px; width:15%; border-radius:0px;border:1px solid #000000; text-align: center;"><b>MO Número<br> </b> '.$row_transacoes['numero'].' / '.$row_transacoes['ano'].' <br><i> '.$row_transacoes['revisaoSaida'].'</i></td>
		 <td style="padding:5px; font:Helvetica; font-size:13px; width:15%; border-radius:0px;border:1px solid #000000; text-align: center;"><b>Data<br> </b> '.$row_transacoes['data'].'</td>
     </tr>
		
	</table>	

	<br>
	<div style="position: fixed; font-size:8px; down:5px; bottom: 1;width: 100%;text-align: right;margin-left:0px; padding:5px;">
	
	<table border="0" style="width:100%; border-top:thin solid; border-color:black;"><tr>
	<td style="width:30%"><img style="width:70px;" src="../../img/form.png"></td>
	<td style="width:70%; text-align:right;"> https://form-cron.000webhostapp.com/Form/EDT/gerarpdf/index.php?id_mo='.$row_transacoes['id_mo'].' </td>
	
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
		'MO-DONFS-'.$row_transacoes['numero'].'-'.$row_transacoes['ano'].''.$traco.''.$row_transacoes['revisaoSaida'], 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>
