<!DOCTYPE html>
<html>
<head>
	<title>CREAR CULTIVO</title>
</head>
	<body>
	 <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   		 	<center><a href="http://localhost/azahar/index_1.php"><img src="http://azaharcoffee.com/sites/default/files/logo.png"></a> </center>
			<center><b><h2><i>AZAHAR COFFEE</i></h2></b></center>
			<center><h3>Crear Cultivo</h3> </center>
    


    <center>
        <div class="container">
            <form action="creaCultivo.php" method="post">            	
                <input type="submit" class="btn btn-info" value="Crear Cultivo" name="btn1">            
            </form>
        </div>
    </center>

    <center>
    	
    	<div class="container">

    	<form action="consultarFincas.php" method="post">
    		<label for id="nombreFinca"><b>Para consultar el ID de su finca:</b></label>
    		<input type="text" name="nombreFinca" class="form-control" id="nombreFinca" placeholder="Nombre de la finca">
    		<input type="submit" class="btn btn-success" value="Consultar Finca" name="btn2">
    	</form>

    	 <?php	  	

			error_reporting(0);


						if (isset($_POST['btn2'] )) {							

							$nombreFinca = $_POST['nombreFinca'];
							$verifica = strlen($nombreFinca);

								include 'conect.php';			
								$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
								mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");

								echo "conecto la bd";

								$query = "SELECT * FROM fincas where Nombre like  %'".$nombreFinca."'%"; 
								$resultado = mysql_query($query);
								$ver = mysql_fetch_array($resultado);

								if ($ver!=NULL) {

												while ($fila=mysql_fetch_array($resultado)) {
												echo "<tr>";
												echo "<td> $fila[IdFinca] </td> <td> $fila[Nombre] </td> <br>";
												echo "</tr>";											
												
												}

								}else{

											echo "<center>"."<h3>"."<b>"."<font color=red>"."El nombre ingresado NO corresponde a una finca existente"."</font>"."</b>"."</h3>"."</center>";

											}					
						} 
									
						


						


		?>		
	    

    		

    	</div>
    </center>
    		
  


</body>

</html>