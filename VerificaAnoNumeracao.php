<?php 
			
				$servername = "10.128.151.8";
				$database = "cron";
				$username = "cron";
				$password = ")cr0N(";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $database);
			
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				//echo "Connected successfully";
			
			
				//Lendo ultimo ano gerado da table da tabela
					$sql2 = "SELECT ano FROM numeracao2 WHERE id = 1 ";
					$res2 = mysqli_query($conn, $sql2);
					$linn2=mysqli_fetch_row($res2);
					$anoMySql=$linn2[0];	
					$ano=date('Y');	
					
				//Lendo ultimo numero gerado da table da tabela
					$sql = "SELECT numero FROM numeracao2 WHERE id = 1";
					$res = mysqli_query($conn, $sql);
					$linn=mysqli_fetch_row($res);
					$exibir=$linn[0];					
				
				
				//Comparando ano da tabela com o do servidor
				if($ano > $anoMySql){
										
					$sql3 = "INSERT INTO numeracao2 (numero, ano) VALUES ('$exibir', '$anoMySql')";
					$res3 = mysqli_query($conn, $sql3);
								
					$zerar = "UPDATE numeracao2 SET numero = 0 WHERE id = 1";
					$re5 = mysqli_query($conn, $zerar);
					$zerar2 = "UPDATE numeracao2 SET ano=$ano WHERE id = 1";
					$re6 = mysqli_query($conn, $zerar2);
					
					mysqli_close($conn);
					
				}
				else{
					
					mysqli_close($conn);
					
				}

				?>