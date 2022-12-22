<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijnmuziek</title>
</head>
<body>

<?php
echo "Artiest is " . $_GET ["artiest"];
echo "<p>";
echo "Titel is " .$_GET ["titel"];
echo "<p>";
echo "Het jaar van uitkomst is " . $_GET ["Jaarvanuitkomst"];
echo "<p>";
echo "Deze track is van het muzieksoort " . $_GET ["Muzieksoort"];
?>

</body>
</html>
