<!DOCTYPE html>
<html>
<body>



<?php
$places = array(
"Tokyo" => "Japan",
"Mexico City" => "Mexico",
"New York City" => "USA",
"Mumbai" => "India",
"Seoul" => "Korea",
"Shanghai" => "China",
"Lagos" => "Nigeria",
"Buenos Aires" => "Argentina",
"Cairo" => "Egypt",
"London" => "UK");




foreach($places as $x => $x_value) {
echo "De stad " . $x . " Is een grote stad in het land " . $x_value;
echo "<br>";
}
?>



</body>
</html>