<?php
include_once('paczki.php');

$file = fopen("test_input.txt", "r") or die("Nie można otworzyć pliku!");
while(!feof($file)) {
  $datain[] = trim(fgets($file));
}
fclose($file);

// $datain = ['1x1x10','2x3x4'];

$paczka = new Paczki();
$sum = 0;
foreach ($datain as $in) {
	$out = $paczka->result($in);
	$sum += $out;
	echo "$in = $out\n";
}
echo "\nSUMA:$sum dm2\n";