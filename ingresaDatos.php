<!DOCTYPE html>
<html>
<head>
	<title>AZAHAR COFFEE</title>
</head>
	<body>  
	 <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   		 	<center><a href="http://localhost/azahar/"><img src="http://azaharcoffee.com/sites/default/files/logo.png"></a> </center>
			<center><b><h2><i>AZAHAR COFFEE</i></h2></b></center>
			<center><h3>Ingresar Datos</h3> </center>
	     	<h4><b>Crear una varidad de Café</b></h4> 

	    <form method="POST" action="" />
	     		<table>
	     			<tr>
	     				<td>
	     					<b>(*)idVariedad:</b>
	     				</td>
	     					<td>
	     						<input type="name" name="idVariedad" />
	     					</td>
	     				<tr>
	     					<td>
	     						<b>(*)Nombre:</b>
	     					</td>
	     						<td>
	     							<input type="name" name="Nombre" />
	     						</td>
	     				</tr>	     					
	     			</tr>

	     		</table>
	     		<input type="submit" name="guardarVariedad" value="Guardar" class="btn btn-info" >	
	     </form>
	     <br>


	     	<?php	  

			error_reporting(0);


						if (isset($_POST['guardarVariedad'] )) {							

							require ("crearVariedad.php");
						}		
		?>		
	    

	     <h4><b>Crear un Productor</b></h4>
	        <form method="POST" action="" />
	     		<table>
	     			<tr>
	     				<td>
	     					<b>(*)id Productor:</b>
	     				</td>
	     					<td>
	     						<input type="name" name="idProductor" />
	     					</td>
	     				<tr>
	     					<td>
	     						<b>(*)Nombre:</b>
	     					</td>
	     						<td>
	     							<input type="name" name="Nombre" />
	     						</td>
	     				</tr>
	     				<tr>
	     					<td>
	     						<b>(*)Telefono:</b>
	     					</td>
	     						<td>
	     							<input type="name" name="Telefono" />
	     						</td>
	     				</tr>	
	     				<tr>
	     					<td>
	     						<b>(*)Dirección:</b>
	     					</td>
	     						<td>
	     							<input type="name" name="Direccion" />
	     						</td>
	     				</tr>		     					
	     			</tr>

	     		</table>
	     		<input type="submit" name="crearProductor" value="Guardar" class="btn btn-info" >	
	     </form>

	
		<?php	  

			error_reporting(0);


						if (isset($_POST['crearProductor'] )) {							

							require ("crearProductor.php");
						}		
		?>		
	    
	
	</body>	
</html>