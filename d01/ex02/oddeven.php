#!/usr/bin/php
<?php
while (1) {
	echo "Enter a number: ";
	$input = trim(fgets(STDIN));
	if (feof(STDIN)) {
		echo "\n";
		exit ;
	}
	else if (!is_numeric($input)) {
		echo "'$input' is not a number\n";
	}
	else if ($input % 2 == 0) {
		echo "The number $input is even\n";
	}
	elseif ($input % 2 == 1) {
		echo "The number $input is odd\n";
	}
}
?>