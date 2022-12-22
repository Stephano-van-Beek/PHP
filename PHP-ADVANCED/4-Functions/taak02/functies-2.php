<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function rekenuit($getal1, $getal2, $getal3) {
    
    $uitkomst = $getal1+ $getal2+ $getal3;

    return $uitkomst;
}
$antwoord1= rekenuit(4,2,9);
$antwoord2= rekenuit(1,2,3);
$antwoord3= rekenuit(40,28,91);

echo    "Als ik de getallen 4,2 en 9 bij elkaar op tel,is de uitkomst $antwoord1";
echo "<br>";
echo    "Als ik de getallen 4,2 en 9 bij elkaar op tel,is de uitkomst $antwoord2";
echo "<br>";
echo    "Als ik de getallen 4,2 en 9 bij elkaar op tel,is de uitkomst $antwoord3";
?>
</body>
</html>