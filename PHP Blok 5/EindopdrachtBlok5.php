<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
<?php
$antwoord= "leeg";
$ceu = array(
    "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
    "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
    "Poland"=>"Warsaw") ;
asort($ceu);
$random = array_rand($ceu);

echo"What is the capital of $random";
echo"<br>";
?>

<select name="antwoord">
 
 <?php
 foreach ($ceu as $land => $hoofdstad){
    echo "<option><li>" . $hoofdstad . "</li></option>";
        }
?>

  </select>
<input type="submit" value="Check">

<input value="<?php echo $random?>" type="hidden" name="land">

  <?php 
  if (isset($_GET["land"])){
      $land = $_GET["land"];
  }
    if (isset($_GET["antwoord"])){
      $antwoord = $_GET["antwoord"];
      
    if ($antwoord == $ceu[$land]){
      
     echo "<br> The Capital of " . $land . " is " . $ceu[$land] . ", Jouw antwoord is correct."; 
    }
    else {
     echo "<br> The Capital of " . $land . " is " . $ceu[$land] . ", Jouw antwoord is incorrect."; 
    } 
} 
?>
</form>