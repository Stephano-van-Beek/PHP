<?php

class Scooter{
    public $kleur;
    public $merk; 
    public $inhoudTank;

    public function checkInhoud(){
        if($this->inhoudTank == 0){
        echo 'tank is niet goed';
        }
        else{
            echo 'tank is goed';
        }
    }
}

$piago= new Scooter();
$peugeot= new Scooter();

 $piago-> kleur = 'rood';
 $piago-> merk = 'piago';
 $piago-> inhoudTank = '6';
 $piago-> checkInhoud();

echo "<br>";
 $peugeot-> kleur = 'zwart';
 $peugeot-> merk = 'peugeot';
 $peugeot-> inhoudTank = '7';
 $peugeot-> checkInhoud();
?>