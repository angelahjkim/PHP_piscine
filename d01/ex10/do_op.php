#!/usr/bin/php
<?php
function epur_str($str) {
	return ($new_str = preg_replace('/ +/', ' ', trim($str)));
}
	if ($argc == 4) {
		if (epur_str($argv[2]) == '+')
			echo (int)$argv[1] + (int)$argv[3];
		else if (epur_str($argv[2]) == '-')
			echo (int)$argv[1] - (int)$argv[3];
		else if (epur_str($argv[2]) == '*')
			echo (int)$argv[1] * (int)$argv[3];
		else if (epur_str($argv[2]) == '/')
			echo (int)$argv[1] / (int)$argv[3];
		else if (epur_str($argv[2]) == '%')
			echo (int)$argv[1] % (int)$argv[3];
		echo "\n";
	}
	else if ($argc != 4)
		echo "Incorrect Parameters\n";
?>