<?php
	if ($_POST && $_POST['submit'] == 'OK' && $_POST['login'] != "" && $_POST['passwd'] != "") {
		$accounts = array();
		$new_arr['login'] = $_POST['login'];
		$new_arr['passwd'] = hash('sha256', $_POST['passwd']);

		if (file_exists("../private/passwd")) {
			$file_content = unserialize(file_get_contents("../private/passwd"));
			$user_exists = 0;
			foreach ($file_content as $user) {
				if ($user['login'] == $_POST['login']) {
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