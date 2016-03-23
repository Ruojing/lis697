<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
</head> 
<body> 
<?php

echo "<h1>Challenge: Book Lists</h1>";

$BookData = array(
	array('Title' => "PHP and MySQL Web Development", 'First Name' => "Luke", 'Last Name' => "Welling", 'Number Of Pages' => "144", 'Type' => "Paperback", 'Price' => "31.63"),
	array('Title' => "Web Design with HTML, CSS, JavaScript and jQuery", 'First Name' => "Jon", 'Last Name' => "Duckett", 'Number Of Pages' => "135", 'Type' => "Paperback", 'Price' => "41.23"),
	array('Title' => "PHP Cookbook: Solutions & Examples for PHP Programmers", 'First Name' => "David", 'Last Name' => "Sklar", 'Number Of Pages' => "14", 'Type' => "Paperback", 'Price' => "40.88"),
	array('Title' => "JavaScript and JQuery: Interactive Front-End Web Development", 'First Name' => "Jon", 'Last Name' => "Duckett", 'Number Of Pages' => "251", 'Type' => "Paperback", 'Price' => "22.09"),
	array('Title' => "Modern PHP: New Features and Good Practices", 'First Name' => "Josh", 'Last Name' => "Lockhart", 'Number Of Pages' => "7", 'Type' => "Paperback", 'Price' => "28.49"),
	array('Title' => "Programming PHP", 'First Name' => "Kevin", 'Last Name' => "Tatroe", 'Number Of Pages' => "26", 'Type' => "Paperback", 'Price' => "28.96"),
);


//$style = 'style="background-color: gray;"' ; ?
echo "<table border=\"1\">";
  echo "<tr$style>"; 
    echo "<td>Title</td>";
    echo "<td>First Name</td>"; 
    echo "<td>Last Name</td>";
    echo "<td>Number of Pages</td>";
    echo "<td>Type</td>";
    echo "<td>Price</td>";
  echo "</tr>";

foreach ($BookData as $id => $cell) {
echo "<tr>";
	print '<td>'.$BookData[$id]['Title'].'</td>';
	print '<td>'.$BookData[$id]['First Name'].'</td>';
	print '<td>'.$BookData[$id]['Last Name'].'</td>'; 
	print '<td>'.$BookData[$id]['Number Of Pages'].'</td>';
	print '<td>'.$BookData[$id]['Type'].'</td>';
	print '<td>'."$".$BookData[$id]['Price'].'</td>';
echo "</tr>";
}
echo "</table><p></p>";

$sumPrice = $BookData[0]['Price']+$BookData[1]['Price']+$BookData[2]['Price']+$BookData[3]['Price']+$BookData[4]['Price']+$BookData[5]['Price'];


echo "Your total price is $".$sumPrice;


/* 
Challenge 2
*/

echo "<h1>Challenge: Coin Toss - Part C</h1>";

coinTossC (8);


function coinTossC ($coin){

global $flipCount;
global $headCount;
$headCount = 0;
$flipCount = 0;

while ($headCount <$coin) {
	
$flip = mt_rand(0,1);
	
	if ($flip == 1) {
	echo "<img src ='http://www.coinnews.net/wp-content/uploads/2009/11/America-the-Beautiful-Quarters-Obverse-sm.jpg' width=50>";
	$flipCount ++; $headCount ++;
}
	else {
	echo "<img src ='http://www.thecoinspot.com/25c/1988%20Type%202%20Clad%20Washington%20Quarter%20Reverse.png' width=50>"; 
	$headCount = 0;

	$flipCount ++;}
	
}
}

echo "<br>";
echo "<p>Flip $headCount heads in a row, in $flipCount flips!</p>";


?>

</body> 
</html>