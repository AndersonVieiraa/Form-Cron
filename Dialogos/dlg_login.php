<!--Diálogo de Login-->
<div id="dlg" class="easyui-dialog" title="Dados de login" data-options="iconCls:'icon-lock'" style="width:480px;height:440px;padding:20px;" closed="true">
		<table border="0" align="center" valign="center" height="100%" width="100%">
			<tr>
			<td align="center" valign="center">
				<form action="login.php" method="post">
					<div class="easyui-panel" style="width:400px;padding:60px 60px; border-radius:5px;">
					
					<div style="padding:2px;color:grey;">Login:</div>
					<div style="margin-bottom:20px;color:grey;">
						<input prompt="Username" name="usuario" type="text" iconWidth="28" style="width:100%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;" data-options="prompt:'Username',iconCls:'icon-man',iconWidth:38">
					</div>
					
					<div style="padding:2px; color:grey;">Senha:</div>
					<div style="margin-bottom:20px;color:grey;">
						<input prompt="Password" name="senha" type="password" iconWidth="28" style="width:100%;height:34px;padding:10px; border-radius:4px; border:1px solid #96C2F4;"  >
					</div>
					<div style="margin-bottom:20px; padding:2px">
					<input type="submit" class="botao_login" />
					</div>
					</div>
				</form>
			</td>
			</tr>
		</table>
	</div>
<script>
var url;
	function login(){
			$('#dlg').dialog('open').dialog('setTitle','&nbsp Dados de Login');
	}
</script>
<!--Fim diálogo de Login-->	