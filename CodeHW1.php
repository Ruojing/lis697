<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
</head> 

<h1>Challenge: Correct Change</h1>
<body> 
<?php

$change = 246;

$dollar;
$quarter;
$dime;
$nickel;
$cent;

echo "You are due $change cents back in total!";

$dollar = (int) ( $change / 100 ); 
$quarter = (int) (( $change % 100 ) / 25);
$dime = (int) ( (( $change % 100 ) % 25) / 10);
$nickel = (int) (( ( ( $change % 100 ) % 25 ) % 10) / 5 );
$cent = (int) (((( ( $change % 100 ) % 25 ) % 10) % 5) / 1);

echo "<br>";

echo "Your change is: $dollar dollar(s), $quarter quarter(s), $dime dime(s), $nickel nickel(s), $cent cent(s)";



?>

</body> 
</html>