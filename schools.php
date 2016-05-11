<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="screen.css" />

</head>
<body>

<img src="logo.png" width="100" alt="logo">
<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_GET['school_name'])) {
	$school = sanitizeMySQL($conn, $_GET['school_name']);
	$query = "SELECT tutor_id,firstname,lastname,school_name FROM tutors NATURAL JOIN schools WHERE school_name LIKE '%$school%'";
	$result = $conn->query($query);
	if (!$result) {
			die ("Database access failed: " . $conn->error);
		} else {
			$rows = $result->num_rows;
			if ($rows) {
				echo "<h2>Search term: ".$_GET['school_name']."</h2>
				<table class=center><tr><th>Tutor</th><th>School</th>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td><a href=profile.php?tutor_id=".$row["tutor_id"].">".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["school_name"]."</a></td>";
					echo "</tr>";
				}
				echo "</table>";
			} else {
				echo "<p>No results!</p>";
			}
			echo "<br><h3><a href=\"home.php\">New Search</a></h3>";
		}
}


function sanitizeString($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}
function sanitizeMySQL($connection, $var)
{
	$var = $connection->real_escape_string($var);
	$var = sanitizeString($var);
	return $var;
}
?>
</body>
</html>