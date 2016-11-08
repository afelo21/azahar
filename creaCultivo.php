<?php
error_reporting(0);
include 'conect.php';			
$conexion = mysql_connect($host, $user, $pwd) or die ("Error de conexion.");
mysql_select_db($db,$conexion) or die ("no se pudo conectar a la bd");
$consulta= "select * from variedades";
$resultado=mysql_query($consulta);	

?>

<!DOCTYPE html>
<html>

<head>
    <title>CREAR CULTIVO</title>
</head>

<body>
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <center>
        <a href="http://localhost/azahar/index_1.php"><img src="http://azaharcoffee.com/sites/default/files/logo.png"></a>
    </center>
    <center><b><h2><i>AZAHAR COFFEE</i></h2></b></center>
    <center>
        <h3>Crear Cultivo</h3>
    </center>



    <div class="container">

        <form method="POST" action="" class="form-control" />
        <table>
            <tr>
                <td>
                    <label for id="finca"><b>(*)Id Finca:</b></label>
                </td>
                <td>
                    <input type="text" name="finca" class="form-control" id="finca" />
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
                        <label for id="variedad"><b>Variedad del café:</b></label>
                    </td>
                    <td>
                        <select name="variedad" type = "text" id="variedad">
									   	   <option selected value="NO DEFINIDO"> Elige una opción </option>

								<?php
									error_reporting(0);

										while ($fila=mysql_fetch_row($resultado)) {

											echo "<option value= '".$fila['0']."'>".$fila['1']."</option>";
										}									
								?>	   	
									      
									    
						</select>
                    </td>
                </tr>

            </tr>

        </table>
        <input type="submit" name="creaCultivo" value="Crear" class="btn btn-info">
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