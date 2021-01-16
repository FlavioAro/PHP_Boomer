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
    <script>
am4core.useTheme(am4themes_animated);

var chart = am4core.create("chartdiv", am4charts.XYChart);


chart.colors.saturation = 0.4;

chart.data = [
  
  



<?php

include '../database/index.php'; // include Banco de dados

$sql = "SELECT Produto_Nome, SUM(Valor_Total) AS Soma FROM Despesa GROUP BY Produto_Nome ORDER BY Soma ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "Data: " . $row["Data"]. " - Soma: " . $row["Soma"]. "<br>";
    echo '{ "country": "'.$row["Produto_Nome"].'", "visits": '.$row["Soma"].' },';
  }
}

$conn->close(); // Fechar conexão

?>


];


var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.minGridDistance = 20;

var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.maxLabelPosition = 0.98;

var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryY = "country";
series.dataFields.valueX = "visits";
series.tooltipText = "{valueX.value}";
series.sequencedInterpolation = true;
series.defaultState.transitionDuration = 1000;
series.sequencedInterpolationDelay = 100;
series.columns.template.strokeOpacity = 0;

// inicio Texto do Label //
var valueLabel = series.bullets.push(new am4charts.LabelBullet());
  valueLabel.label.text = "{valueX}";
  valueLabel.label.horizontalCenter = "left";
  valueLabel.label.dx = 10;
  valueLabel.label.hideOversized = false;
  valueLabel.label.truncate = false;
// fim Texto do Label //

chart.cursor = new am4charts.XYCursor();
chart.cursor.behavior = "panY";


// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function (fill, target) {
	return chart.colors.getIndex(target.dataItem.index);
});
</script>
  </body>
</html>