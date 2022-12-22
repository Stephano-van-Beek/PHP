<?php

class Product{
    public $merk;
    public $kleur; 
    public $type;
    public $prijs;
}

$nieuweproduct = new Product();
$nogeennieuweproduct= new Product();

 $nieuweproduct-> merk = 'hema';

 $nieuweproduct-> kleur = 'rood';

 $nieuweproduct-> type = 'lang';

 $nieuweproduct-> prijs = '10';

 $nogeennieuweproduct-> merk = 'aegon';

 $nogeennieuweproduct-> kleur = 'grijs';

 $nogeennieuweproduct-> type = 'gfs505';

 $nogeennieuweproduct-> prijs = '50';

foreach($nieuweproduct as $key => $value){
    echo $value ."<br>";
}
echo "<br>";
foreach($nogeennieuweproduct as $key => $value){
    echo $value ."<br>";
}
?>