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

					$int = (int) $idProductor;
					$query = "SELECT * from productores where IdProductor = '".$int."'"; 
					$resultado = mysql_query($query);
					$ver = mysql_fetch_array($resultado);

				if($verifica>0){	

						if ($ver!=NULL) {
		   
							echo "<center>"."<b>"." El Documento de ID ingresado pertenece a un productor ya existente"."</b>"."</center>";
							break;

							}	
					else {
							mysql_query("INSERT INTO productores VALUES ('$idProductor','$Nombre','$Telefono', '$Direccion')");
							echo "<b>"."Se ha guardado exitosamente"."</b>";
							break;						
							
					}
				}echo "<center>"."<b>"." (*) Estos campos son obligatorios"."</b>"."</center>";
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

