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
			<center>
			<h3>Crear Cultivo</h3> 
			<h5>(Sí conoce la id de la finca)</h5>
			</center>

    


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

    	 try {
			include 'conect.php';
			if($conexion = mysql_connect($host, $user, $pwd)){
				try{
					if(mysql_select_db($db,$conexion)){

						//Codigo a ejecutar
						if (isset($_POST['btn2'] )) {							

							$nombreFinca = $_POST['nombreFinca'];
							$verifica = strlen($nombreFinca);

								
								$query = "SELECT * FROM fincas where Nombre like  '%$nombreFinca%'"; 
								$resultado = mysql_query($query);
								$ver = mysql_fetch_array($resultado);

								if ($ver!=NULL) {

												while ($fila=mysql_fetch_array($resultado)) {

													echo "

													<table width=\"50%\" border = \"1\">
														<tr>
															<td><b><center>Id de la Finca</center></b></td>
															<td><b><center>Nombre</center></b></td>
															<td><b><center>Direccion</center></b></td>
															<td><b><center>Administrador</center></b></td>
															<td><b><center>Telefono</center></b></td>

														</tr>

														<tr>
															<td><center><b>".$fila['IdFinca']."</b></center></td>
															<td><center>".$fila['Nombre']."</center></td>
															<td><center>".$fila['Direccion']."</center></td>
															<td><center>".$fila['Administrador']."</center></td>
															<td><center>".$fila['Telefono']."</center></td>
														</tr>
													</table> 	

													";

																																					
												
												}

								}else{

											echo "<center>"."<h3>"."<b>"."<font color=red>"."El nombre ingresado NO corresponde a una finca existente"."</font>"."</b>"."</h3>"."</center>";

											echo "<center>"."<h5>"."<b>"."<font color=red>"."(Presione 2 (dos) veces el boton Consultar Finca para listar todas las fincas registradas)"."</font>"."</b>"."</h5>"."</center>";	
											}					
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
	    

    		

    	</div>
    </center>
    		
  


</body>

</html>