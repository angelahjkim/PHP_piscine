#!/usr/bin/php
<?php
function print_arr($arr) {
	for ($i = 0; $i < count($arr); $i++) {
			echo "$arr[$i]\n";
		}
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
	$sorted_arr = array();
	$arg_arr = array();
	if ($argc > 1) {
		$s = 0;
		for ($i = 1; $i < $argc; $i++) {
			$arg_arr = ft_split($argv[$i]);
			for ($j = 0; $j < count($arg_arr); $j++) {
				$sorted_arr[$s] = $arg_arr[$j];
				$s++;
			}
			unset($arg_array);
		}
	}
	sort($sorted_arr);
	print_arr($sorted_arr);
?>