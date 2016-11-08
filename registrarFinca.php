<!DOCTYPE html>
<html>
<body>

<?php

	$idFinca = 'NULL';
	$Altitud = $_POST['Altitud'];

	$Nombre = $_POST['Nombre'];
	$Secado = $_POST['Secado'];
	
	$Fundacion = $_POST['Fundacion'];
	$tiempoSecado = $_POST['tiempoSecado'];

	$Telefono = $_POST['Telefono'];
	$tipoFermentacion = $_POST['tipoFermentacion'];

	$Direccion = $_POST['Direccion']; 
	$Fundacion = $_POST['Fundacion'];                                             

	$Departamento = $_POST['Departamento'];
	$tiempoFermentacion = $_POST['tiempoFermentacion'];

	$Municipio = $_POST['Municipio'];
	$Hombres = $_POST['Hombres'];

	$Vereda = $_POST['Vereda'];
	$Mujeres = $_POST['Mujeres'];

	$Area = $_POST['Area'];
	$Productor = $_POST['Productor'];
	$Administrador = $_POST['Administrador'];
	

	$history='FINCA CAFETERA';

	$verifica = strlen($Nombre)*strlen($Fundacion)*strlen($Direccion)*strlen($Departamento)*strlen($Municipio)*strlen($Area)*strlen($Altitud)*strlen($tiempoSecado)*strlen($tiempoFermentacion)*strlen($Hombres)*strlen($Mujeres)*strlen($Productor);

	include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ('Error de conexion.');
			mysql_select_db($db,$conexion) or die ('no se pudo conectar a la bd');

			$int = (int) $Productor;
			$query = 'SELECT * from productores where IdProductor = '".$int."''; 
			$resultado = mysql_query($query);
			$ver = mysql_fetch_array($resultado);

			if ($ver!=NULL) {

				if ($verifica>0) {
						    include 'conect.php';			
							$conexion = mysql_connect($host, $user, $pwd) or die ('Error de conexion.');
							mysql_select_db($db,$conexion) or die ('no se pudo conectar a la bd');

							mysql_query('INSERT INTO fincas VALUES ( NULL,'$Nombre','$Administrador', '$Direccion','$Telefono','$Fundacion',     '$Departamento', '$Municipio', '$Vereda', '$Area', '$Altitud', '$Secado', '$tiempoSecado', '$tipoFermentacion', '$tiempoFermentacion', '$Hombres', '$Mujeres','$history', '$Productor')');

							echo '<center>'.'<b>'.'<font color=green>'.'Se ha guardado exitosamente'.'</font>'.'</b>'.'</center>';

						}	
						else {
							
							echo '<center>'.'<b>'.'<font color=red>'.' (*) Estos campos son Obligatorios'.'</font>'.'</b>'.'</center>';
				
							}
			
				}else{

						echo '<center>'.'<h3>'.'<b>'.'<font color=red>'.'El # Doc del Productor ingresado NO corresponde a un productor existente'.'</font>'.'</b>'.'</h3>'.'</center>';				
				
					}			
?>

</body>
</html>


