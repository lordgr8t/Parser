<?php 
function Parse($p1, $p2, $p3) {

	$num1 = strpos ($p1, $p2);
	if ($num1 === false) return 0;
	$num2 = substr($p1, $num1);
	return strip_tags(substr($num2, 0, strpos ($num2, $p3)));


}

$string = file_get_contents('https://musictape.000webhostapp.com/index.php');

echo Parse($string, '<div class="mainmw">', '</h1>');

?>

