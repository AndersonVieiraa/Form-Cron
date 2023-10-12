<!--Início de diálogo de editar perfil individual-->
<div id="dlg8" class="easyui-dialog" data-options="iconCls:'icon-man'" align="center" style="width:500px;height:370px;padding:15px" closed="true" >
	<div style="margin:20px 0;"></div>	
	<form id="fm" action="update_user.php" method="post">
    <div class="easyui-panel" style="width:400px;padding:50px 60px">        
        <div style="margin-bottom:20px">
            <input id="pass" name="senha" class="easyui-passwordbox" prompt="Nova Senha" iconWidth="28" style="width:100%;height:34px;padding:10px">
        </div>
        <div style="margin-bottom:20px">
            <input class="easyui-passwordbox" prompt="Confirme Nova Senha" iconWidth="28" validType="confirmPass['#pass']" style="width:100%;height:34px;padding:10px" required="true">
        </div>
		<div>
			<input  type="submit" class="easyui-linkbutton" iconCls="icon-ok" style="width:100%;padding:5px" >
		</div>
    </div>	
    <script type="text/javascript">
        $.extend($.fn.validatebox.defaults.rules, {
            confirmPass: {
                validator: function(value, param){
                    var pass = $(param[0]).passwordbox('getValue');
                    return value == pass;					
                },
                message: 'Senha não confirmada.'
            }
        })	
    </script>			
	</form>			
</div>
<script>
var url;
	function senha(){
			$('#dlg8').dialog('open').dialog('setTitle','&nbsp Alterar sua Senha');

	}
</script>
<!--Fim de diálogo de editar perfil individual-->