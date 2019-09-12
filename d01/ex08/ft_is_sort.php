<?php
function ft_is_sort($arr) {
	if (count($arr) > 0) {
		$sorted_arr = $arr;
		sort($sorted_arr);
		$flag = true;
		foreach ($sorted_arr as $key=>$value) {
			if ($value != $arr[$key])
				$flag = false;
		}
		return ($flag);
	}
}
?>