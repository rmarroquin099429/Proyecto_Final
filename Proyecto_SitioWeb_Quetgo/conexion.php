<?php 
	
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	
	$conect=mysql_connect('localhost','nomUsuario','123');
	
	// $queryStr = 'SELECT * FROM mydiagramabd.cliente';
	if (!$conect) 
	{
	    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
	    exit;
	}
	
	$insertar="INSERT INTO mydiagramabd.Cliente (Nombre, Apellido)
	VALUES ('$nombre', '$apellido')";

	if (!mysqli_query($conect,$insertar)) 
		{
		  die('Error: ' . mysqli_error($conect));
		}
	echo "1 registro agregado exitoasamente";


	mysqli_close($conect);

	// $query = mysql_query($queryStr);

	// $filas=mysql_fetch_row($query);
	// echo $filas[0];
	echo 'Conectado satisfactoriamente';

	mysql_close($conect);
	
	// print_r($filas);
 ?>