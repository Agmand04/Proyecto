<?php include_once "../../includes/encabezado.php" ?>
<?php
include_once "../../Model/base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM cliente;");
$clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Clientes</h1>
		<div>
			<a class="btn btn-success" href="RegistrarCliente.php">Nuevo Cliente <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Correo</th>
					<th>Contrasena</th>
					<th>Telefono</th>
                    <th>Direccion</th>
                    <th>Barrio</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($clientes as $cliente){ ?>
				<tr>
					<td><?php echo $cliente->Id_Cliente ?></td>
					<td><?php echo $cliente->Nombre ?></td>
					<td><?php echo $cliente->Apellido ?></td>
					<td><?php echo $cliente->Correo ?></td>
					<td><?php echo $cliente->Contrasena ?></td>
                    <td><?php echo $cliente->Telefono ?></td>
                    <td><?php echo $cliente->Direccion ?></td>
                    <td><?php echo $cliente->Barrio ?></td>
                    <td><?php echo $cliente->Departamento ?></td>
                    <td><?php echo $cliente->Ciudad ?></td>


					<form>
					<td><a class="btn btn-warning" href="<?php echo "EditarCliente.php?Id=" . $cliente->Id_Cliente?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "EliminarCliente.php?Id=" . $cliente->Id_Cliente?>"><i class="fa fa-solid fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "../../includes/pie.php" ?>