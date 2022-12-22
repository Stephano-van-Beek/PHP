<?php

class Auto{
    public $merk;
    public $kleur; 
    public $type;
    public $uitvoering;
    public $brandstof;
}

$nieuweauto = new Auto();
$nogeennieuweauto= new Auto();

echo $nieuweauto-> merk = 'Volkswagen';
echo "<br>";
echo $nieuweauto-> kleur = 'rood';
echo "<br>";
echo $nieuweauto-> type = 'Golf';
echo "<br>";
echo $nieuweauto-> uitvoering = 'station';
echo "<br>";
echo $nieuweauto-> brandstof = 'benzine';

?>