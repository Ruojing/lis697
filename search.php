<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="screen.css" />
<style>
table {
	border-collapse: collapse;
	margin: 10px;
}
table, tr, th, td {
	border: 1px solid #000;
}
</style>
</head>
<body>
<form method="get" action="result.php">
	<fieldset>
		<legend>Search for a tutor</legend>
		<label for="subject">Subject:</label>
		<input type="text" name="subject" required><br> 
		<input type="submit" name="submit">
	</fieldset>
</form>


</body>
</html>