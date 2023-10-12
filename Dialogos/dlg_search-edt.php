<!--Diálogo de Login-->
<div id="dlg31" class="easyui-dialog" title="Dados de login" data-options="iconCls:'icon-search'" style="width:480px;height:390px;padding:20px;" closed="true">
		<table border="0" align="center" height="100%" width="100%">
			<tr>
			<td align="center">
				<form action="search-edt.php" target="" method="post">
					<div class="easyui-panel"  style="width:380px; height:234px; padding:20px 20px; border-radius:5px;">
					
						<!--<div style="padding:10px;color:grey;">Tipo do documento:</div>

						<div style="margin-bottom:10px;color:grey;">
							<input name="usuario" value="MO" type="radio">	MO	&nbsp 					
							<input name="usuario" value="AI" type="radio"> AI	&nbsp 							
							<input  name="usuario" value="ATEIE" type="radio"> ATEIE	&nbsp					
							<input  name="usuario" value="ATEE" type="radio"> ATEE &nbsp 	
							<input  name="usuario" value="TODOS" type="radio"> Todos &nbsp 	
						</div>
						
						<table width="100%" style="padding-top:10px;" border="0">
							<tr>
								<td></td>	
								<td width="100%" style="border-bottom: #DCDCDC 1px solid;"></td>
								<td></td>
							</tr>
						</table>-->

						<div align="center" style="margin-top:30px;color:grey;padding-top:5px;">
							<table border="0" cellpadding="3px">
							<tr>
								<td>Número:</td>
								<td>Ano (Opcional) :</td>
							</tr>
							<tr>
								<td>
									<input prompt="" name="numero" class="easyui-numberbox" iconWidth="28" style="width:130px;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;" >
								</td >
								<td >	
									<input prompt="" name="ano" class="easyui-numberbox" iconWidth="28" style="width:130px;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
								</td>
							</tr>
							</table>						
						</div>

						<div align="center" style="margin-top:10px; padding:2px">
							<input type="submit" value="Buscar" class="botao_login" >  
						</div>

					</div>
					<div align="left" style="margin-left:20px; padding:5px;"><i><font size="2" color="grey"> *A busca é feita em todos os arquivos</font></i></div>
				</form>
			</td>
			</tr>
		</table>
	</div>
<script>
var url;
	function search1(){
			$('#dlg31').dialog('open').dialog('setTitle','&nbsp Buscar Documento');
	}
</script>
<!--Fim diálogo de Login-->	