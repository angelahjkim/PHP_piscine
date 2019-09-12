#!/usr/bin/php
<?php
function print_arr($arr) {
	for ($i = 0; $i < count($arr); $i++) {
			echo "$arr[$i]\n";
		}
}
function ft_split($str) {
	$arr_unfiltered = explode(" ", $str);
	$arr_words = array_filter(array_map('trim', $arr_unfiltered));
	return($arr_words);
}
function cmp_words($word, $next_word) {
	$word_lowcase = strtolower($word);
	$next_lowcase = strtolower($next_word);
	$order_rule = "abcdefghijklmnopqrstuvqxyz0123456789!\"#$%&\'()*+,-./:;<=>?@{\]^_`{|}~";
	for ($i = 0; $i < min(strlen($word_lowcase), strlen($next_lowcase)); $i++) {
		if (strpos($order_rule, $word_lowcase[$i]) < strpos($order_rule, $next_lowcase[$i]))
			return (-1);
		else if (strpos($order_rule, $word_lowcase[$i]) > strpos($order_rule, $next_lowcase[$i]))
			return (1);
	}
}
	$sort_arr = array();

	if ($argc > 1)
	{
		foreach(array_slice($argv, 1) as $arg) {
			foreach(ft_split($arg) as $arg_word) {
				array_push($sort_arr, $arg_word);
			}
		}
	}
	usort($sort_arr, 'cmp_words');
	print_arr($sort_arr);
?>