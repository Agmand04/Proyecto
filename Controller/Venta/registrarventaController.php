<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["Id_Venta"]) || !isset($_POST["Metodo_Pago"]) || !isset($_POST["Fecha_Hora"]) || !isset($_POST["Cantidad_Producto"]) || !isset($_POST["Marca_Producto"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "../Model/base_de_datos.php";
$Id_Venta = $_POST["Id_Venta"];
$Metodo_Pago= $_POST["Metodo_Pago"];
$Precio_Producto = $_POST["Precio_Producto"];
$Cantidad_Producto= $_POST["Cantidad_Producto"];
$Marca_Producto= $_POST["Marca_Producto"];

$sentencia = $base_de_datos->prepare("INSERT INTO venta (Id_Venta, Metodo_Pago, Fecha_Hora, Cantidad_Producto, Marca_Producto) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$Id_Venta, $Metodo_Pago, $Precio_Producto, $Cantidad_Producto, $Marca_Producto]);

if($resultado === TRUE){
	header("Location: ../View/Venta/ListarVenta.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "../../includes/pie.php" ?>