<?php  ?>

<div class="col-xs-12">
	<h1>Nuevo Empleado</h1>
	<form method="post" action="../../Controller/Empleado/registrarEmpleadoController.php">
		<input type="hidden">
		<label for="Id_Empleado">Id:</label>
		<input class="form-control" name="Id_Empleado" required type="text" id="Id_Empleado" placeholder="Escribe el código">

		<label for="Nombre_Empleado">Nombre:</label>
		<input required id="Nombre" name="Nombre_Cliente" cols="30" rows="Nombre_Cliente" class="form-control"></input>

		<label for="Apellido_Empleado">Apellido:</label>
		<input class="form-control" name="Apellido" required type="Text" id="Nombre" placeholder="Ingrese su Apellido">

		<label for="Celular">Celular:</label>
		<input class="form-control" name="Celular" required type="text" id="Celular" placeholder="Ingrese su Celular">

		<label for="ARL">ARL:</label>
		<select class="form-control" name="ARL" required type="text" id="ARL" placeholder="Ingrese su ARL">
			<option>Seleccione su ARL</option>
			<option>Seguros Bolivar S.A.</option>
			<option>Seguros de vida Aurora</option>
			<option>AXA Colpatria S.A.</option>
			<option>Colmena Seguros</option>
			<option>La Equidad Seguros de Vida</option>
			<option>Liberty Seguros de Vida S.A.</option>
			<option>Mapfre Seguros</option>
			<option>Positiva</option>
			<option>Seguros de Vida Alfa S.A.</option>
			<option>ARL Sura</option>
			<option>SuraTep S.A.</option>
		</select>

        <label for="EPS">EPS:</label>
		<select class="form-control" name="EPS" required type="text" id="EPS" placeholder="Ingrese su EPS">
			<option>Seleccione su EPS</option>
			<option>Salud Colmena </option>
			<option>Salud Total </option>
			<option>Cafesalud </option>
			<option>Sanitas</option>
			<option>Unimec</option>
			<option>Compensar</option>
			<option>Comfenalco Antioquia</option>
			<option>SuSalud EPS</option>
			<option>Colseguros</option>
			<option>Comfenalco Valle</option>
			<option>Saludcoop</option>
			<option>Humana Vivir</option>
			<option>Servicios Medicos Colpatria</option>
			<option>Coomeva</option>
			<option>Famisanar</option>
			<option>Cafam-Colsubsidio</option>
			<option>Servicio Occidental de Salud</option>
			<option>Cruz Blanca</option>
			<option>Solsalud</option>
			<option>SaludVida</option>
			<option>SaludColombia</option>
			<option>Red Salud Atencion Humana</option>
			<option>Instituto de Seguros Sociales</option>
			<option>Caprecom</option>
			<option>Convida</option>
			<option>Cajanal</option>
			<option>Calisalud</option>
			<option>E.P.S de Caldas</option>
			<option>E.P.S Condor</option>
		</select>

        <label for="Tipo Transporte">Tipo Transporte:</label>
		<input class="form-control" name="Tipo Transporte" required type="text" id="Tipo Transporte" placeholder="Ingrese su tipo de transporte">


		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "../../includes/pie.php" ?>