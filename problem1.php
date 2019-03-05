<?php 
function checkPermutation(array $elements)
{
	sort($elements);
	$i = 0;
	if ($elements[$i] != 1) {
		return 'no';
	}

	while($i < (count($elements) - 1)) {
		if ($elements[$i] + 1 != $elements[$i + 1]) {
			return 'no';
		}
		$i++;
	}
	return 'yes';
}

$arr = [1,3,4,7,8];
echo 'Sample Array <br>';
print_r($arr);
echo "<br>";
var_dump(checkPermutation($arr));
echo "<br>";

$arr = [1,3,5,2,4];
echo 'Sample Array3 <br>';
print_r($arr);
echo "<br>";
var_dump(checkPermutation($arr));
