<!-- 
	 Como insertar Datos desde el formulario de Registrase y desde 
	 aqui se envian los datos a la BD; Verificar los Campos y nombres 
	
 -->
<?php

	require('conexion.php');

	$varNombre = $_POST['Cnombre'];
	$varApellido = $_POST['Capellido'];
	$varCorreo = $_POST['Ccorreo'];
	$varUsuario = $_POST['Cusuario'];
	$varClave = $_POST['Cclave'];

	$query = "INSERT INTO cliente (Nombre,Apellido,Correo,Usuario,Clave) 
	VALUES ('$varNombre','$varApellido','$varCorreo','$varUsuario','$varClave')";
	
	$Resultado = mysql_query($query,$conexion);

?>
<br>
<a id="Por1" href="registrarCl.html" class="summit">Quetgo´s PRO | Portada</a>
<br>
	