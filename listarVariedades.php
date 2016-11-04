<center>
<?php	
error_reporting(0);

			include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");

			$query = "select * from variedades";
			$resultado = mysql_query($query);

			while ($fila=mysql_fetch_array($resultado)) {
				
					echo "<tr>";
					echo "<td> $fila[IdVariedad] </td> <td> $fila[Nombre] </td> <br>";
					echo "</tr>";
				

			}	

?>
</center>
