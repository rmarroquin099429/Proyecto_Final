<?php

	require('conexion.php');

	// $varUsuario = $_SESSION['Usuario']; 
	// $varClave = $_SESSION['Clave'];

	
	// en este codigo seleccionamos el id de cliente para relacionarlo con las cotizaciones a buscar
	// $query1 = "SELECT `idCliente` FROM `cliente` WHERE Usuario = $varUsuario && Clave = $varClave"
	// $selec = mysql_fetch_array($query1);
	// en esta variable se almacela el id del cliente
	// $varCliente = $selec['idCliente'];
	// se hace la consulta a la base de datos
	$consulta = "SELECT * FROM `cotizacion` WHERE Cl_idCliente = 1";/*$varCliente*/ 

	// se oobtienen los datos de la seleccion y se almacenan en una variable
	$record = mysql_query($consulta,$conexion);
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mostrando Listado</title>
	<!-- este meta es importante para el responsivo igual que bootstrap-responsive -->
	<meta name="viewport" content="width=divece-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<!-- barra de opciones de navegacion  -->
	<div class="container">
		<div class="row">
			<div class="span12">		
				<nav>
					<div id="s1"class="navbar navbar-fixed-top">
						<div id="mi" class="container">
							<a href="#" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<a id="quetgo" href="index.html" class="brand">Quetgo´s PRO</a>
							<div class="nav-collapse">
								<ul class="nav">
									<li><a id="a2" href="quienes.html">Quienes Somos</a></li>
									<li><a id="a3" href="contenido.html">Contenido</a></li>
									<li><a id="a4" href="registrarCl.html">Registrar</a></li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	
	<!-- pantalla desplegable para ingresar a su sesion un usuario -->
	<!-- aqui se colocara el PHP que lo ocultara cuando el usuario este registrado -->
	<div class="container">
		<div class="row">
			<div class="span12">
				<nav >
					<div class="span3"></div>
					<div class="span3"></div>
					<div class="span3"></div>
					<div align="bottom" class="span3">
						<a href="#mimodal" role="button" class="btn" data-toggle="modal"> Iniciar Secion</a>
						<div id="mimodal" Class="modal hide fade">
							<div class="modal-header">
								<button type="button"class="close" data-dismiss="modal" area-hidden="true">X</button>
								<h3 id="k"align="center">INICIAR SESIÓN</h3>
							</div>
							<form id="modal"action="ValidacionLogin.php" method = "POST">
								<div class="modal-body">
										<table align="center">
											<tr>
												<td>USUARIO:</td>
												<td><input class="mediun"name = "usuario"type="text"></td>
											</tr>
											<tr>
												<td>CLAVE:</td>
												<td><input name = "clave" type="password"></td>
											</tr>
											<tr>
												<td></td>
												<td><button target="_blank" class="btn btn-primary btn-small" name= "ingresar">INGRESAR</button></td>
											</tr>
										</table>
								</div>
							</form>
						</div>
					</div>
				</nav>
			</div>
		</div>	
	</div>	
	<!-- fin php -->
	<!-- Parte Central de Contenido -->

				<div class="span3">
					<nav id="peek" class="mmenu mmenu-opened ">
					    <div>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					       <li><h1 align="center">Que deseas realizar</h1></li>
					       <li></li>
					    </div>
					    <ul id="mmenu-p1-0" class="mmenu-opened">
					    	<li></li>
					    	<li></li>
					        <li><a id="mmenu-p1-0" href="registrarEm.html">Registrar Empleado</a></li>
							<li><a id="mmenu-p1-1" href="NewCotizacion.html">Solicitar Cotizacion</a></li>
							<li><a id="mmenu-p1-2" href="ListaCotizacion.php">lista de Solicitudes</a></li>
							<li><a id="mmenu-p1-3" href="ListaProductos.php">lista de Productos</a></li>
							<li><a id="mmenu-p1-4" href="ingresarProducto.html">ingresar nuevo Producto</a></li>
							<li></li>
					    	<li></li>
					    </ul>
					    <ul align="center">
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li align="center"> 
								<a href="#">
									<strong>Quetgos Pro</strong>
								</a>
								**--------"Contactanos"---------** </br>
								°°<abbr title="telefono">Tel :</abbr> 56944613</br>
								<i class="icon-user icon-white"></i> correo: °°°rudy.innov@gmail.com</br>
								**-------------------------------------** </br></br>
					    	</li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    	<li></li>
					    </ul>
					   
					</nav>
				</div>

		<div class="container" >
			<div class="hero-unit"  >
					<div class="row-fluid" >
						<div class="span12" >
							<div class='span12' align="center">
								<h1>Quetgo´s Pro</h1>
								<small>Tu Pagina</small>
							</div>
						</div>
						<div class="span12">
							<div class='span12'>
								<img class="img-rounded"src="img/r1 (2).jpg" alt="index.html">
							</div>
						</div>
					</div>
			</div>
		</div>

	
	<div class="container">
		<h1>Listado de datos</h1>
		<table border='1'>
			<thead>
				<tr>
					<!-- nombres de las columnas -->
					<th>Id</th>
					<th>Descripcion</th>
					<th>Vehiculo</th>
					<th>Modelo</th>
					<th>Marca</th>
				</tr>
			</thead>
			<tbody>
				<?php
					// se recorre la variable como una array para extraer los datos 
				while($valores = mysql_fetch_array($record)) 
				{?>
				<tr>
					<!-- se despliegan los datos atraves de una tabla -->
					<td><?php echo $valores[0];?></td>
					<td><?php echo $valores[1];?></td>
					<td><?php echo $valores[2];?></td>
					<td><?php echo $valores[3];?></td>
					<td><?php echo $valores[4];?></td>
				</tr>
					
				<?php
				}

				?>
			</tbody>
		</table>
	</div>
	

<!-- importante agregar jquery porque activa las funcionalidades de collapse que son de javascript-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>		