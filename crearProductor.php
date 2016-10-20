<?php
	$idProductor = $_POST['idProductor'];
	$Nombre = $_POST['Nombre'];
	$Telefono = $_POST['Telefono'];
	$Direccion = $_POST['Direccion'];

	

	$verifica = strlen($idProductor) * strlen($Nombre) * strlen($Telefono) * strlen($Direccion);

	if ($verifica>0) {
		    include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");
			mysql_query("INSERT INTO productores VALUES ('$idProductor','$Nombre','$Telefono', '$Direccion')");
			echo "<b>"."Se ha guardado exitosamente"."</b>";

		}	
		else {
			
			echo "<b>"." (*) Por favor ingrese todos los valores requeridos"."</b>";
		}
	

?>