<?php

class Computer{
    public $merk;
    public $hdd_capacity; 
    public $memory;
}

$nieuwecomputer = new Computer();
$nogeennieuwecomputer= new Computer();

echo $nieuwecomputer-> merk = 'MSI';
echo "<br>";
echo $nieuwecomputer-> hdd_capacity = '2T';
echo "<br>";
echo $nieuwecomputer-> memory = '16g (8x8)';



?>