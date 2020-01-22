<?php
function Conectar(){
	$conn = null;
	$servername = "localhost";
	$database = "data_amcharts";
	$username = "root";
	$password = "root";
echo "5"; 
//Crear la conexion a la BD
$conn = mysqli_connect($servername, $username, $password, $database);
echo "6"; 
if (!$conn) {
	die("No conectado a la BD" . mysqli_connect_error());
}
echo "Conectado correctamente";
return $conn;

?>
