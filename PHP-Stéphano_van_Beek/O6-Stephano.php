<html>
<body><form action="O6-Stephano.php" method="_GET">
Nummers: <input type="text" name="getallen"><br>
<input type="submit">
</form></body>
</html><?php
if (isset($_GET ['getallen']) ){
$arraygetallen = explode(",", $_GET['getallen']);
$alf=array_sum($arraygetallen);
$kri=count($arraygetallen);
$gemiddelde=array_sum($arraygetallen)/ count($arraygetallen);echo "Aantal ingevoerde getallen:$kri";
echo"<br>";
echo "Totaal van alle getallen: $alf";
echo"<br>";
echo"Gemiddelde van alle getallen: $gemiddelde";
}
?>

