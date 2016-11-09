

						

<!DOCTYPE html>
<html>
<head>	
	<title>PRUEBAS UNITARIAS</title> 
</head>
	<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  	</head>
  
		<body>
			<center><a href="http://localhost/azahar/index_1.php"><img src="http://azaharcoffee.com/sites/default/files/logo.png"></a> </center>	
			<center><b><h3><i>PRUEBAS UNITARIAS</i></h3></b></center>

			<center><h4><b>1.Prueba de acceso (LogIn)</b></h4>


			<div class="container">

				 <form method="POST" action="" class="form-control" />
				        <table>
				            <tr>
				                <td>
				                    <label for id="user"><b>Usuario:</b></label>
				                </td>
				                <td>
				                    <input type="text" name="user" class="form-control" id="user" /> &emsp;
				                </td>
				                
				                    <td>
				                        <label for id="pass"><b>Contraseña:</b></label>
				                    </td>
				                    <td>
				                        <input type="text" name="pass" class="form-control" id="pass" />
				                    </td>			       
				                
				        </table>
				    <input type="submit" name="login" class="btn btn-success" value="Login">
				            </form>
			</div>
</center>


<?php

error_reporting(0);

try {

	include 'conect.php';

    if ($conexion = mysql_connect($host, $user, $pwd)) {
        try {
            if (mysql_select_db($db, $conexion)) {
              
            	if (isset($_POST['login'] )){							
						
								$user = $_POST['user'];
								$pass= $_POST['pass'];

								$verifica = strlen($user)*strlen($pass);

								if ($verifica>0) {

										$consulta = "Select * from login where usuario = '".$user."'";
										$resultado = mysql_query($consulta);
										$ver = mysql_fetch_array($resultado);

										if ($ver != NULL) {
									
											echo "<center>"."<h4>"."<b>"."<font color=Green>"."Usuario correcto, Login correcto"."</font>"."</b>"."</h4>"."</center>";
									
										}else{
											echo "<center>"."<h4>"."<b>"."<font color=red>"."Usuario no registrado"."</font>"."</b>"."</h4>"."</center>";										
										}
								}else{
										echo "<center>"."<h4>"."<b>"."<font color=red>"."Existen campos vacios"."</font>"."</b>"."</h4>"."</center>";
								}				
									
				}			


            } else {
                throw new Exception("No se puede conectar a la BD");
            }
        } catch (Exception $e1) {
            echo $e1 -> getMessage();
        }
    } else {
        throw new Exception("No se puede conectar");
    }
} catch (Exception $e2) {
    echo $e2 -> getMessage();
}

?>

<center><h4><b>2. Crear Productor</b></h4>

	<div class="container">

				 <form method="POST" action="" class="form-control" />

					 <table>
					            <tr>
					                <td>
					                    <label for id="doc"><b>Documento:</b></label>
					                </td>
					                <td>
					                    <input type="text" name="doc" class="form-control" id="doc" /> &emsp;
					                </td>	

					                <td>
					                	<input type="submit" name="consultarP" class="btn btn-success" value="Consultar">
					                </td>			                    
					                    	       
					                
					</table>
					    
				</form>	
			</div>
</center>	

<?php
error_reporting(0);

try {

	include 'conect.php';

    if ($conexion = mysql_connect($host, $user, $pwd)) {
        try {
            if (mysql_select_db($db, $conexion)) {
              
            	if (isset($_POST['consultarP'] )){							
						
								$doc = $_POST['doc'];

								$verifica = strlen($doc);
								if ($verifica>0) {

										
									$consulta = "Select * from productores where IdProductor = '".$doc."'";
									$resultado = mysql_query($consulta);
									$ver = mysql_fetch_array($resultado);

									if ($ver != NULL) {

											echo "<center>"."<h4>"."<b>"."<font color=Green>"."El nombre del productor es:"."</font>"."</b>"."</h4>"."</center>";														
											echo "<tr>";
											echo "<center><h4><td><b>".$ver['Nombre']."</h4></b></td></center> <br>";
											echo "</tr>";
																						
									}else{
										echo "<center>"."<h4>"."<b>"."<font color=red>"."El productor no se encuentra creado"."</font>"."</b>"."</h4>"."</center>";	
									}

								}else{
									echo "<center>"."<h4>"."<b>"."<font color=red>"."Existen campos vacios"."</font>"."</b>"."</h4>"."</center>";

								}
				}


            } else {
                throw new Exception("No se puede conectar a la BD");
            }
        } catch (Exception $e1) {
            echo $e1 -> getMessage();
        }
    } else {
        throw new Exception("No se puede conectar");
    }
} catch (Exception $e2) {
    echo $e2 -> getMessage();
}



?>



</body>
</html>