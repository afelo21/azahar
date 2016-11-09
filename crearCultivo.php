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

					$areaCultivo = $_POST['areaCultivo'];
	                $numArboles = $_POST['numArboles'];
	                $fechaSiembra = $_POST['fechaSiembra'];
					$produccionAnual = $_POST['produccionAnual'];
					$descripcionCAfe = $_POST['descripcionCAfe'];
					$variedad = $_POST['variedad'];
					$finca = $_POST['finca'];
	

					$verifica = strlen($areaCultivo) * strlen($variedad) * strlen($finca);

					if ($verifica>0) {
		   
						mysql_query("INSERT INTO cultivos VALUES (NULL,'$areaCultivo','$numArboles', '$fechaSiembra', '$produccionAnual', '$descripcionCAfe', '$finca','$variedad' )");
						echo "<b>"."Se ha guardado exitosamente"."</b>";

					}	
					else {
			
						echo "<center>"."<b>"."<font color=red>"." (*) Estos campos son Obligatorios"."</font>"."</b>"."</center>";
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








