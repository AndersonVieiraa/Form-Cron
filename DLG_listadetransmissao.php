


<!--Início de diálogo de listas de Transmissão-->	
		<div id="dlg17" class="easyui-dialog" title="Gerar Relatório" data-options="iconCls:'icon-search'" style="width:650px;height:500px;padding:20px; left:30%; top:3%;" closed="true" buttons="#dlg-buttons">
			<table cellpadding="7px" border="0" align="center" style="padding-top: 35px;">

			<tr><td>
			<a href="javascript:void(0)" onclick="listadetransmissaoped()" class="easyui-linkbutton" style="width:350px" plain="false">Pecém II - Acessantes no 230kV</a><br>
			</td></tr>
			<tr><td>
			<a href="javascript:void(0)" onclick="listadetransmissaoaud()" class="easyui-linkbutton" style="width:350px" plain="false">Acaraú II - Acessantes no 230kV</a><br>
			</td></tr>
			<tr><td>
			<a href="javascript:void(0)" onclick="listadetransmissaosbt()" class="easyui-linkbutton" style="width:350px" plain="false">Sobral III - Acessantes no 230kV</a><br>
			</td></tr>
			<tr><td>
			<a href="javascript:void(0)" onclick="listadetransmissaorsd()" class="easyui-linkbutton" style="width:350px" plain="false">Russas II - Acessantes no 230kV</a><br>
			</td></tr>
			<tr><td>
			<a href="javascript:void(0)" onclick="listadetransmissaosji()" class="easyui-linkbutton" style="width:350px" plain="false">São João Piauí - Acessantes no 500kV</a><br>
			</td></tr>
			<tr><td>
			<a href="javascript:void(0)" onclick="listadetransmissaotsd()" class="easyui-linkbutton" style="width:350px" plain="false">Teresina II - Acessantes no 500kV</a><br>
			</td></tr>
			<tr><td>
			<a href="javascript:void(0)" onclick="listadetransmissaoibd()" class="easyui-linkbutton" style="width:350px" plain="false">Ibiapina II - Acessantes no 230kV</a><br>
			</td></tr>
			</table>
		</div>
		
		<script>
		
		var url;
		function listadetransmissao(){
			$('#dlg17').dialog('open').dialog('setTitle','&nbsp Listas de Transmissão do AVA');

		}
		
		function listadetransmissaoped(){
			windowobjectReference = window.open('listadetransmissaoped.php', '', 'left=200, right=200, top=100, width=1000, height=1000')
		}
		
		function listadetransmissaoaud(){
			window.open('listadetransmissaoaud.php', '', 'left=200, right=200, top=100, width=1000, height=1000')
		}
		
		function listadetransmissaosbt(){
			window.open('listadetransmissaosbt.php', '', 'left=200, right=200, top=100, width=1000, height=1000')
		}
		
		function listadetransmissaorsd(){
			window.open('listadetransmissaorsd.php', '', 'left=200, right=200, top=100, width=1000, height=1000')
		}
		function listadetransmissaosji(){
			window.open('listadetransmissaosji.php', '', 'left=200, right=200, top=100, width=1000, height=1000')
		}
		function listadetransmissaotsd(){
			window.open('listadetransmissaotsd.php', '', 'left=200, right=200, top=100, width=1000, height=1000')
		}
		function listadetransmissaoibd(){
			window.open('listadetransmissaoibd.php', '', 'left=200, right=200, top=100, width=1000, height=1000')
		}
		
		</script>
<!--Fim diálogo de listas de Transmissão-->



