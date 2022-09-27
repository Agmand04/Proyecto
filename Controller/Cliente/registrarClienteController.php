<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["Id_Cliente"]) || !isset($_POST["Nombre"]) || !isset($_POST["Apellido"]) || !isset($_POST["Correo"]) || !isset($_POST["Contrasena"])|| !isset($_POST["Telefono"])|| !isset($_POST["Direccion"])|| !isset($_POST["Barrio"])|| !isset($_POST["Departamento"])|| !isset($_POST["Ciudad"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "./Model/base_de_datos.php";
$Id_Cliente = $_POST["Id_Cliente"];
$Nombre= $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Correo= $_POST["Correo"];
$Contrasena= $_POST["Contrasena"];
$Telefono= $_POST["Telefono"];
$Direccion= $_POST["Direccion"];
$Barrio= $_POST["Barrio"];
$Departamento= $_POST["Departamento"];
$Ciudad= $_POST["Ciudad"];

$sentencia = $base_de_datos->prepare("INSERT INTO cliente(Id_Cliente, Nombre, Apellido, Correo, Contrasena, Telefono, Direccion, Barrio, Departamento, Ciudad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$Id_Producto, $Nombre, $Apellido, $Correo, $Contrasena, $Telefono, $Direccion, $Barrio, $Departamento, $Ciudad]);

if($resultado === TRUE){
	header("Location: ../View/Cliente/ListarCliente.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "../../includes/pie.php" ?>