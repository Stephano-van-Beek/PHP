<?php


$student = array(
    "voornaam"   => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );
  echo "<fieldset style='border: solid 1px; width:150px;'><legend> Informatie van student </legend>";
  foreach($student as $key => $value){
    echo "$key is $value <br>";
  }
  
?>