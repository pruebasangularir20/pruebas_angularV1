<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>amCharts V4 Example - cylinder-chart</title>
    <link rel="stylesheet" href="index.css" />
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
	// cerrar conexión de base de datos
	//mysqli_close( $conexion );
	
	?>
  <BR>
  GRAFICA - 
  <BR>
    <div id="chartdiv"></div>
    <script src="../../../core.js"></script>
    <script src="../../../charts.js"></script>
    <script src="../../../themes/animated.js"></script>
    <script src="index.js"></script>
	<script>

	</script>
	<script>
			am4core.useTheme(am4themes_animated);

var chart = am4core.create("chartdiv", am4charts.XYChart3D);


chart.data = [
<?php 
$consultag = "select YEAR(fecha_escala), count(*) as cuentag, riesgo_des from tbl_riesgos group by YEAR(fecha_escala), riesgo_des";
$resultadog = mysqli_query( $conexion, $consultag ) or die ( "Error en la Consulta a la BD o Tabla");

while ($columnag = mysqli_fetch_array( $resultadog ))
	{	?>
{
	"Descriptor": "<?php echo $columnag['riesgo_des'] ?>",
	"Cantidad": <?php echo $columnag['cuentag'] ?>
		}, 
	<?php	} ?>
];

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "Descriptor";
categoryAxis.renderer.minGridDistance = 60;
categoryAxis.renderer.grid.template.disabled = true;
categoryAxis.renderer.baseGrid.disabled = true;
categoryAxis.renderer.labels.template.dy = 20;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.grid.template.disabled = true;
valueAxis.renderer.baseGrid.disabled = true;
valueAxis.renderer.labels.template.disabled = true;
valueAxis.renderer.minWidth = 0;

var series = chart.series.push(new am4charts.ConeSeries());
series.dataFields.categoryX = "Descriptor";
series.dataFields.valueY = "Cantidad";
series.columns.template.tooltipText = "{valueY.value}";
series.columns.template.tooltipY = 0;
series.columns.template.strokeOpacity = 1;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function (fill, target) {
    return chart.colors.getIndex(target.dataItem.index);
});

series.columns.template.adapter.add("stroke", function (stroke, target) {
    return chart.colors.getIndex(target.dataItem.index);
});

</script>
<br>
TABLA DE DATOS (Temporal)
<?php
	$consulta = "select YEAR(fecha_escala), count(*) as cuenta, riesgo_des from tbl_riesgos group by YEAR(fecha_escala), riesgo_des";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Error en la Consulta a la BD o Tabla");
	
   // Construccion de tabla
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Descriptor del Riesgo</th><th>Cantidad</th><th>A&ntilde;o</th>";
	echo "</tr>";
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['riesgo_des'] . "</td><td>" . $columna['cuenta'] . "</td><td>" . $columna['YEAR(fecha_escala)'] . "</td>";
		echo "</tr>";
	}
	echo "</table>"; // Fin de la tabla
	?>
  </body>
</html>