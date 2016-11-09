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

				$idVariedad = $_POST['idVariedad'];
				$nombre = $_POST['Nombre'];
	

				$verifica = strlen($idVariedad) * strlen($nombre);

				if ($verifica>0) {
		    
					mysql_query("INSERT INTO variedades VALUES ('$idVariedad','$nombre')");
					echo "Se ha guardado exitosamente";

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


