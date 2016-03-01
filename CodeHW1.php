<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
</head> 
<body> 
<?php

/* Challenge #1
*/

echo "<h1>Challenge: Correct Change</h1>";

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

/* Challenge #2
*/

echo "<h1>Challenge: 99 Bottles of Beer</h1>";

for ($count = 99; $count >= 1; --$count)
{
	echo "$count bottles of beer on the wall, $count bottles of beer!";
	echo "<br>";
	$count2 = $count - 1;
	echo "Take one down, pass it around, $count2 bottles of beer on the wall.";
	echo "<br>";
}

/* Challenge #2a
*/

echo "<h1>Challenge: 4 Bottles of Beer</h1>";

$input = 4;

for ($count = $input; $count >= 1; --$count)
{
	echo "$count bottles of beer on the wall, $count bottles of beer!";
	echo "<br>";
	$count2 = $count - 1;
	echo "Take one down, pass it around, $count2 bottles of beer on the wall.";
	echo "<br>";
}


?>

</body> 
</html>