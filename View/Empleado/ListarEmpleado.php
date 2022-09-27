<?php include_once "../../includes/encabezado.php" ?>
<?php
include_once "../../Model/base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM empleado;");
$empleados = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Empleados</h1>
		<div>
			<a class="btn btn-success" href="RegistarEmpleado.php">Nuevo Empleado <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Celular</th>
					<th>ARL</th>
					<th>EPS</th>
                    <th>Tipo Transporte</th>
                    <TH>Editar</TH>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($empleados as $empleado){ ?>
				<tr>
					<td><?php echo $empleado->Id_Empleado?></td>
					<td><?php echo $empleado->Nombre_Empleado?></td>
					<td><?php echo $empleado->Apellido_Empleado?></td>
					<td><?php echo $empleado->Celular ?></td>
					<td><?php echo $empleado->ARL?></td>
                    <td><?php echo $empleado->EPS ?></td>
                    <td><?php echo $empleado->Tipo_transporte ?></td>
					<td><a class="btn btn-warning" href="<?php echo "EditarEmpleado.php?id=" . $empleado->Id_Empleado?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $empleado->Id_Empleado?>"><i class="fa fa-solid fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "../../includes/pie.php" ?>