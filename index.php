<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<?php
	$my_conn = new SQLite3('my_db.db'); // connection to db

$sql="SELECT * FROM student "; // Query to collect records

echo "<table>";
$results = $my_conn->query($sql);
while ($row = $results->fetchArray()) {
	echo "<tr ><td>$row[id]</td><td>$row[name]</td></tr>";
}
echo "</table>";
?>
Something is wrong with the XAMPP installation :-(
