<?php

class Mens{
    public $voornaam;
    public $achternaam; 
    public $lengte;
    public $bloed;
}
class Student extends Mens{
    public $studentnummer;
    public $studentjaar;
}

class Atleet extends Mens{
    public $sponsor;
    public $medianes;
}

$bob = new Student();
$jan = new Atleet();

 echo $bob-> voornaam = 'Bob';
 echo "<br>";
 echo $bob-> achternaam = 'de bouwer';
 echo "<br>";
 echo $bob-> lengte = '180';
 echo "<br>";
 echo $bob-> bloed = 'O';
 echo "<br>";
 echo $bob-> studentnummer = '210952';
 echo "<br>";
 echo $bob-> studentjaar = '2022';
 echo "<br>";
 echo "<br>";
 echo $jan-> voornaam = 'Jan';
 echo "<br>";
 echo $jan-> achternaam = 'anders Man';
 echo "<br>";
 echo $jan-> lengte = '183';
 echo "<br>";
 echo $jan-> bloed = 'B';
 echo "<br>";
 echo $jan-> studentnummer = '250952';
 echo "<br>";
 echo $jan-> studentjaar = '2022';
 echo "<br>";
 echo $jan-> sponsor = 'Gfuel';
 echo "<br>";
 echo $jan-> medianes = '3';

?>
