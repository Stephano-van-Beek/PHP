<!DOCTYPE html><html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
table {
font-family: arial, sans-serif;
width: 100%;
}

td {
border: 1px solid #dddddd;
text-align: center;
padding: 8px;
}

</style>
</head>
<body>
<table>

<?php

for($i=1; $i<=10; $i++){
$result = $i * 13;
echo("<tr><td>$i</td><td>X</td><td>13</td><td>=</td><td>$result</td></tr>");
}

?>

</table>
</body>
</html