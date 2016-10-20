<?php
	$idCultivo = $_POST['idCultivo'];
	$areaCultivo = $_POST['areaCultivo'];
	$numArboles = $_POST['numArboles'];
	$fechaSiembra = "2016-02-01";
	$produccionAnual = $_POST['produccionAnual'];
	$descripcionCAfe = $_POST['descripcionCAfe'];
	$variedad = $_POST['variedad'];
	$finca = $_POST['finca'];

	
	

	$verifica = strlen($idCultivo) * strlen($areaCultivo) * strlen($variedad) * strlen($finca);

	if ($verifica>0) {
		    include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");
			mysql_query("INSERT INTO cultivos VALUES ('$idCultivo','$areaCultivo','$numArboles', '$fechaSiembra', '$produccionAnual', '$descripcionCAfe', '$variedad', '$finca')");
			echo "<b>"."Se ha guardado exitosamente"."</b>";

		}	
		else {
			
			echo "<b>"." (*) Por favor ingrese todos los valores requeridos"."</b>";
		}
	

?>