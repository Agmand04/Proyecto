<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["Id_Producto"]) || !isset($_POST["Nombre_Producto"]) || !isset($_POST["Precio_Producto"]) || !isset($_POST["Cantidad_Producto"]) || !isset($_POST["Marca_Producto"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "../Model/base_de_datos.php";
$Id_Producto = $_POST["Id_Producto"];
$Nombre_Producto= $_POST["Nombre_Producto"];
$Precio_Producto = $_POST["Precio_Producto"];
$Cantidad_Producto= $_POST["Cantidad_Producto"];
$Marca_Producto= $_POST["Marca_Producto"];

$sentencia = $base_de_datos->prepare("INSERT INTO producto(Id_Producto, Nombre_Producto, Precio_Producto, Cantidad_Producto, Marca_Producto) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$Id_Producto, $Nombre_Producto, $Precio_Producto, $Cantidad_Producto, $Marca_Producto]);

if($resultado === TRUE){
	header("Location: ../View/Producto/listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "../../includes/pie.php" ?>