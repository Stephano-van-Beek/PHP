<?php
include "eindopdracht-resultaat-Stephano.php";
?>

<!DOCTYPE html>
<html>
<head>
<style>



* {
  box-sizing: border-box;
}

.welkom_text{
    background-color: #ff0000;
}

body {
  background-color: white;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 14px;
  border: 2px blue;
  border-radius: 6px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color: black; 
}

input[type=submit]:hover {
  background-color: white;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 14px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  float: right;
}

.container {
  border-radius: 6px;
  background-color: black;
  padding: 25px;
}

.col-25 {
  float: left;
  width: 70%;
  margin-top: 7px;
  border: 1px solid;
  border-radius: 6px;
  background-color: #ff0000;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 7px;
  border: 1px solid;
  background-color: gray;
}





@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>.
</head>
<body>
<center>
<h2 class="welkom_text">Reisadvies</h2>
</center>

<div class="antwoord">
<?php
if (isset($_POST['Submit'])){
echo $message;
}
?>
  <br>
  Rijzen met de scooter duurt:
  <?php
  if (isset($_POST['Submit'])){
  echo $tijdscooter;
  }
  ?>
  min lang
  <br><br>
  Rijden met de fiets duurt:
  <?php
  if (isset($_POST['Submit'])){
  echo $tijdFiets;
  }
  ?>
  min lang
  
</div>
<?php
?>
<div class="container">
<form method="POST">
  <div class="row">
    <div class="col-25">
      <label for="a">lengte in km</label>
    </div>
    <div class="col-75">
      <input type="text" id="a" name="lengte" placeholder="voer het aantal km">
      <label for="a">vertraging door file (in minuten)</label>
      <input type="text" id="a" name="vertraging" placeholder="aantal min vertraging door file">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="b">fiets</label>
    </div>
    <div class="col-75">
      <input type="text" id="b" name="bandenspanning_fiets" placeholder="Bandenspanning Fiets">
      <input type="radio" id="b" name="soort_fiets" value="15">Niet Elektrische (fietssnelheid = 15km/u) 
      <br>
      <input type="radio" id="b" name="soort_fiets" value="25"> Elektrische (fietssnelheid = 25km/u)
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="scooter">Snor / Bromfiets</label>
    </div>
    <div class="col-75">
    <label for="c">bandenspanning (in%):</label>
    <input type="text" id="c" name="bandenspanning_scooter" placeholder="bandenspanning Scooter">
    <br>
    <label for="c">snelheid:</label>
      <select id="scooter soort" name="scooter_soort">
        <option value="25">25 KM/u (Snorfiets)</option>
        <option value="45">45 KM/u (Bromfiets)</option>
      </select>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" name='Submit'>
  </div>
  </form>
</div>



</body>
</html>