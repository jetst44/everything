<?php session_start(); ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title> My first web app </title>
</head>

<body>
	<?php  require_once('nav.php'); ?>

	<h1>Profile</h1>
	<?php
	echo $_SESSION['n'];
	echo <'br'>;
	echo $_SESSION['l'];
	echo <'br'>;
	echo $_SESSION['g'];
	?>
		<footer>
			<a href="index.php">Home</a>!<a href="profile.php">Profile</a>!<a href="logout.php">Logout</a>
		</footer>

</body>

</html>
