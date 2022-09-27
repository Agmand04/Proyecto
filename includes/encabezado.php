<?php
/*
	Pequeño, muy pequeño sistema de ventas en PHP con MySQL

	@author parzibyte

	No olvides visitar parzibyte.me/blog para más cosas como esta
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Escoinfer Escobillas</title>
	<script src="https://kit.fontawesome.com/4cc7d63c22.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../Asset/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../Asset/css/2.css">
	<link rel="stylesheet" href="../Asset/css/estilo.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<h1>Menú</h1>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../Producto/listar.php">Productos</a></li>
					<li><a href="../Cliente/ListarCliente.php">Cliente</a></li>
					<li><a href="../Empleado/ListarEmpleado.php">Empleado</a></li>
					<li><a href="../Venta/ListarVenta.php">Venta</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">