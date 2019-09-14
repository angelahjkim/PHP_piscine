#!/usr/bin/php
<?php
	date_default_timezone_set("America/Los_Angeles");

	$handle = fopen("/var/run/utmpx", "r");
	$binary_data = "a256user/iid/a32tty/ipid/slogin-type/sunknown/itime/ims/a256host/iunknown";
	while ($record = fread($handle, 628))
	{
		$record_arr = unpack($binary_data, $record);
		if ($record_arr['login-type'] == 7) {
			echo $record_arr['user'];
			echo "   ";
			echo $record_arr['tty'];
			echo "  ";
			echo date("M", $record_arr["time"])." ";
			echo date("j", $record_arr["time"])." ".date("H:i", $record_arr["time"]);
			echo "\n";
		}
	}
?>