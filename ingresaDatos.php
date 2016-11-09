<!DOCTYPE html>
<html>
<head>
	<title>AZAHAR COFFEE</title>
</head>
	<body>  
	 <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   		 	<center><a href="http://localhost/azahar/index_1.php"><img src="http://azaharcoffee.com/sites/default/files/logo.png"></a> </center>
			<center><b><h2><i>AZAHAR COFFEE</i></h2></b></center>
			<br>
			


		<div class="container">
		<h4><b>Crear una varidad de Café</b></h4>
	    <form method="POST" action=""/>
	     		<table>
	     			<tr> 
	     				<td>
	     					<label for="idVariedad"><b>(*)Id Variedad:</b></label>
	     				</td>
	     					<td> 
	     						<input type="text" name="idVariedad" class="form-control" id="idVariedad" />
	     					</td>
	     				<tr>
	     					<td>
	     						<label for="Nombre"><b>(*)Nombre:</b></label>
	     					</td>
	     						<td>
	     							<input type="text" name="Nombre" class="form-control" id="Nombre" />
	     						</td>
	     				</tr>	     					
	     			</tr>

	     		</table>
	     		<input type="submit" name="guardarVariedad" value="Guardar" class="btn btn-info" >	     		
	     		<input type="submit" name="listarVariedades" value="Mostrar" class="btn btn-info" >
	     		
	     </form>
	</div>     

	    


	     	<?php
	     		error_reporting(0);


						if (isset($_POST['guardarVariedad'] )) {							

							require "crearVariedad.php";
						}	

						if (isset($_POST['listarVariedades'] )) {							

							require "listarVariedades.php";
						}	

						
		?>		
	    <div class="container">
	    <h4><b>Crear un Productor</b></h4>
	    	<form method="POST" action="" />
	     		<table>
	     			<tr>
	     				<td>
	     					<label for="idProductor"><b>(*)Documento de Id:</b></label>
	     				</td>
	     					<td>
	     						<input type="text" name="idProductor" class="form-control" id="idProductor" />
	     					</td>
	     				<tr>
	     					<td>
	     						<label for = id="Nombre"><b>(*)Nombre:</b></label>	
	     					</td>
	     						<td>
	     							<input type="text" name="Nombre" class="form-control" id="Nombre" />
	     						</td>
	     				</tr>
	     				<tr>
	     					<td>
	     						<label for=id="Telefono"><b>(*)Telefono:</b></label>
	     					</td>
	     						<td>
	     							<input type="text" name="Telefono" class="form-control" id="Telefono" />
	     						</td>
	     				</tr>	
	     				<tr>
	     					<td>
	     						<label for id="Dirección"><b>(*)Dirección:</b></label>
	     					</td>
	     						<td>
	     							<input type="text" name="Direccion" class="form-control" id="Direccion" />
	     						</td>
	     				</tr>		     					
	     			</tr>

	     		</table>
	     		<input type="submit" name="crearProductor" value="Guardar" class="btn btn-info" >	
	     </form>


	    </div>
	        
	
		<?php	  

			error_reporting(0);


						if (isset($_POST['crearProductor'] )) {							

							require "crearProductor.php";
						}		
		?>		
	    
	
	</body>	
</html>