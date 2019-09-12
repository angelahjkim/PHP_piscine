#!/usr/bin/php
<?php
	if ($argc > 1) {
		$new_str = preg_replace('/ +/', ' ', trim($argv[1]));
	}
	echo "$new_str\n";
?>