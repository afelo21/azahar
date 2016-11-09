<!DOCTYPE html>
<html>
<head>
	<title>AZAHAR COFFEE</title>
	</head>

	
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    </head>

		<body>
				<center><IMG SRC="http://azaharcoffee.com/sites/default/files/logo.png"></center>
				<center><b><h2><i>AZAHAR COFFEE</i></h2></b></center>
				<center><h4>Conexion a la Base de datos</h4> </center> 
				<br>

				<center> 
					<form action = "ingresaDatos.php" method = "post">
						<input type = "submit" class="btn btn-info" value = "Ingresar Datos">
					</form>
				</center>


				<center> 
					<form action = "registraFinca.php" method = "post">
						<input type = "submit" class="btn btn-info" value = "Registrar Finca">
					</form>
				</center>


				<center> 
					<form action = "consultarFincas.php" method = "post">
						<input type = "submit" class="btn btn-info" value = "Crear Cultivo">
					</form>
				</center>


				
				<center> 	
					<form action = "indicadores.php" method = "post">
						<input type = "submit" class="btn btn-info" value = "Generar Indicadores">
					</form>
				</center>

				<center> 	
					<form action = "pruebasUnitarias.php" method = "post">
						<input type = "submit" class="btn btn-success" value = "Pruebas Unitarias">
					</form>
				</center>


				
		<?php 
/*

		error_reporting(0);

			include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");

			$query = "select * from variedades";
			$resultado = mysql_query($query);

			while ($fila=mysql_fetch_array($resultado)) {
				echo "<tr>";
				echo "<td> $fila[IdVariedad] </td> <td> $fila[Nombre] </td> <br>";
				echo "</tr>";

			}	
			
		*/			
			
		 ?>


		</body>
	</html>