<?php

	require('conexion.php');

	$varNombre = $_POST['Enombre'];
	$varApellido = $_POST['Eapellido'];
	$varDireccion = $_POST['Edireccion'];
	$varSexo = $_POST['Esexo'];
	$varDPI = $_POST['Edpi'];
	$varUsuario = $_POST['Eusuario'];
	$varClave = $_POST['Eclave'];

	$query = "INSERT INTO `empleado`(`Nombre`, `Apellido`, `Direccion`, `DPI`, `Sexo`, `Usuario`, `Clave`)
	VALUES ('$varNombre','$varApellido','$varDireccion','$varDPI','$varSexo','$varUsuario','$varClave')";
	

	$Resultado = mysql_query($query,$conexion);

?>
<br>
<a id="Por1" href="registrarEm.html" class="summit">Quetgo´s PRO | Portada</a>
<br>