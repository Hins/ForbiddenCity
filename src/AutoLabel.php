<?php

include_once "Config.php";

$file = fopen(DATADIRECTORY."TrainData","r");
$featureSet = array();
$musicAverage = 0.0;
$movieAverage = 0.0;
$bookAverage = 0.0;

while(!feof($file))
{
	$featureLine = fgets($file);
	$features = explode(" ", $featureLine);
	$size = count($features);
	$featuresNew = array();
	for ($i = 0; $i < 30; $i++)
	{
		array_push($featuresNew, array_pop($features));
	}
	$featuresNew = array_reverse($featuresNew);
	$musicAverage += intval($featuresNew[15]);
	$movieAverage += intval($featuresNew[18]);
	$bookAverage += intval($featuresNew[21]);
	array_push($featureSet, $featuresNew);
}
$musicAverage /= count($featureSet);
$movieAverage /= count($featureSet);
$bookAverage /= count($featureSet);

$outFile = fopen(DATADIRECTORY."Classification.txt", "w");
$featureFile = fopen(DATADIRECTORY."RefineFeature.txt", "w");
foreach($featureSet as $arr)
{
	$counter = 0;
	if (intval($arr[15]) > $musicAverage)
	{
		$counter++;
	}
	if (intval($arr[18]) > $movieAverage)
	{
		$counter++;
	}
	if (intval($arr[21]) > $bookAverage)
	{
		$counter++;
	}
	if ($counter >= 2)
	{
		fwrite($outFile,"2\r\n");
	}
	/*elseif ($counter == 1)
	{
		fwrite($outFile,"1\r\n");
	}*/
	else
	{
		fwrite($outFile,"0\r\n");
	}
	fwrite($featureFile, implode(" ", $arr));
}
fclose($featureFile);
fclose($outFile);

fclose($file);
?>