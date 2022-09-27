<?php
if(!isset($_GET["Id"])) exit();
$id = $_GET["Id"];
include_once "../../Model/base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM producto WHERE Id_Producto = ?;");
$sentencia->execute([$Id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "../../includes/encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto<?php echo $producto->id; ?></h1>
		<form method="post" action="../../Controller/Producto/guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="Id_Producto">Id:</label>
			<input value="<?php echo $producto->Id_Producto ?>" class="form-control" name="Id" required type="text" id="Id_Producto" placeholder="Escribe el Id">

			<label for="Nombre_Producto">Nombre:</label>
			<textarea required id="Nombre" name="Nombre" cols="30" rows="5" class="form-control"><?php echo $producto->Nombre_Producto ?></textarea>

			<label for="Precio_Producto">Precio:</label>
			<input value="<?php echo $producto->Precio_Producto ?>" class="form-control" name="precio" required type="number" id="Precio_Producto" placeholder="Precio de venta">

			<label for="Cantidad_Producto">Cantidad:</label>
			<input value="<?php echo $producto->Cantidad_Producto ?>" class="form-control" name="Cantidad" required type="number" id="Cantidad_Producto" placeholder="Cantidad">

			<label for="Marca_Producto">Marca:</label>
			<input value="<?php echo $producto->Marca_Producto ?>" class="form-control" name="Marca" required type="number" id="existencia" placeholder="Marca del producto">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "../../includes/pie.php" ?>
