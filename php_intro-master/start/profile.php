<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<?php require_once('assets/partials/nav.php'); ?>
	<h1>Profiles</h1>
	<hr>
	<table>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>GENRE</th>
		</tr>
		<?php
		$d = file_get_contents('assets/data.json');
		$d = json_decode($d,true);
		print_r($d);
		
		foreach($d as $k => $v){
		echo"<tr> 
		     <td> $k <td> 
		     <td>"$v['name']"<td> 
		     <td>"$v['genre']"<td> 
		     <tr>";
			}
			
		?>
	</table>
	<hr>
	<?php require_once('assets/partials/footer.php'); ?>
</body>
</html>