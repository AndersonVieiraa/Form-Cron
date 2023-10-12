
		function imprimir(){
			row = $('#dg3').datagrid('getSelected');
			window.open("EDT/gerarpdf/index.php?id_mo="+row.id_mo);
			
			}

				function doSearch(){
					$('#dg3').datagrid('load',{
						id_mo: $('#id_mo').val(),
						numero: $('#numero').val(),
						ano: $('#ano').val(),
						destinatario: $('#destinatario').val(),
						assuntotitulo: $('#assuntotitulo').val(),
						emitenteusuario: $('#emitenteusuario').val(),
						data: $('#data').val()
					});
				}
	
				
					$(function(){
						$('#dg3').datagrid({
							view: detailview,
							detailFormatter:function(index,row){
								return '<div id="ddv-' + index + '" style="padding:5px 0"></div>';
							},
							onExpandRow: function(index,row){
								$('#ddv-'+index).panel({
									border:false,
									cache:false,
									href:'datagrid21_getdetail_MO.php?itemid='+row.id_mo,
									onLoad:function(){
										$('#dg3').datagrid('fixDetailRowHeight',index);
									}
								});
								$('#dg3').datagrid('fixDetailRowHeight',index);
							}
						});
					});
					
					
			function destroyItem(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirmação','Tem certeza que deseja remover a MO?',function(r){
					if (r){
						$.post('EDT/destroy_MO.php',{id:row.id_mo},function(result){
							if (result.success){
								$('#dg3').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.errorMsg
								});
							}
						},'json');
					}
				});
			}
		}
		
		function editarMO(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				window.location.href='MO-edita-form.php?id_mo='+row.id_mo;
			}
		}


		function criaridentico(){
			var row = $('#dg3').datagrid('getSelected');
			if (row){
				window.location.href='MO-duplica-form.php?id_mo='+row.id_mo;
			}
		}


        function additem(){
			$('#dlg').dialog('open').dialog('setTitle','&nbsp Criar Nova MO');
			$('#fm6').form('clear');
			url = 'EDT/cadastrar-MO.php';
		}
	
				function criarMO(){
			$('#fm6').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg3').datagrid('reload');	// reload the user data
						$.messager.show({title:'Mensagem',msg:'MO Criada com Sucesso',timeout:2500,showType:'slide'});
				}
			});
		}
		