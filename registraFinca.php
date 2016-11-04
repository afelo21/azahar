<!DOCTYPE html>
<html>
<head>
	<title>REGISTRANDO TU FINCA</title>
</head>
	<body>  

	 <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <center><a href="http://localhost/azahar/index_1.php"><img src="http://azaharcoffee.com/sites/default/files/logo.png"></a> </center>
	<center><b><h2><i>AZAHAR COFFEE</i></h2></b></center>
	<div class="container" >
		<form method="POST" action="" />
		     	<table >
		     		<tr>
		     				<td>
		     					<label for id="Nombre"><b>(*)Nombre de la Finca:</b></label>
		     				</td>

		     				<td>	
		     					<input type="text" name="Nombre" class="form-control" id="Nombre" /> &emsp;&emsp;&emsp;
		     				</td>

		     				<td>
		     					<label for id="Altitud"><b>(*)Altitud (MSNM):</b></label>
		     				</td>

		     				<td>
		     					<input type="text" name="Altitud" class="form-control" id="Altitud" />
		     				</td>
		     		<tr>
		     				<td>
		     					<label for id="Fundación"><b>(*)Fecha de Fundación:</b></label>
		     				</td>
		     				<td>
		     					<input type="date" name="Fundacion" class="form-control" id="Fundacion" />
		     				</td>
		     				<td>
		     					<label for id="Secado"><b>Tipo de secado:</b></label>
		     				</td>
		     				<td>
		     					<input type="text" name="Secado" class="form-control" id="Secado" />
		     				</td>
		     			</tr>	
		     		<tr>
		     				<td>
		     					<label for id="Telefono"><b>Telefono Finca:</b></label>
		     				</td>
		     				<td>
		     					<input type="text" name="Telefono" class="form-control" id="Telefono" />
		     				</td>
		     				<td>
		     					<label for id="tiempoSecado"><b>(*)Tiempo de secado (# dias):</b></label>
		     				</td>
		     				<td>
		     					<input type="text" name="tiempoSecado" class="form-control" id="tiempoSecado" />
		     				</td>
		     		</tr>
		     		<tr>
		     				<td>
		     					<label for id="Direccion"><b>(*)Dirección:</b></label>
		     				</td>
		     				<td>
		     					<input type="text" name="Direccion" class="form-control" id="Direccion" />
		     				</td>
		     				<td>
		     					<label for id="tipoFermentacion"><b>Tipo de fermentación:</b></label>
		     				</td>
		     				<td>
								<input type="text" name="tipoFermentacion" class="form-control" id="tipoFermentacion" />

		     				</td>
		     		</tr>

		     		<tr>
		     				<td>
		     					<label for id="Direccion"><b>(*)Departamento:</b></label>
		     				</td>
		     				<td>
		     					<input type="text" name="Departamento" class="form-control" id="Departamento" />
		     				</td>
		     				<td>
		     					<label for id="tiempoFermentación"><b>(*)Tiempo de fermentación (# dias):</b></label>
		     				</td>
		     				<td>
		     					<input type="text" name="tiempoFermentación" class="form-control" id="tiempoFermentación" />
		     				</td>
		     		</tr>	
		     	    <tr>
		     				<td>
		     					<label for id="Municipio"><b>(*)Municipio</b></label>
		     				</td>
		     				<td>
		     					<input type="text" name="Municipio" class="form-control" id="Municipio" />
		     				</td>
		     				<td>
		     					<label for id="Hombres"><b>(*)# Trabajadores Hombres:</b></label>
		     				</td>
		     				<td>
		     					<input type="text" name="Hombres" class="form-control" id="Hombres" />
		     				</td>	     				
		     		</tr>	
		     		<tr>
		     				<td>
		     					<label for id="Vereda"><b>Vereda:</b></label><b>
		     				</td>
		     				<td>
		     					<input type="text" name="Vereda" class="form-control" id="Vereda" />
		     				</td>
		     				<td>
		     					<label for id="Mujeres"><b>(*)# Trabajadoras Mujeres:</b></label>
		     				</td>
		     				<td>
		     					<input type="text" name="Mujeres" class="form-control" id="Mujeres" />
		     				</td>
		     		</tr>	
		     				<tr>
		     					<td>
		     						<label for id="Area"><b>(*)Area (mts2):</b></label>
		     					</td>
		     					<td>
		     							<input type="text" name="Area" class="form-control" id="Area" />
		     					</td>
		     					<td>
		     						<label for id="Productor"><b>(*)# Doc del Productor:</b></label>
		     					</td>
		     					<td>			     				
		     						<input type="text" name="Productor" class="form-control" id="Productor" />		
		     					
		     					</td>



		     		</tr>
		     		<tr>
		     			<td>
		     				<label for id="Administrador"><b>Nombre del Administrador:</b></label>
		     			</td>
		     			<td>
		     				<input type="text" name="Administrador" class="form-control" id="Administrador" />
		     			</td>
		     			

		     		</tr>	
		     		<br>
		     		<br>				

		     </table>
		     		<center>
		     		<input type="submit" name="guardarFinca" value="Guardar" class="btn btn-info" >	

		     		</center>
		     </form>
</div>
	  

		<?php	  

			error_reporting(0);

			

						if (isset($_POST['guardarFinca'] )) {							

							require ("registrarFinca.php");
						}		
		?>	


   </body>
</html>