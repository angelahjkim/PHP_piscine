<?php
	if ($_POST['submit'] == "OK" && $_POST['login'] != "" && $_POST['newpw'] != "") {
		if (file_exists("../private/passwd")) {
			$old_pass = hash('sha256', $_POST['oldpw']);
			$new_pass = hash('sha256', $_POST['newpw']);
			$old_pass_match = 0;
			$user_exists = 0;
			$file_content = unserialize(file_get_contents("../private/passwd"));
			$account_index = 0;
			$i = 0 ;
			foreach($file_content as $account) {
				if ($account['login'] == $_POST['login']) {
					$user_exists = 1;
					if ($account['passwd'] == $old_pass) {
						$old_pass_match = 1;
						$account_index = $i;
					}
				}
				$i++;
			}
			if ($user_exists == 0 || $old_pass_match == 0)
				echo "ERROR\n";
			elseif ($user_exists && $old_pass_match) {
				$file_content[$account_index]['passwd'] = $new_pass;
				file_put_contents("../private/passwd", serialize($file_content));
				echo "OK\n";
			}
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
