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
	     	

	   
	    <div class="container"> 

		    <form method="POST" action="" class="form-control" />
		     		<table>
		     			<tr>
		     				<td>
		     					<label for id="idCultivo"><b>(*)idCultivo</b></label>
		     				</td>
		     					<td>
		     						<input type="text" name="idCultivo" class="form-control" id="idCultivo" />
		     					</td>
		     				<tr>
		     					<td>
		     						<label for id="areaCultivo"><b>(*)Area del cultivo</b></label>
		     					</td>
		     						<td>
		     							<input type="text" name="areaCultivo" class="form-control" id="areaCultivo" />
		     						</td>
		     				</tr>		
		     				<tr>
		     						<td>
		     							<label for id="numArboles"><b>Numero de árboles:</b></label>
		     						</td>
		     						<td>
		     							<input type="text" name="numArboles" class="form-control" id="numArboles" />
		     						</td>
		     				</tr>		
		     				<tr>
		     						<td>
		     							<label for id="fechaSiembra"><b>Fecha de Siembra:</b></label>
		     						</td>
		     						<td>
		     							<input type="date" name="fechaSiembra" class="form-control" id="fechaSiembra" />
		     						</td>
		     				</tr>	
		     				<tr>	
		     						<td>
		     							<label for id="produccionAnual"></label><b>Producción Anual (lbs):</b>
		     						</td>
		     						<td>
		     							<input type="text" name="produccionAnual" class="form-control" id="produccionAnual" />
		     						</td>
		     				</tr>		
		     					
		     				<tr>
		     						<td>
		     							<label for id="descripcionCAfe"><b>Descripción del café:</b></label>
		     						</td>
		     						<td>
		     							<input type="text" name="descripcionCAfe" class="form-control" id="descripcionCAfe" />
		     						</td>
		     				</tr>		
		     				

		     				<tr>	
		     						<td>
		     							<label for id="variedad"><b>Variedad:</b></label>
		     						</td>
		     						<td>
		     							<input type="text" name="variedad" class="form-control" id="variedad" />
		     						</td>
		     				</tr>
							<tr>

		     						<td>
		     							<label for id="finca"><b>Finca:</b></label>
		     						</td>
		     						<td>
		     							<input type="text" name="finca" class="form-control" id="finca" />
		     						</td>
		     				</tr>	     				

		     			</tr>

		     		</table>
		     		<input type="submit" name="creaCultivo" value="Crear" class="btn btn-info" >	
		     </form>
		     <br>

	</div>	     
	     <?php	  	

			error_reporting(0);


						if (isset($_POST['creaCultivo'] )) {							

							require ("crearCultivo.php");
						}		
		?>		
	    

	   
	    
	
	</body>	
</html>