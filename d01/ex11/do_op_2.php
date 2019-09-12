#!/usr/bin/php
<?php
function is_num($value) {
	for ($i = 0; $i < strlen($value); $i++) {
		if (!preg_match('/[0-9]/', $value[$i]))
			return (0);
	}
	return (1);
}
	$num_arr = array();
	if ($argc == 2) {
		$contains_letters = preg_match('/[a-zA-Z]+/', $argv[1]);
		if (!$contains_letters) {
			preg_match_all('/\d+/', $argv[1], $num_arr, PREG_PATTERN_ORDER);
			if (count($num_arr[0]) == 2 && is_num($num_arr[0][0]) && is_num($num_arr[0][1])) {
				if (strpos($argv[1], '+'))
					echo (int)$num_arr[0][0] + (int)$num_arr[0][1];
				else if (strpos($argv[1], '-'))
					echo (int)$num_arr[0][0] - (int)$num_arr[0][1];
				else if (strpos($argv[1], '*'))
					echo (int)$num_arr[0][0] * (int)$num_arr[0][1];
				else if (strpos($argv[1], '/'))
					echo (int)$num_arr[0][0] / (int)$num_arr[0][1];
				else if (strpos($argv[1], '%'))
					echo (int)$num_arr[0][0] % (int)$num_arr[0][1];
				echo "\n";
			}
			else
				echo "Syntax Error\n";
		}
		else
			echo "Syntax Error\n";
	}
	else
		echo "Incorrect Parameters\n";
?>