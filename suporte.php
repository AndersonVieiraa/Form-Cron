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
<script type="text/javascript" src="../easyui/datagrid-detailview.js"></script>
<link rel="icon" type="imagem/ico" href="img/favicon02.png" />
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<?php 
include_once 'conn.php'; 
?>	


<body style="position:relative; width:100%; height:100%; padding-bottom:130px; background: url(ilustracoes/fundo3.png)no-repeat right bottom fixed;">
<!-- Inicio MENU-->
<div style="position:relative; z-index:2;">
<table border="0" style="border-collapse:collapse; width:100%;height:100%; table-layout:; align: center; ">
		<tr>
			<td   width="30%" height="12%" style="padding:15px">				
				<a href="index.php"> <img src="https:ilustracoes/logo02.png" style=" width:260px;height:65px; padding-left:50px;" /></a>
			</td>
			<td  align="right" valign="top" width="70%" height="12%" style="padding:15px; padding-right:20px:">
			<font size="3" color='grey'>|</font><a class="transp2" href="index.php" style="text-decoration: none;"><font size="3" class="efeitomenu"> &nbsp  Página Inicial &nbsp</font></a><font size="3" color='grey'>|</font>
			
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

</div>	


<!-- Formulário do Suporte -->
		<form id="fm7" method="post" novalidate>
			<div class="easyui-panel" align="center" style="background: rgba(255,255,255, 0.0); width:100%;padding:10px 10px; border:0px solid #96C2F4;">		
					
				<table align="center" style="width:80%; border-spacing:10px;  border-radius:4px; border:1px solid #96C2F4; background:#6BA6DB;">
					<tr>
						<td style="text-align:center;"><b><font size="3" color="white">SUPORTE</font></b>
						</td>
					</tr>
				</table>
				<small><small><small><small><br></small></small></small></small>
			
					
					<table border="0" align="center" style="width:80%; border-spacing:7px; border-radius:7px; border:1px solid #96C2F4; padding:5px; margin:10px;">	
						<tr style="width:88%;" > 
							<td align="left" style="padding:15px;  width:160px; border:0px solid #96C2F4; border-radius:7px;" > Tipo do Chamado: 
							</td>
							<td align="left" style="padding:15px;  border:0px solid #96C2F4; border-radius:7px;" >
							<input type="radio" name="tipochamado" value="erro">Reportar Erro &nbsp &nbsp
								<input type="radio" name="tipochamado" value="melhoria">Sugestão de Melhoria &nbsp &nbsp
								<input type="radio" name="tipochamado" value="outros">Outros &nbsp &nbsp
							</td>							
						</tr>

						<tr style="width:88%;" > 
							<td align="left" style="padding:15px; width:160px;  border:0px solid #96C2F4; border-radius:7px;" > Email p/ Contato: 
							</td>	
							<td align="left" style="padding:15px;  border:0px solid #96C2F4; border-radius:7px;" >
								<input type="email" class="easyui-textbox" style="width:500px;" name="email" >
							</td>						
						</tr>
						
						<tr>
						<td colspan="2" align="left" style="padding-top:10px;">
						Mensagem:
						</td>
						</tr>

						<tr>
						<td colspan="2" align="center">								
							
							<TEXTAREA name="chamado"  prompt="Descrição da mensagem..." class="easyui-textbox" multiline="true" style="width:100%;height:200px;padding:15px"></TEXTAREA>
							
						</td>
						</tr>	
						
					</table>
			</div>
		</form>
	</div>

		<div align="right" style="width:90%; height:50px; padding:10px;" id="dlg5-buttons">
			<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="criarChamado()" style="width:190px;padding:3px;">Enviar</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="window.location.href='AI-edt.php?a=3'" style="width:120px;padding:3px;">Cancelar</a>
		</div>

		<script>


		function criarChamado(){
			$('#fm7').form('submit',{
				url: 'EDT/cadastrarChamado.php',
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
							window.location.href='index.php?b=1';
						},1500);
					
				}
			});
		}
		
		
	</script>
<!--Fim Formulário do Suporte -->

</div>	
</body>
</html>


