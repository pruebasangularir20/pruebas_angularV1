<html> 
<head>
</head>

<body> 
  
<?php 
	$servidor = "localhost";
	$basededatos = "data_amcharts";
	$usuario = "root";
	$password = "root";
// conexión a la base de datos
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("Error al conectar al Servidor de BD");
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Error al conectar a la Base de Datos" );
// 	generacion de la consulta
	$consulta = "select YEAR(fecha_escala), count(*) as cuenta, sede from tbl_riesgos group by YEAR(fecha_escala), sede";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Error en la Consulta a la BD o Tabla");

// Construccion de tabla
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Sede</th><th>Cantidad</th><th>A&ntilde;o</th>";
	echo "</tr>";
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['sede'] . "</td><td>" . $columna['cuenta'] . "</td><td>" . $columna['YEAR(fecha_escala)'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?> 
  
</body> 
</html>

