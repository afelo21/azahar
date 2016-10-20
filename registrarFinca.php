<?php

	$idFinca = $_POST['idFinca'];
	$Altitud = $_POST['Altitud'];

	$Nombre = $_POST['Nombre'];
	$Secado = $_POST['Secado'];
	
	$Fundacion = $_POST['Fundacion'];
	$tiempoSecado = $_POST['tiempoSecado'];

	$Telefono = $_POST['Telefono'];
	$tipoFermentacion = $_POST['tipoFermentacion'];

	$Direccion = $_POST['Direccion'];                                              

	$Departamento = $_POST['Departamento'];
	$tiempoFermentación = $_POST['tiempoFermentación'];

	$Municipio = $_POST['Municipio'];
	$Hombres = $_POST['Hombres'];

	$Vereda = $_POST['Vereda'];
	$Mujeres = $_POST['Mujeres'];

	$Area = $_POST['Area'];
	$Productor = $_POST['Productor'];
	$Administrador = $_POST['Administrador'];

	$creacion = "1980-01-01";
	$area = 1;
	$history="historia";




	$verifica = strlen($idFinca) * strlen($Nombre) * strlen($Secado) * strlen($Telefono) * strlen($Departamento)* strlen($Municipio)* strlen($Hombres)* strlen($Mujeres)* strlen($Productor)*strlen($Direccion);

	if ($verifica>0) {
		    include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");
			
			mysql_query("INSERT INTO fincas VALUES ('$idFinca','$Nombre','$Administrador', '$Direccion', '$Telefono','$creacion', '$Departamento', '$Municipio', '$Vereda', '$area', '$Altitud', '$Secado', '$tiempoSecado', '$tipoFermentacion', '$tiempoFermentación', '$Hombres', '$Mujeres','$history', '$Productor')");

			echo "<b>"."Se ha guardado exitosamente"."</b>";

		}	
		else {
			
			echo "<b>"." (*) Por favor ingrese todos los valores obligatorios"."</b>";
		}
	

?>