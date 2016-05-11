<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="screen.css" />
<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);


//list of timeslots

if (isset($_GET['tutor_id'])) { //check if the form has been submitted
	if (empty($_GET['tutor_id'])) {
		
	} 
	
	else {
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM tutors WHERE tutor_id=".$_GET['tutor_id'];
$result = $conn->query($query);
if (!$result) die($conn->error);

while ($row = $result->fetch_assoc()) {
echo "<h2>".$row["firstname"]." ".$row["lastname"]."</h2>";
}

$query = "SELECT * FROM timeslots NATURAL JOIN tutors WHERE tutor_id=".$_GET['tutor_id'];
$result = $conn->query($query);
if (!$result) die($conn->error);
echo "<h3>Availability</h3> <table class=center>
		<tr>
		<td>Date</td>
		<td>time</td>
		</tr>";
while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>".$row["date"]."</td><td>".$row["time"]."</td>";
	echo "</tr>";
}
echo "</table>";



}
}


//list of classroom
$query = "SELECT * FROM locations";
$result = $conn->query($query);
if (!$result) die($conn->error);


echo "<h3>Classroom locations</h3> <table class=center>
		<tr>
		<td>Classroom Name</td>
		<td>Classroom Address</td>
		</tr>";
while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>".$row["classroom"]."</td><td>".$row["street"]."<br>".$row["city"]."<br>".$row["zipcode"]."</td>";
	echo "</tr>";
}
echo "</table>";

$result->close();
$conn->close();
echo "<br><h3><a href=\"home.php\">New Search</a></h3>";

?>
</body>
</html>