<?php include_once "../../includes/encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo Cliente</h1>
	<form method="post" action="../../Controller/registrarClienteController.php">
	<title>Formulario</title>
    <link rel="stylesheet" href="../Asset/css/login-registro.css">
		<input type="hidden">
		<label for="Id_Cliente">Id:</label>
		<input class="form-control" name="Id_Cliente" required type="text" id="Id_Cliente" placeholder="Escribe el código">

		<label for="Nombre_Cliente">Nombre:</label>
		<input required id="Nombre" name="Nombre_Cliente" cols="30" rows="Nombre_Cliente" class="form-control"></input>

		<label for="Apellido">Apellido:</label>
		<input class="form-control" name="Apellido" required type="Text" id="Nombre" placeholder="Ingrese su Nombre">

		<label for="Correo">Correo:</label>
		<input class="form-control" name="Correo" required type="text" id="Correo" placeholder="Ingrese su correo">

		<label for="Contrasena">Contraseña:</label>
		<input class="form-control" name="Contrasena" required type="text" id="Contrasena" placeholder="Ingrese su contraseña">

        <label for="Telefono">Telefono:</label>
		<input class="form-control" name="Telefono" required type="text" id="Telefono" placeholder="Ingrese su número de Telefono">

        <label for="Direccion">Dirección:</label>
		<input class="form-control" name="Direccion" required type="text" id="Direccion" placeholder="Ingrese su Direccion de residencia o trabajo">

        <label for="Barrio">Barrio:</label>
		<input class="form-control" name="Barrio" required type="text" id="Barrio" placeholder="Ingrese el barrio en el que vive">

        <label for="Departamento">Departamento:</label>
		<select class="form-control" name="Departamento" required type="text" id="Departamento" placeholder="">
			<option>Seleccione el departamento</option>
			<option>Amazonas</option>
			<option>Antioquia</option>
			<option>Arauca</option>
			<option>Atlántico</option>
			<option>Bolivar</option>
			<option>Boyacá</option>
			<option>Caldas</option>
			<option>Caquetá</option>
			<option>Casanare</option>
			<option>Cauca</option>
			<option>Cesar</option>
			<option>Chocó</option>
			<option>Córdoba</option>
			<option>Cundinamarca</option>
			<option>Guainía</option>
			<option>Guaviare</option>
			<option>Huila</option>
			<option>La Guajira</option>
			<option>Magdalena</option>
			<option>Meta</option>
			<option>Nariño</option>
			<option>Norte de Santander</option>
			<option>Putumayo</option>
			<option>Quindío</option>
			<option>Risaralda</option>
			<option>San Andrés y Providencia</option>
			<option>Santander</option>
			<option>Sucre</option>
			<option>Tolima</option>
			<option>Valle del Cauca</option>
			<option>Vaupés</option>
			<option>Vichada</option>

</select>

        <label for="Ciudad">Ciudad:</label>
		<select class="form-control" name="Ciudad" required type="text" id="Ciudad" placeholder="">
			<option>Seleccione la Ciudad</option>
			<option>Leticia</option>
			<option>Medellin</option>
			<option>Arauca</option>
			<option>Barranquilla</option>
			<option>Cartagena</option>
			<option>Tunja</option>
			<option>Manizales</option>
			<option>Florencia</option>
			<option>Yopal</option>
			<option>Popayán</option>
			<option>Valledupar</option>
			<option>Quibdó</option>
			<option>Montería</option>
			<option>Bogotá</option>
			<option>Inírida</option>
			<option>San José del Guaviare</option>
			<option>Neiva</option>
			<option>Riohacha</option>
			<option>Santa Marta</option>
			<option>Villavicencio</option>
			<option>Pasto</option>
			<option>Cúcuta</option>
			<option>Mocoa</option>
			<option>Armenia</option>
			<option>Pereira</option>
			<option>San Andrés	</option>
			<option>Bucaramanga</option>
			<option>Sincelejo</option>
			<option>Ibagué</option>
			<option>Cali</option>
			<option>Mitú</option>
			<option>Puerto Carreño</option>
</select>
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "../../includes/pie.php" ?>