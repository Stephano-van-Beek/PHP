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
$woonkamerLamp-> setStatus(true);

$keukenLamp->helderheid;
$keukenLamp-> setStatus(true);

$woonkamerLamp->kleur = 'rood';
echo $woonkamerLamp->kleur;
echo "<br>";
echo $woonkamerLamp-> helderheid = 'medium';
echo "<br>";
echo $woonkamerLamp-> setStatus(true);
echo "<br>";
echo "<br>";
$keukenLamp->kleur = 'groen';
echo $keukenLamp->kleur;
echo "<br>";
echo $keukenLamp-> helderheid = 'medium';
echo "<br>";
echo $keukenLamp-> setStatus(true);
?>