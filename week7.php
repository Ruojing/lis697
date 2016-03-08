<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
</head> 
<body> 
<?php

$name = "Ruojing, Jo, Zhang";

echo substr($name, 0, 7);
echo "<br>";
echo substr($name, 9, 2);
echo "<br>";
echo strtoupper (substr ($name, 9,2));
echo "<br>";
echo str_shuffle ($name);

?>

</body> 
</html>