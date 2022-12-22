<?php

class Robot{
    public $naam;
    private $sound;
    public $voortstuwing;


public function setSound($sound){
     $this->sound=$sound;
 }
public function getSound(){
    return $this->sound;
}
}

$wally   = new Robot();
$wally->naam="Wally";
$wally->getSound="Bam";
$wally->voortstuwing="5";


echo "Ik heet: ". $wally->naam. "<br>";
echo "Ik doe dit geluid:".$wally->getSound. "<br>";
echo "Deze robot heeft voortstuwing: ".$wally->voortstuwing . "<br>" . "<br>";


$wolly = new Robot();
$wolly->naam="Wolly";
$wolly->getSound="Boink";
$wolly->voortstuwing="9"; 

echo "Ik heet : ".$wolly->naam. "<br>";
echo "Ik doe dit geluid: ".$wolly->getSound. "<br>";
echo "Deze robot heeft voortstuwing: ".$wolly->voortstuwing. "<br>";

?>