<?php 
$numbers = file('numbers.txt');
$binaries = [];
print_r($numbers);
foreach ($numbers as $number) {
	echo "<br>";
	echo $number . " : " . decbin($number);
	$binaries[] = decbin($number);
}
echo " <br> Sum of all binaries : " . array_sum($binaries);
echo "<br>";
print_r($numbers);
