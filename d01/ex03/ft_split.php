<?php
function ft_split($str) {
	$arr = array();
	if (strlen($str) != 0) {
		$str = trim($str);
		$str = preg_replace('/ +/', ' ', $str);
		if (strlen($str) > 0 && $str[0] != ' ') {
			$arr = explode(" ", $str);
			sort($arr);
		}
	}
	return($arr);
}
?>