Prueba técnica 
En una IPS se establen 4 tipos de nivel de riesgo que puede tener un paciente (Biológico, Individual , Entorno y Controlado) donde cada uno de estos posibles riesgos tiene una categoría dependiendo de su nivel (Bajo, Medio, Alto).
Generar un módulo de visualización dinámico codificado en typescript sobre angular utilizando la librería amcharts (https://www.amcharts.com/).
La grafica dinámica debe responder a 4 listas desplegables las cuales tomaran las categorías especificas a continuación:
año = [2018, 2019];
sede = [categorías encontradas en el documento adjunto];
riesgo_total = [Biológico, Controlado, Entorno, Individual];
riesgo_total_data= [Alto, Medio, Bajo];
El resultado esperado debe corresponder a una gráfica en el tiempo en la que se pueda visualizar los 12 meses del año en X y el porcentaje de personas por cada uno de los niveles de riesgo para el eje Y según los filtros seleccionados para esto se recomienda usar el tipo de grafica https://www.amcharts.com/demos/partitioned-bar-chart/ haciendo las modificaciones correspondientes para dar solución al ejercicio.
Para la selección de la data en cada uno de los filtros realizados se debe hacer la carga del documento entregado en una base de datos para su futura lectura. Se recomienda usar http response en Python para este proceso de consulta a la base de datos y generar la respuesta al frontend en Angular.


MySql
data_amcharts
id;fecha_escala;tdocumento;iddocumento;sede;riesgo_total;riesgo_total_data
select * from tbl_riesgos


968984 
pRUEBApOWERBI+20
tvw14035@bcaoo.com
PruebaPowerbi+20

https://app.powerbi.com/view?r=eyJrIjoiODE0YmIyOGEtNThiZi00MDRhLWEwOTEtNWFhM2I2OTllNjhjIiwidCI6ImUxNjg3ZTY3LTBkODMtNGNhNS04OGVmLWQ0ODZlODljZmRmZCJ9