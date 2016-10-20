<?php 
										error_reporting(0);
		   								include 'conect.php';			
										$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
										mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");

			
									?>


									<form method='POST' >
										<select name= 'Productor' onchange= 'submit()' >

									<?php
										$query = "SELECT * FROM PRODUCTORES";
										$resultado = mysql_query($query);
										while ($row = mysql_fetch_array($resultado)) {
											echo "<option value='".$row ['Nombre']."' ";
											if ($_POST ['Nombre']==$row ['Nombre']) 
											echo "SELECTED";

											echo ">";
											echo $row['Nombre'];
											echo "</option>";										
										}
			
									?>			
										</select>		

									</form>

