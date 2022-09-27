<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["Id_Empleado"]) || !isset($_POST["Nombre_Empleado"]) || !isset($_POST["Apellido_Empleado"]) || !isset($_POST["Celular"]) || !isset($_POST["ARL"]) || !isset($_POST["EPS"]) || !isset($_POST["Tipo_transporte"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "../Model/base_de_datos.php";
$Id_Empleado = $_POST["Id_Empleado"];
$Nombre_Empleado= $_POST["Nombre_Empleado"];
$Apellido_Empleado = $_POST["Apellido_Empleado"];
$Celular= $_POST["Celular"];
$ARL= $_POST["ARL"];
$EPS= $_POST["EPS"];
$Tipo_transporte= $_POST["Tipo_transporte"];

$sentencia = $base_de_datos->prepare("INSERT INTO empleado(Id_Empleado, Nombre_Empleado, Apellido_Empleado, Celular, ARL, EPS , Tipo_transporte ) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$Id_Empleado, $Nombre_Empleado, $Apellido_Empleado, $Celular, $ARL, $EPS, $Tipo_transporte]);

if($resultado === TRUE){
	header("Location: ../View/Empleado/ListarEmpleado.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "../../includes/pie.php" ?>