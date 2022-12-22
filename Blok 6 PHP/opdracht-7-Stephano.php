<?php


class Lamp{
    public $kleur;
    public $helderheid; 
    private $isAan;
    private $status;
    public function setStatus($status){
        $this->status = 'status';
    }
}

$woonkamerLamp= new Lamp();
$keukenLamp= new Lamp();

$woonkamerLamp-> helderheid;
$woonkamerLamp-> setStatus;

$keukenLamp->helderheid;
$keukenLamp-> setStatus;

echo $woonkamerLamp-> kleur = 'rood';
echo "<br>";
echo $woonkamerLamp-> helderheid = 'medium';
echo "<br>";
echo $woonkamerLamp-> setStatus;;
echo "<br>";
echo "<br>";
echo $keukenLamp-> kleur = 'groen';
echo "<br>";
echo $keukenLamp-> helderheid = 'medium';
echo "<br>";
echo $keukenLamp-> setStatus;
?>