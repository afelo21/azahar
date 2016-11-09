<center>
<?php	
error_reporting(0);

try {
	include 'conect.php';
	if($conexion = mysql_connect($host, $user, $pwd)){
		try{
			if(mysql_select_db($db,$conexion)){

				//Codigo a ejecutar
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
			}
			else{
				throw new Exception("No se puede conectar a la BD");
			}
		}
		catch(Exception $e1){
			echo $e1->getMessage();
		}
	}
	else{
		throw new Exception("No se puede conectar");
	}	
}
catch(Exception $e2){
	echo $e2->getMessage();
}

			

	

?>
</center>
