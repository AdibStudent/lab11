<?php
require_once('chart_lib/jpgraph/src/jpgraph.php');
require_once('chart_lib/jpgraph/src/jpgraph_bar.php');

$data = [15000, 10000, 5000, 7000, 3000];
$labels = ["Shopping", "Food", "Accommodation", "Transport", "Others"];

$graph = new Graph(600, 400);
$graph->SetScale('textlin');

$bar = new BarPlot($data);
$bar->SetFillColor("orange");

$graph->Add($bar);
$graph->xaxis->SetTickLabels($labels);
$graph->title->Set("Domestic Visitor Expenditure (Bar Chart)");

$graph->Stroke();
?>
