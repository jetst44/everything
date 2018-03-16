<?php session_start();
$n = $_POST['firstName'];
$l = $_POST['lastName'];
$g = $_POST['gender'];
$_SESSION['n'] = $n;
$_SESSION['l'] = $l;
$_SESSION['g'] = $g;

$d = array("1" => array( "first name" => $n, 
                        "last name" => $l, 
                        "gender" => $g));

$d = json_encode($d);
file_put_contents('data.json', $d);

$j = file_get_contents('data.json');
$j = json_decode($j, true);

header('location:profile.php');

?>
