<?php
	if ($_POST && $_POST['login'] && $_POST['passwd']) {
		$dir_path = '../private/passwd.txt';
		$account_arr = array();
		$new_arr = array();
		$new_arr['login'] = $_POST['login'];
		$new_arr['passwd'] = hash('sha256', $_POST['passwd']);
print_r($new_arr);
		if (file_exists($dir_path)) {
echo "NOT first time\n";
			$file_content = unserialize(file_get_contents($dir_path));
			array_push($file_content, $new_arr);
			file_put_contents($dir_path, serialize($file_content));
			echo "OK\n";
		}
		else {
echo "first time\n";
			mkdir($dir_path, 0777);
			file_put_contents($dir_path, serialize($new_arr));
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";
?>