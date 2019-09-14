#!/usr/bin/php
<?php
	if ($argc > 1) {
		$sentence = $argv[1];
		$sentence = preg_replace('/\s+/', ' ', trim($sentence));
		echo "$sentence\n";
	}
?>