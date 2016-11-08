<center>
<?php	
error_reporting(0);

			include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");

			$query = "select * from variedades";
			$resultado = mysql_query($query);

			while ($fila=mysql_fetch_array($resultado)) {
				
				echo "

													<table width=\"20%\" border = \"1\">
														<tr>
															<td><b><center>IdVariedad</center></b></td>
															<td><b><center>Nombre</center></b></td>	

														</tr>

														<tr>
															<td><center><b>".$fila['IdVariedad']."</b></center></td>
															<td><center>".$fila['Nombre']."</center></td>
															
														</tr>
													</table> 	

													";

					
				

			}	

?>
</center>
