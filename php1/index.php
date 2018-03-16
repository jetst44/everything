<?php session_start(); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>My first web app</title>
</head>

<body>
    <?php require_once('nav.php'); ?>

    <h1>Homepage</h1>
    <form action="process.php" method="post">
        First Name<br>
		<input type="text" name="firstName"  placeholder="eg: Jack">
        <br>
		<br>
		Last Name<br>
        <input type="text" name="lastName" placeholder="eg: Sparrow">
        <br>
		<br>
		Gender
		<br>
        <input type="radio" name="gender" value="Male">Male
        <br>
        <input type="radio" name="gender" value="Female">Female
        <br>
		<input type="radio" name="gender" value="Attack Helicopter">Attack Helicopter
        <br>
		<br>
        <input type="submit" value="submit">
    </form>


    <?php require_once('footer.php'); ?>
</body>

</html>