<!DOCTYPE html>
<html>
<body>

<?php

try {
	include 'conect.php';
	if($conexion = mysql_connect($host, $user, $pwd)){
		try{
			if(mysql_select_db($db,$conexion)){

				//Codigo a ejecutar
					$idProductor = $_POST['idProductor'];
					$Nombre = $_POST['Nombre'];
					$Telefono = $_POST['Telefono'];
					$Direccion = $_POST['Direccion'];

	

					$verifica = strlen($idProductor) * strlen($Nombre) * strlen($Telefono) * strlen($Direccion);

					if ($verifica>0) {
		   
						mysql_query("INSERT INTO productores VALUES ('$idProductor','$Nombre','$Telefono', '$Direccion')");
						echo "<b>"."Se ha guardado exitosamente"."</b>";

					}	
					else {
			
						echo "<b>"." (*) Por favor ingrese todos los valores requeridos"."</b>";
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

</body>
</html>

