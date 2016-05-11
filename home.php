<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="screen.css" />


</head>
<body>


<img src="logo.png" width="100" alt="logo">
<div class="center">
<form method="get" action="result.php">
	<fieldset>
		<legend>Search for a tutor</legend>
		<label for="subject">Subject:</label>
		<input type="text" name="subject" required><br> 
		<input type="submit" name="submit">
	</fieldset>
</form>

</div>



<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

// list of subjects
$query = "SELECT * FROM subjects";
$result = $conn->query($query);
if (!$result) die($conn->error);

echo "<div class=center> <h2>Popular subjects</h2> 
		<table>
		<tr>
		<th>Subjects</th>
		</tr>";
while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td> <a href=subjects.php?subject_name=".$row["subject_name"].">".$row["subject_name"]."</a></td>";
	echo "</tr>";
}
echo "</table></div>";

// list of schools
$query = "SELECT * FROM schools";
$result = $conn->query($query);
if (!$result) die($conn->error);

echo "<div class='center'> <h2>Our Partners</h2> <table>
		<tr>
		<th>Schools</th>
		</tr>";
while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td><a href=schools.php?school_name=".$row["school_name"].">".$row["school_name"]."</td>";
	echo "</tr>";
}
echo "</table></div>";




$result->close();
$conn->close();
?>
</body>
</html>