<!--Diálogo de Login-->
<div id="dlg22" class="easyui-dialog" title="Dados de login" data-options="iconCls:'icon-tip'" style="width:680px;height:540px;padding:20px;" closed="true">
		<table border="0" align="center" valign="center" height="100%" width="100%">
			<tr>
			<td align="center" valign="center">
				
				<form action="EDT/gerarpdf/index_LT_energizada.php" method="post" target="_blank">
					<div class="easyui-panel" style="width:550px;padding:30px 30px; border-radius:5px;">
					
					<table border="0" cellpadding="3" style="width:100%;">
						<tr>
							<td style="width:30%; vertical-align:midlle">
								<div style="color:grey;">LT:</div>
							</td>
							<td>	
									<input prompt="COD. LT" name="lt" class="easyui-textbox" iconWidth="28" style="width:80px;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;">
									- <input prompt="SE 01" name="term1" class="easyui-textbox" iconWidth="28" style="width:60px;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;">
									/ <input prompt="SE 02" name="term2" class="easyui-textbox" iconWidth="28" style="width:60px;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;">
								
							</td>
						<tr>	
							<td>
								<div style="color:grey;"> SI SAP</div>
							</td>
							<td>
								<input name="si_sap" class="easyui-textbox" iconWidth="28" style="width:40%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
								/ <input value="23H" name="ano_si_sap" class="easyui-textbox" iconWidth="28" style="width:20%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
							
							</td>
						<tr>
							<td>	
								<div style="color:grey;"> SGI ONS </div>
							</td>					
							<td>
								<input  name="sgi_ons" class="easyui-numberbox" iconWidth="28" style="width:40%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
								- <input value="23" name="ano_sgi_ons" class="easyui-numberbox" iconWidth="28" style="width:20%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
							</td>
						<tr>
							<td>
								<div style="color:grey;"> Data Inicial </div>
							</td>
							<td>	
								<input prompt="dd/mm/aaaa" name="data1" class="easyui-datebox" iconWidth="28" style="width:45%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
								<input prompt="hh:mm" name="time1" class="easyui-timespinner" iconWidth="28" style="width:35%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
							</td>
						<tr>
							<td>
								<div style="color:grey;"> Data Final</div>
							</td>
							<td>						
								<input prompt="dd/mm/aaaa" name="data2" class="easyui-datebox" iconWidth="28" style="width:45%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
								<input prompt="hh:mm" name="time2" class="easyui-timespinner" iconWidth="28" style="width:35%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
							
							</td>
						</tr>
							


						<tr>
							<td colspan="2" align="center" style="width:30%; vertical-align:midlle">
								<div style="margin-top:20px; width:100%; padding:2px">
								<input type="submit" style="width:100%;" value="Gerar Formulário" class="botao_login" />
								</div>
							</td>
						</tr>
					</table>
					</div>
				</form>
			</td>
			</tr>
		</table>
	</div>
<script>
var url;
	function dlg_lt_energizada(){
			$('#dlg22').dialog('open').dialog('setTitle','&nbsp Formulário Linha Energizada Rede Básica');
	}
</script>
<!--Fim diálogo de Login-->	