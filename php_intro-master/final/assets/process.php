<?php
$n = $_POST['fullName'];
$g = $_POST['genre'];

$j = file_get_contents('data.json');
$d = json_decode($j, true);

if (count($d) == 0){ $c = 1; }
else { $c = count($d) + 1; }

$k = "profile".$c;

$a = array(
	"name" => $n,
	"genre" => $g
);

$d[$k] = $a;

$j = json_encode($d);
file_put_contents('data.json', $j);

header('location:../profile.php');
?>