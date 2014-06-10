<!-- 
	////////////////// OBSERVACIOENS /////////////////////////
	ya teniendo especificados los campos de host, usuario y password
	la base de datos se conectara facil mente 
	el nombre del diagrama tambien es importante en este caso es 
	u187202040_mybd
	Tomarlo muy en cuenta cuando estemos colocando los datos 
	de la BD de la nube
 -->

<?php
	$conexion = mysql_connect('localhost','root','');
		if (mysqli_connect_errno()) {
  			echo "erro al conectarse a la base de datos " . mysqli_connect_error();
}
	mysql_select_db('u187202040_mybd',$conexion);
?>