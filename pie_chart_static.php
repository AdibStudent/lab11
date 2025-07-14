<?php
require_once('chart_lib/jpgraph/src/jpgraph.php');
require_once('chart_lib/jpgraph/src/jpgraph_pie.php');

$data = [15000, 10000, 5000, 7000, 3000];
$labels = ["Shopping", "Food", "Accommodation", "Transport", "Others"];

$graph = new PieGraph(600, 400);
$graph->title->Set("Domestic Visitor Expenditure (Pie Chart)");

$pie = new PiePlot($data);
$pie->SetLegends($labels);

$graph->Add($pie);
$graph->Stroke();
?>
