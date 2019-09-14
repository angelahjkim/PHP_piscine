<?php
	if ($_SERVER['PHP_AUTH_USER'] != 'zaz' && $_SERVER['PHP_AUTH_PW'] != 'Ilovemylittleponey') {
		header ('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
		header ("HTTP\ 1.0 401 Unauthorized");
		echo "<html><body>That area is accessible for members only</body></html>\n";
		exit ;
	}
	else {
		$img_file = file_get_contents("img/42.png");
		$img_base64_str = base64_encode($img_file);
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,$img_base64_str'>\n</body></html>\n";
	}
?>