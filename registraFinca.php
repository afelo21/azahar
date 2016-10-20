<!DOCTYPE html>
<html>
<head>
	<title>REGISTRANDO TU FINCA</title>
</head>
	<body>  

	 <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <center><a href="http://localhost/azahar/"><img src="http://azaharcoffee.com/sites/default/files/logo.png"></a> </center>
	<center><b><h2><i>AZAHAR COFFEE</i></h2></b></center>
	<center><h4>Ingresa los datos de tu finca</h4> </center>

	<br>

	<form method="POST" action="" />
	     	<table>
	     		<tr>
	     				<td>
	     					<b>(*)id Finca:</b>
	     				</td>

	     				<td>
	     					<input type="name" name="idFinca" />
	     				</td>

	     				<td>
	     					<b>Altitud:</b>
	     				</td>

	     				<td>
	     					<input type="name" name="Altitud" />
	     				</td>
	     		<tr>
	     				<td>
	     					<b>(*)Nombre:</b>
	     				</td>
	     				<td>
	     					<input type="name" name="Nombre" />
	     				</td>
	     				<td>
	     					<b>(*)Tipo de secado:</b>
	     				</td>
	     				<td>
	     					<input type="name" name="Secado" />
	     				</td>
	     			</tr>	
	     		<tr>
	     				<td>
	     					<b>Fecha de Fundación:</b>
	     				</td>
	     				<td>
	     					<input type="date" name="Fundacion" />
	     				</td>
	     				<td>
	     					<b>Tiempo de secado (dias):</b>
	     				</td>
	     				<td>
	     					<input type="name" name="tiempoSecado" />
	     				</td>
	     		</tr>
	     		<tr>
	     				<td>
	     					<b>(*)Telefono Finca:</b>
	     				</td>
	     				<td>
	     					<input type="name" name="Telefono" />
	     				</td>
	     				<td>
	     					<b>Tipo de fermentación:</b>
	     				</td>
	     				<td>
	     					<input type="name" name="tipoFermentacion" />
	     				</td>
	     		</tr>

	     		<tr>
	     				<td>
	     					<b>(*)Dirección:</b>
	     				</td>
	     				<td>
	     					<input type="name" name="Direccion" />
	     				</td>
	     				<td>
	     					<b>Tiempo de fermentación (dias):</b>
	     				</td>
	     				<td>
	     					<input type="name" name="tiempoFermentación" />
	     				</td>
	     		</tr>	
	     	    <tr>
	     				<td>
	     					<b>(*)Departamento:</b>
	     				</td>
	     				<td>
	     					<input type="name" name="Departamento" />
	     				</td>
	     				<td>
	     					<b>(*)# Trabajadores Hombres:</b>
	     				</td>
	     				<td>
	     					<input type="name" name="Hombres" />
	     				</td>	     				
	     		</tr>	
	     		<tr>
	     				<td>
	     					<b>(*)Municipio</b>
	     				</td>
	     				<td>
	     					<input type="name" name="Municipio" />
	     				</td>
	     				<td>
	     					<b>(*)# Trabajadoras Mujeres:</b>
	     				</td>
	     				<td>
	     					<input type="name" name="Mujeres" />
	     				</td>
	     		</tr>	
	     				<tr>
	     					<td>
	     						<b>(*)Vereda:</b>
	     					</td>
	     					<td>
	     							<input type="name" name="Vereda" />
	     					</td>
	     					<td>
	     						<b>(*)Productor:</b>
	     					</td>
	     					<td>	
	     				
	     						<input type="name" name="Productor" />		
	     					
	     					</td>


	     		</tr>
	     		<tr>
	     			<td>
	     				<b>Area (mts2):</b>
	     			</td>
	     			<td>
	     				<input type="name" name="Area" />
	     			</td>

	     			<td>
	     				<b>Nombre del Administrador:</b>
	     			</td>
	     			<td>
	     				<input type="name" name="Administrador" />
	     			</td>

	     		</tr>	
	     		<br>
	     		<br>				

	     </table>
	     		<center>
	     		<input type="submit" name="guardarFinca" value="Guardar" class="btn btn-info" >	

	     		</center>
	     </form>

	  

		<?php	  

			error_reporting(0);

			

						if (isset($_POST['guardarFinca'] )) {							

							require ("registrarFinca.php");
						}		
		?>	


   </body>
</html>