<?php include_once "../../includes/encabezado.php" ?>
<?php
include_once "../../Model/base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM venta;");
$venta = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Ventas</h1>
		<div>
			<a class="btn btn-success" href="RegistrarVenta.php">Nueva Venta<i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Metodo Pago</th>
					<th>Fecha y Hora</th>
					<th>Id Empleado</th>
					<th>Id Cliente</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($venta as $venta){ ?>
				<tr>
					<td><?php echo $venta->Id_Venta ?></td>
					<td><?php echo $venta->Metodo_Pago ?></td>
					<td><?php echo $venta->Fecha_Hora?></td>
					<td><?php echo $venta->Id_Empleado?></td>
					<td><?php echo $venta->Id_Cliente?></td>
					<td><a class="btn btn-warning" href="<?php echo "EditarVenta.php?id=" . $venta->Id_Venta?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "EliminarVenta.php?id=" . $venta->Id_Venta?>"><i class="fa-solid fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "../../includes/pie.php" ?>