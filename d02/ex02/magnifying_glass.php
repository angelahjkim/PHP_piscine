#!/usr/bin/php
<?php
	$file_str = file_get_contents($argv[1]);
	$file_str = preg_replace_callback(
		'/(?<=title=")(.)*?(?=("))/',
		function ($matches) {
			return strtoupper($matches[0]);
		},
		$file_str);
	$file_str = preg_replace_callback(
		'/<a .*?>(.*?)</s',
		function ($matches) {
			return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
		},
		$file_str);
	$file_str = preg_replace_callback(
		'/<div .*?>(.*?)</',
		function ($matches) {
			return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
		},
		$file_str);

	$file_str = preg_replace_callback(
		'/(?<=<a )(.|\n)*?(?="\n<")/',
		function ($matches) {
			return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
		},
		$file_str);
	$file_str = preg_replace_callback(
		'/<span>.*?(.*?)</',
		function ($matches) {
			return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
		},
		$file_str);
	echo "$file_str\n";
?>