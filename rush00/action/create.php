<?php
	if ($_GET && $_GET['submit'] == 'OK' && $_GET['login'] != "" && $_GET['passwd'] != "") {
		$accounts = array();
		$new_arr['login'] = $_GET['login'];
		$new_arr['passwd'] = hash('sha256', $_GET['passwd']);

// add users "angela" and "dani" to admin_users and give them admin value of 1
i// any new users cannot have those usernames and will have default admin value of 0
		$admin_users = array("angela", "dani");
		$admin = 0;

		if (file_exists("../private/passwd")) {
			$file_content = unserialize(file_get_contents("../private/passwd"));
			$user_exists = 0;
			foreach ($file_content as $user) {
				if ($user['login'] == $_GET['login']) {
					$user_exists = 1;
					echo "ERROR\n";
				}
			}
			if ($user_exists != 1) {
				array_push($file_content, $new_arr);
				file_put_contents("../private/passwd", serialize($file_content));
				echo "OK\n";
			}
		}
		else {
			mkdir("../private", 0750);
			array_push($accounts, $new_arr);
			file_put_contents("../private/passwd", serialize($accounts));
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";
?>