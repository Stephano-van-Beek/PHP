<html>
<body>

<form action="O7-Stephano.php" method="_GET">
Nummers: <input type="text" name="getallen"><br>
<input type="submit">
</form>



</body>
</html>

<?php
if (isset($_GET ['getallen']) ){
$arraygetallen = explode(",", $_GET['getallen']);
sort($arraygetallen);
$tell=count($arraygetallen);
for($x=0; $x < $tell; $x++){

echo $arraygetallen[$x];
echo",";
}
}
?>