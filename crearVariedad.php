<!DOCTYPE html>
<html>
<body>

<?php
	$idVariedad = $_POST['idVariedad'];
	$nombre = $_POST['Nombre'];
	

	$verifica = strlen($idVariedad) * strlen($nombre);

	if ($verifica>0) {
		    include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");
			mysql_query("INSERT INTO variedades VALUES ('$idVariedad','$nombre')");
			echo "Se ha guardado exitosamente";

		}	
		else {
			echo "<b>"." (*) Por favor ingrese todos los valores requeridos"."</b>";
		}
	

?>

</body>
</html>


