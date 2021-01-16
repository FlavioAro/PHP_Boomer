<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Boomer</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <div id="chartdiv"></div>
    <script src="core.js"></script>
    <script src="charts.js"></script>
    <script src="animated.js"></script>
    <!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.XYChart);
chart.padding(40, 40, 40, 40);

var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "network";
categoryAxis.renderer.minGridDistance = 1;
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.disabled = true;

var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;

var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryY = "network";
series.dataFields.valueX = "MAU";
series.tooltipText = "{valueX.value}"
series.columns.template.strokeOpacity = 0;
series.columns.template.column.cornerRadiusBottomRight = 5;
series.columns.template.column.cornerRadiusTopRight = 5;

var labelBullet = series.bullets.push(new am4charts.LabelBullet())
labelBullet.label.horizontalCenter = "left";
labelBullet.label.dx = 10;
labelBullet.label.text = "{values.valueX.workingValue.formatNumber('#.0as')}";
labelBullet.locationX = 1;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function(fill, target){
  return chart.colors.getIndex(target.dataItem.index);
});

categoryAxis.sortBySeries = series;
chart.data = [
    



    <?php

include '../database/index.php'; // include Banco de dados

$sql = "SELECT Produto_Nome, SUM(Valor_Total) AS Soma FROM Despesa GROUP BY Produto_Nome ORDER BY Soma ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "Data: " . $row["Data"]. " - Soma: " . $row["Soma"]. "<br>";
    //echo '{ "country": "'.$row["Produto_Nome"].'", "visits": '.$row["Soma"].' },';
    echo '{ "network": "'.$row["Produto_Nome"].'", "MAU": '.$row["Soma"].' },';
  }
}

$conn->close(); // Fechar conexão

?>


  ]



}); // end am4core.ready()
</script>
  </body>
</html>