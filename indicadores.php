<!DOCTYPE html>
<html>
<head>
	
	
	<title>INDICADORES</title>

 
</head>


 <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  </head>
  
	<body>
		<center><a href="http://localhost/azahar/index_1.php"><img src="http://azaharcoffee.com/sites/default/files/logo.png"></a> </center>	
		<center><b><h2><i>AZAHAR COFFEE</i></h2></b></center>
		


		<center><h4><b>1.Numero de fincas con menos de 2 hectareas de cultivo:</b></h4></center>

		<?php 

			error_reporting(0);

			include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");	

			$query = "select count(*) as area from AreaCultivada where AreaCultivo < 2.0;";
			$resultado = mysql_query($query);

			// echo $resultado;


			while ($fila=mysql_fetch_array($resultado)) {
				
				echo "<tr>";
				echo "<center><h1><td><b> $fila[area] </h1></b></td></center> <br>";
				echo "</tr>";

			}	


	?>

		<center><h4><b>2.Porcentaje de fincas que usan el metodo de secado al sol:</b></h4></center>


	<?php 

			error_reporting(0);

			include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");	

			$query1 = "select (select count(IdFinca) from fincas where TipoSecado='al sol')/ count(idFinca)*100 as sol from fincas;";
			$resultado1 =  mysql_query($query1);
			

			
			while ($fila=mysql_fetch_array($resultado1)) {
				
				echo "<tr>";
				echo "<center><h1><td><b>".$fila['sol']."% </h1></b></td></center> <br>";
				echo "</tr>";

				
			}	

	?>


			<center><h4><b>3.Porcentaje promedio trabajadores mujeres:</b></h4></center>


		<?php 

			error_reporting(0);

			include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");	

			$query1 = "select avg(PorcentajeMujeres) as PromedioMujeres  from numerotrabajadores;";
			$resultado1 =  mysql_query($query1);
			

			
			while ($fila=mysql_fetch_array($resultado1)) {
				
				echo "<tr>";
				echo "<center><h1><td><b> $fila[PromedioMujeres]% </h1></b></td></center> <br>";
				echo "</tr>";

			}	

		?>

			<center><h4><b>4.Porcentaje de fincas con produccion anual menor a 4.000 libras:</b></h4></center>
		<?php 

			error_reporting(0);

			include 'conect.php';			
			$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
			mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");	

			$query1 = "select (select count(fincas_IdFinca) from produccionanual where ProduccionAnualTotal<4000)/ count(fincas_IdFinca)*100 as porcentajeProd from produccionanual;";
			$resultado1 =  mysql_query($query1);
			

			
			while ($fila=mysql_fetch_array($resultado1)) {
				
				echo "<tr>";
				echo "<center><h1><td><b> $fila[porcentajeProd]% </h1></b></td></center> <br>";
				echo "</tr>";

			}	

		?>
	</body>
</html>