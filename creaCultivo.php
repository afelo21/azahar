<!DOCTYPE html>
<html>
<head>
	<title>CREAR CULTIVO</title>
</head>
	<body>  
	 <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   		 	<center><a href="http://localhost/azahar/"><img src="http://azaharcoffee.com/sites/default/files/logo.png"></a> </center>
			<center><b><h2><i>AZAHAR COFFEE</i></h2></b></center>
			<center><h3>Cultivo</h3> </center>
	     	<h4><b>Crear un cultivo</b></h4> 

	    <form method="POST" action="" />
	     		<table>
	     			<tr>
	     				<td>
	     					<b>(*)idCultivo</b>
	     				</td>
	     					<td>
	     						<input type="name" name="idCultivo" />
	     					</td>
	     				<tr>
	     					<td>
	     						<b>(*)Area del cultivo</b>
	     					</td>
	     						<td>
	     							<input type="name" name="areaCultivo" />
	     						</td>
	     				</tr>		
	     				<tr>
	     						<td>
	     							<b>Numero de árboles:</b>
	     						</td>
	     						<td>
	     							<input type="name" name="numArboles" />
	     						</td>
	     				</tr>		
	     				<tr>
	     						<td>

	     							<b>Fecha de Siembra:</b>
	     						</td>
	     						<td>
	     							<input type="date" name="fechaSiembra" />
	     						</td>
	     				</tr>	
	     				<tr>	
	     						<td>
	     							<b>Producción Anual (lbs):</b>
	     						</td>
	     						<td>
	     							<input type="name" name="produccionAnual" />
	     						</td>
	     				</tr>		
	     					
	     				<tr>
	     						<td>
	     							<b>Descripción del café:</b>
	     						</td>
	     						<td>
	     							<input type="name" name="descripcionCAfe" />
	     						</td>
	     				</tr>		
	     				

	     				<tr>	
	     						<td>
	     							<b>Variedad:</b>
	     						</td>
	     						<td>
	     							<input type="name" name="variedad" />
	     						</td>
	     				</tr>
						<tr>

	     						<td>
	     							<b>Finca:</b>
	     						</td>
	     						<td>
	     							<input type="name" name="finca" />
	     						</td>
	     				</tr>	     				

	     			</tr>

	     		</table>
	     		<input type="submit" name="creaCultivo" value="Crear" class="btn btn-info" >	
	     </form>
	     <br>


	     <?php	  

			error_reporting(0);


						if (isset($_POST['creaCultivo'] )) {							

							require ("crearCultivo.php");
						}		
		?>		
	    

	   
	    
	
	</body>	
</html>