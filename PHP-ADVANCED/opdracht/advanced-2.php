<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<head>
    <style> 
   th, td{
        border: <?php echo $_POST["tabelrand"]?>px solid black;
        padding: <?php echo $_POST["celpadding"]?>px;
        background-color: <?php echo $_POST["achtergrondkleur"]?>;
        color:  <?php echo $_POST["tekstkleur"]?>;
    }
    </style>
</head>
<body>
<form action="advanced-1.php" method="POST">
<table>
<tr>
    <th>Key</th>
    <th>Value</th>
</tr>
<?php
    $student = array("Naam"=>"Stéphano",
                     "Klas"=>"1A", 
                     "Leeftijd"=>"19", 
                     "Woonplaats"=>"Lelystad", 
                     "Muzieksmaak"=>"Remix", 
                     "Sport"=>"Hockey");

    function maakRij($sleutel, $waarde){ 
        echo "<tr>";
        echo "<td>$sleutel</td>";
        echo "<td>$waarde</td>";
        echo "</tr>";
     } 

 foreach($student as $key => $value){
     maakRij($key, $value);
}
?>
</table>
</form>
</body>
</html>


