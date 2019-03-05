<?php 
echo "<pre>";
function isLeapYear($year)
{
	if ($year % 400 == 0) {
		return $year;
	} 

	if ($year % 100 == 0) {
		return $year;
	}

	if ($year % 4 == 0) {
		return $year;
	}
}
$years = range(1900,2019);

echo "List of leap year from 1900 to 2019";
foreach ($years as $year) {
	if (!empty(isLeapYear($year))) {
		echo $year . "<br>";
	}
}

