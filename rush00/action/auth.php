<?php
	if ($_GET['signin'] == "LOGIN" && $_GET['login'] != "" && $_GET['passwd'] != "") {
		if (file_exists("../private/passwd")) {
			$pass = hash('sha256', $_GET['passwd']);
			$old_pass_match = 0;
			$user_exists = 0;
			$file_content = unserialize(file_get_contents("../private/passwd"));
			$account_index = 0;
			$i;
			foreach($file_content as $account) {
				if ($account['login'] == $_GET['login']) {
					$user_exists = 1;
					if ($account['passwd'] == $passwd) {
						$old_pass_match = 1;
						$account_index = $i;
					}
				}
				$i++;
			}
			if ($user_exists == 0 || $old_pass_match == 0)
				echo "Username does not exist or password is incorrect. Please try again.\n";
			}
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>