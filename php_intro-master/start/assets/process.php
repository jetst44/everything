<?php
$n = $_POST['fullName'];
$g = $_POST['genre'];
//echo $n;
//echo '<br>';
//echo $g;


$d = file_get_contents('data.json');
$d = json_decode($d, true);
//print_r($d["profile2 "]);


$c = count ($d);

echo $c;

$a = array(
	"name" => $n,
	"genre" => $g
);

$k = ++$c;

$d["profile$k "]=$a;


//$o = array ("profile$k " => $a);

$d = json_encode($d);
//print_r($o);
	

	file_put_contents('data.json', $d);


header('location:../profile.php');
?>