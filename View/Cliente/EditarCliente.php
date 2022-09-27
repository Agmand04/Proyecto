<?php
if(!isset($_GET["Id"])) exit();
$id = $_GET["Id"];
include_once "../../Model/base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM cliente WHERE Id_Cliente = ?;");
$sentencia->execute([$id]);
$cliente = $sentencia->fetch(PDO::FETCH_OBJ);
if($cliente === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "../../includes/encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar Cliente<?php echo $cliente->Id_Cliente; ?></h1>
		<form method="post" action="../../Controller/Cliente/guardarDatosEditadosCliente.php">
			<input type="hidden" name="id" value="<?php echo $cliente->id; ?>">
	
			<label for="Id_Cliente">Id</label>
			<input value="<?php echo $cliente->Id_Cliente ?>" class="form-control" name="Id" required type="text" id="Id" placeholder="Escribe el Id">

			<label for="Nombre">Nombre</label>
			<input value="<?php echo $cliente->Nombre ?>" class="form-control" name="Id" required type="text" id="Id" placeholder="Escriba su nombre">

			<label for="Apellido">Apellido</label>
			<input value="<?php echo $cliente->Apellido ?>" class="form-control" name="Apellido" required type="text" id="Apellido" placeholder="Escriba su apellido">

			<label for="Correo">Correo Electronico</label>
			<input value="<?php echo $cliente->Correo ?>" class="form-control" name="Correo" required type="text" id="Correo" placeholder="Digite su nuevo correo">

			<label for="Contrasena">Contraseña</label>
			<input value="<?php echo $cliente->Contrasena ?>" class="form-control" name="Contrasena" required type="text" id="Contrasena" placeholder="Digite su nueva contraseña">

			<label for="Telefono">Telefono</label>
			<input value="<?php echo $cliente->Telefono ?>" class="form-control" name="Telefono" required type="text" id="Telefono" placeholder="Digite su nuevo nùmero de Telefono">

			<label for="Direccion">Direcciòn</label>
			<input value="<?php echo $cliente->Direccion ?>" class="form-control" name="Direccion" required type="text" id="Direccion" placeholder="Digite su nueva Direccion">

			<label for="Contrasena">Barrio</label>
			<input value="<?php echo $cliente->Barrio ?>" class="form-control" name="Barrio" required type="text" id="Barrio" placeholder="Digite su Barrio Actual">

			<label for="Departamento">Departamento</label>
			<select value="<?php echo $cliente->Departamento ?>" class="form-control" name="Departamento" required type="text" id="Departamento" placeholder="Digite su Departamento">
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

			<label for="Ciudad">Ciudad</label>
			<select value="<?php echo $cliente->Ciudad ?>" class="form-control" name="Ciudad" required type="text" id="Ciudad" placeholder="Digite donde vive actualmente">
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
			<button><a class="btn btn-warning" href="./ListarCliente.php">Cancelar</a></button>
		</form>
	</div>
<?php include_once "../../includes/pie.php" ?>
