<?php ?>

<div class="col-xs-12">
	<h1>Nueva Venta</h1>
	<form method="post" action="../../Controller/registrarventaController.php">
		<input type="hidden">
		<label for="Id_Venta">Id:</label>
		<input class="form-control" name="Id_Venta" required type="text" id="Id_Venta" placeholder="Escribe el código">

		<label for="Metodo_Pago">Metodo de pago:</label>
		<select required id="Nombre" name="Metodo_Pago" cols="30" rows="Metodo_Pago" class="form-control">
			<option>Seleccione su metodo de pago</option>
			<option>Débito</option>
			<option>Crédito</option>
			<option>Efectivo</option>
		</select>
		<label for="Fecha_Hora">Fecha</label>
		<input class="form-control" name="Fecha_Hora" required type="date" id="Fecha_Hora" placeholder="">

		<label for="Fecha_Hora">Hora</label>
		<input class="form-control" name="Fecha_Hora" required type="time" id="Fecha_Hora" placeholder="">

		<label for="Id_Cliente">Id Cliente:</label>
		<input class="form-control" name="Id_Cliente" required type="number" id="Id_Cliente" placeholder="">

		<label for="Id_Empleado">Id_Empleado:</label>
		<input class="form-control" name="Id_Empleado" required type="text" id="Id_Empleado" placeholder="">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "../../includes/pie.php" ?>