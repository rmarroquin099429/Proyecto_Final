<!--  
	//////////////////////// OBSERVACIONES DE PROCESO ////////////////////////////////////
	 
	 Esta pantalla no funciona dado que debo de terminar 
	 el trabajo de las sesiones en toda la pagina para que 
	 me sirvan los datos de session[user] y session[clave] 
	
 -->
<?php
	session_start();
	require('conexion.php');

	$varDescripcion = $_POST['Ddescripcion'];
	$varVehiculo = $_POST['Dvehiculo'];
	$varModelo = $_POST['Dmodelo'];
	$varMarca = $_POST['Dmarca'];
	// $varUsuario = $_SESSION['Usuario']; 
	// $varClave = $_SESSION['Clave'];
 
	// en este codigo seleccionamos el id de cliente para relacionarlo con la cotizacion a realizar
	// $query1 = "SELECT `idCliente` FROM `cliente` WHERE Usuario = rd And Clave = rudy "; /*$varUsuario*//*$varClave*/ 
	//$selec = mysql_fetch_array($query1);
	// en esta variable se almacela el id del cliente
	// $valor = mysql_query($query1,$conexion);
	$varCliente = 1;
	//$selec['idCliente'];
	// se inserta la cotizacion con el id del cliente en la llave forania
	$query = "INSERT INTO `cotizacion`(`Descripcion`, `Vehiculo`, `Modelo`, `Marca`, `Cl_idCliente`)
	VALUES ('$varDescripcion','$varVehiculo','$varModelo','$varMarca','$varCliente')";
	
	$Resultado = mysql_query($query,$conexion);

?>
<br>
<a id="Por1" href="NewCotizacion.html" class="summit">Quetgo´s PRO | Nueva Cotizacion</a>
<br>
	