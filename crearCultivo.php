<?php
	$areaCultivo = $_POST['areaCultivo'];
	$numArboles = $_POST['numArboles'];
	$fechaSiembra = $_POST['fechaSiembra'];
	$produccionAnual = $_POST['produccionAnual'];
	$descripcionCAfe = $_POST['descripcionCAfe'];
	$variedad = $_POST['variedad'];
	$finca = $_POST['finca'];
	

	$verifica = strlen($areaCultivo) * strlen($variedad) * strlen($finca);

	if ($verifica>0) {
		    include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");
			mysql_query("INSERT INTO cultivos VALUES (NULL,'$areaCultivo','$numArboles', '$fechaSiembra', '$produccionAnual', '$descripcionCAfe', '$finca','$variedad' )");
			echo "<b>"."Se ha guardado exitosamente"."</b>";

		}	
		else {
			
			echo "<center>"."<b>"."<font color=red>"." (*) Estos campos son Obligatorios"."</font>"."</b>"."</center>";
		}
	

?>





