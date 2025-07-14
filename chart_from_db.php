<?php
require_once('chart_lib/jpgraph/src/jpgraph.php');
require_once('chart_lib/jpgraph/src/jpgraph_bar.php');
require_once('db_connect.php');

// Fetch data
$result = $con->query("SELECT * FROM expenditure");
$data = [];
$labels = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row['value'];
    $labels[] = $row['component'];
}

$graph = new Graph(600, 400);
$graph->SetScale("textlin");

$bar = new BarPlot($data);
$bar->SetFillColor("skyblue");

$graph->Add($bar);
$graph->xaxis->SetTickLabels($labels);
$graph->title->Set("Expenditure Components (From DB)");

$graph->Stroke();
?>
