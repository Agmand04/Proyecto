<?php include_once "../../includes/encabezado.php" ?>
<?php
include_once "../../Model/base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM producto;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="registrar.php">Nuevo<i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Marca</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->Id_Producto ?></td>
					<td><?php echo $producto->Nombre_Producto ?></td>
					<td><?php echo $producto->Precio_Producto ?></td>
					<td><?php echo $producto->Cantidad_Producto ?></td>
					<td><?php echo $producto->Marca_Producto ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->Id_Producto?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->Id_Producto?>"><i class="fa-solid fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "../../includes/pie.php" ?>