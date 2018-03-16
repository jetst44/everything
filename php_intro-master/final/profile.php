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
		$j = file_get_contents('assets/data.json');
		$d = json_decode($j, true);
		
		foreach($d as $k => $o){
			echo "<tr>
					<td>$k</td>
					<td>".$o['name']."</td>
					<td>".$o['genre']."</td>
				</tr>";
		}
	?>

	</table>
	<hr>
	<?php require_once('assets/partials/footer.php'); ?>
</body>
</html>