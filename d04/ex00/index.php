<?php
	session_start();
	if ($_GET && $_GET['submit'] == "OK") {
		$_SESSION['user'] = $_GET['login'];
		$_SESSION['pass'] = $_GET['passwd'];
	}
?>
<html><body>
<form action="index.php" method="GET">
	Username: <input type="text" name="login" value="<?php if ($_SESSION) echo $_SESSION['user'] ?>" />
	<br />
	Password: <input type="password" name="passwd" value="<?php if ($_SESSION) echo $_SESSION['pass'] ?>" />
	<input type="submit" name="submit" value="OK" />
</form>
</body><html>