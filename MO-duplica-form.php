<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form-CRON</title>

<link rel="stylesheet" type="text/css" href="../easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="../easyui/demo/demo.css">
<script type="text/javascript" src="../easyui/jquery.min.js"></script>
<script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
<link rel="icon" type="imagem/ico" href="img/favicon02.png" />
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<?php 
//include "permissaoN1.php";
include_once 'conn.php';
$name = $_GET['name'];


$id = intval($_REQUEST['id_mo']);
$rs = mysql_query("select * from MO where id_mo='$id'");
$item = mysql_fetch_array($rs); 

 ?>	

<!-- Inicio MENU-->
<table border="0" style="border-collapse:collapse; width:100%;height:100%; table-layout:; align: center;">
		<tr>
			<td   width="30%" height="12%" style="padding:15px">				
				<a href="index-adm.php?name=<?php  echo $name;?>"> <img src="https:ilustracoes/logo02.png" class="logo" /></a>
			</td>
			<td  align="right" valign="top" width="70%" height="12%" style="padding:10px; padding-right:20px:">
			<font size="3" color='grey'>|</font><a class="transp2" href="index-adm.php?name=<?php  echo $name;?>" style="text-decoration: none;"><font size="3" class="efeitomenu"> &nbsp  Página Inicial &nbsp</font></a>
			<font size="3" color='grey'>|</font><a class="transp2" href="logout.php" style="text-decoration: none;" > <font size="3" class="efeitomenu">&nbsp Logout &nbsp</a> </font>
			<font size="3" color='grey'>|</font> <font size="3" color='grey'>&nbsp Olá, 
			<?php  echo $name;?> &nbsp </font>
			
			</td>
		</tr> 

		<tr>
			<td colspan="2"  width="100%" style="padding-bottom:20px">
				<table width="100%" border="0">
					<tr>
						<td></td>	
						<td width="90%" style="border-top: #DCDCDC 1px solid;"></td>
						<td></td>
					</tr>
				</table>
			</td>
		</tr>
		

	</table>
</div>	
<!-- Fim MENU-->


<body>

<!-- Diálogo criar MO identica-->


		<form id="fm5"  method="post" novalidate>
			<div class="easyui-panel" style=" width:100%;padding:10px 10px; border:0px solid #96C2F4; padding-bottom:40px;">	
					<table align="center" style="width:90%; border-spacing:10px;  border-radius:4px; border:0px solid #96C2F4; background:#6BA6DB;">
					<tr><td style="text-align:center;">
					<b><font size="3" color="white">Criando MO a partir de um MODELO</font></b>
					</td></tr></table>
			
					<table border="0" align="center" style="width:90%;height:100%; border-spacing:10px; border-radius:4px; border:1px solid #96C2F4;">
					<tr ><td colspan="3">
					<div style="margin-bottom:20px">
						<input type="radio" name="classificacao" value="p" <?php $p="p"; if ($item['classificacao'] ==$p) {echo "checked";} else {echo '';}?> >Programada
						<input type="radio" name="classificacao" value="u" <?php $u="u"; if ($item['classificacao'] ==$u) {echo "checked";} else {echo '';}?> >Urgência
						<input type="radio" name="classificacao" value="e" <?php $e="e"; if ($item['classificacao'] ==$e) {echo "checked";} else {echo '';}?> >Emergência
					</div>
					</td></tr>

					<tr>
					<div style="margin-bottom:10px">
						<td>Destinatário:</td>
						<td colspan="2"><input class="easyui-textbox" value="<?php echo nl2br($item['destinatario']);?>" prompt="Destinatário" name="destinatario" iconWidth="28" style="width:450px;height:34px;padding:15px">
						</td>
					</div>
					</tr>

					<tr>
					<div style="margin-bottom:10px">
						<td>Área do Destinatário:</td>
						<td colspan="2"><input class="easyui-textbox" value="<?php echo nl2br($item['areadestinatario']);?>" prompt="Área do destinatário" name="areadestinatario" iconWidth="28" style="width:450px;height:34px;padding:15px">
						</td>
					</div>
					</tr>
					<tr>
					<div style="margin-bottom:10px">
						<td>Nome do destinatário:</td>
						<td style="width:450px;"><input class="easyui-textbox" value="<?php echo nl2br($item['nomedestinatario']);?>" prompt="Nomes dos destinatários" name="nomedestinatario" iconWidth="28" style="width:450px;height:34px;padding:15px">
						</td>
						<td>
							<!--<a href="javascript:void(0)" onclick="listadetransmissao()" class="easyui-linkbutton" iconCls="icon-search" plain="false" style="width:250px"> Listas de Transmissão </a>-->
							<a href="javascript:void(0)" onclick="" class="easyui-linkbutton" iconCls="icon-search" plain="false" style="width:90px"> AVA </a>
							<script> function abrirAVA(){ window.open('../AVA/index-adm.php', '', 'left=10, right=10, top=10, width=1400, height=1000')}</script>
						</td>
					</div>
					</tr>
					<tr>
					<div style="margin-bottom:10px">
					<td>Título do Assunto:</td>
						<td colspan="2"><input class="easyui-textbox" value="<?php echo nl2br($item['assuntotitulo']);?>" prompt="Título do assunto" name="assuntotitulo" iconWidth="28" style="width:85%;height:34px;padding:15px">
						</td>
					</div>
					</tr>
					
					
					
					<tr><td colspan="3">
					Mensagem:
					</td></tr>
				
					<tr><td colspan="3">
					
					
					<div id="dvCentro">
						<TEXTAREA id="Assunto" name="assunto">
						<?php echo $item['assunto'];	?> 
							
								
						</TEXTAREA>
					</div>
						<script src="ckeditor/ckeditor.js"></script>
						<script> 
						$(document).ready(function(){
						
						CKEDITOR.replace( 'Assunto' );
						});	
						
						</script>
					
					
					</td></tr>
					
				
					</table>
			</div>
		</form>
	
<!-- Início Rodapé
<div style="position: fixed; font-size:10px; background: rgba(169,169,169,0.7); color: rgba(105,105,105, 1); down:10px; bottom: 10;width: 105%;text-align: center; margin-left:0px; padding:7px;margin: -10px;">
	Copyright © DORFO-CHESF
	</div>-->
<!-- Fim Rodapé-->
		<div align="right" style=" width:100%; height:100px; padding:10px; padding-bottom:50px; padding-right:100px; background: #eee; border-top:1px #ccc solid; margin-bottom:-10px;" id="dlg5-buttons">
			<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="savenovaMO()" style="width:190px; padding:3px;">Criar</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:window.location.href='MO-edit.php?name=<?php  echo $name;?>'" style="width:120px;padding:3px;">Cancelar</a>
		</div>
		
		<script>

	
			function savenovaMO(){
			$('#fm5').form('submit',{
				url: 'EDT/duplica-MO.php',
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
						var win = $.messager.progress({
							title:'',
							msg:'Salvando dados...'
						});
						setTimeout(function(){
							$.messager.progress('close');
							window.location.href='MO-edit.php?name=<?php  echo $name;?>';
						},1500);
        
					
				}
			});
		}
	</script>

	
<!--Fim diálogo editar MO-->

	<iframe src="atualiza_session.php" width="0" height="0" ></iframe>

</body>
</html>