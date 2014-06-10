<?php

	require('conexion.php');

	$varNombre = $_POST['Pnombre'];
	$varDescripcion = $_POST['Pdescripcion'];
	$varExistencia = $_POST['Pexistencia'];
	$varPrecio_Costo = $_POST['Pprecio_Costo'];
	$varPrecio_Venta = $_POST['Pprecio_Venta'];

	$query = "INSERT INTO `producto`(`Nombre`, `Descripcion`, `Existencia`, `Precio_Costo`, `Precio_Venta`) 
	VALUES ('$varNombre','$varDescripcion','$varExistencia','$varPrecio_Costo','$varPrecio_Venta')";
	

	$Resultado = mysql_query($query,$conexion);

?>
<br>
<a id="Por1" href="ingresarProducto.html" class="summit">Quetgo´s PRO | Portada</a>
<br>