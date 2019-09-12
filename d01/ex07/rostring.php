#!/usr/bin/php
<?php
function print_str($arr) {
	for ($i = 0; $i < count($arr); $i++) {
		echo "$arr[$i]";
		if ($i != count($arr) - 1) {
			echo " ";
		}
	}
	echo "\n";
}
function ft_split($str) {
	$arr = array();
	if (strlen($str) != 0) {
		$str = trim($str);
		$str = preg_replace('/ +/', ' ', $str);
		if (strlen($str) > 0 && $str[0] != ' ') {
			$arr = explode(" ", $str);
		}
	}
	return($arr);
}
	if ($argc > 1) {
		$arr = ft_split($argv[1]);
		$first = array_shift($arr);
		$arr[count($arr)] = $first;
		print_str($arr);
	}
?>