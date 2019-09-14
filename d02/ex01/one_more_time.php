#!/usr/bin/php
<?php
	if ($argc == 2) {
		$month_list = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
		$day_list = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");

		$date_arr = strtolower($argv[1]);
		$date_arr = explode(" ", $date_arr);
		if (count($date_arr) != 5) {
			echo "Wrong Format\n";
			exit ;
		}
		$day = (int)$date_arr[1];
		$month = $date_arr[2];
		$month = array_search($month, $month_list);
		$day_name = $date_arr[0];
		if (!in_array($day_name, $day_list) || $month == false) {
			echo "Wrong Format\n";
			exit ;
		}
		else
			$month = (int)$month + 1;
		$year = (int)$date_arr[3];
		$year = $date_arr[3];

		$time_arr = explode(":", $date_arr[4]);
		$hour = (int)$time_arr[0];
		$min = (int)$time_arr[1];
		$sec = (int)$time_arr[2];

		if (count($time_arr) != 3 || !(strlen((string)$hour) < 3) || !(strlen((string)$min) < 3) || 
				!(strlen((string)$sec) < 3) || !(strlen((string)$hour) < 3) || !(strlen((string)$day) < 3) || !(strlen((string)$year) < 5) || 
				!($hour >= 0 && $hour < 24) || !($min >=0 && $min < 60) || !($sec >= 0 && $sec < 60) || !($day > 0 && $day < 32) || !($year > 1969)) {
			echo "Wrong Format\n";
			exit ;
		}

		$time_passed = mktime($hour - 1, $min, $sec, $month, $day, $year);
		echo "$time_passed\n";
	}
?>