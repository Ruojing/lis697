<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
</head> 
<body> 
<?php
echo "<h1>Challenge: ISBN Validation</h1>";

$isbn = "146830874X";

$a = substr($isbn, 0, 1); 
$b = substr($isbn, 1, 1);
$c = substr($isbn, 2, 1);
$d = substr($isbn, 3, 1);
$e = substr($isbn, 4, 1);
$f = substr($isbn, 5, 1);
$g = substr($isbn, 6, 1);
$h = substr($isbn, 7, 1);
$i = substr($isbn, 8, 1);
$j = substr($isbn, 9, 1);


echo "<p>Checking ISBN: $isbn for validity...</p>";


isbnVal ($a, $b, $c, $d, $e, $f, $g, $h, $i, $j); 

function isbnVal ($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) {
	$sum = (10 * $a) + (9 * $b) + (8 * $c) + (7 * $d) + (6 * $e) + (5 * $f) + (4 * $g) + (3 * $h) + (2 * $i) + (1 * $j);
	$remainder = $sum % 11;
	if ($j == "X" ) {$j = 10;}
	
	if ($remainder == 0)
	{ echo "<p>This is a valid ISBN!</p>";} 
	else { echo "<p>This is NOT a valid ISBN.</p>"; }
	return $remainder;
}

echo "<br>";
/* Challege 2 */

echo "<h1>Challenge: Coin Toss</h1>";

echo "<p>Flipping a coin 1 time...</p>"; 
coinToss (1);

echo "<p>Flipping a coin 3 times...</p>"; 
coinToss (3);

echo "<p>Flipping a coin 5 times...</p>"; 
coinToss (5);

echo "<p>Flipping a coin 7 times...</p>"; 
coinToss (7);

echo "<p>Flipping a coin 9 times...</p>"; 
coinToss (9);

function coinToss ($coinCount) {

$count = 1;

while ($count <= $coinCount) {
	
$flip = mt_rand(0,1);
	
	if ($flip == 1) {
	echo "<img src ='http://www.coinnews.net/wp-content/uploads/2009/11/America-the-Beautiful-Quarters-Obverse-sm.jpg' width=50>";
	
	$count ++; 
}
	else {echo "<img src ='http://www.thecoinspot.com/25c/1988%20Type%202%20Clad%20Washington%20Quarter%20Reverse.png' width=50>";
	
	$count ++;}
	
}
}

echo "<br>";
echo "<h1>Challenge: Coin Toss2</h1>";

$headCount = 0;
$flipCount = 0;

while ($headCount <2) {
	
$flip = mt_rand(0,1);
	
	if ($flip == 1) {
	echo "<img src ='coinhead.jpg' width=50>";
	$flipCount ++; $headCount ++;
}
	else {
	echo "<img src ='cointail.png' width=50>"; $headCount = 0;

	$flipCount ++;}
	
}
echo "<br>";
echo "<p>It took $flipCount flips!</p>";



?>

</body> 
</html>