<?php include_once "../../includes/encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="../../Controller/Producto/registrarProductoController.php">
		<input type="hidden">
		<label for="Id_Producto">Id:</label>
		<input class="form-control" name="Id_Producto" required type="text" id="Id_Producto" placeholder="Escribe el código">

		<label for="Nombre_Producto">Nombre:</label>
		<input required id="Nombre" name="Nombre_Producto" cols="30" rows="Nombre_Producto" class="form-control"></input>

		<label for="Precio_Producto">Precio:</label>
		<input class="form-control" name="Precio_Producto" required type="number" id="Precio_Producto" placeholder="Ingresa el precio">

		<label for="Cantidad_Producto">Cantidad:</label>
		<input class="form-control" name="Cantidad_Producto" required type="number" id="Cantidad_Producto" placeholder="Ingresa la cantidad">

		<label for="Marca_Producto">Marca:</label>
		<input class="form-control" name="Marca_Producto" required type="text" id="Marca_Producto" placeholder="Ingresa la marca">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "../../includes/pie.php" ?>