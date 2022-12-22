<table border=2>




<?php
$alleMaanden = array (
'Januari' => '1,4',
'Februari' => '2,5',
'Maart' => '4,7',
'April' => '8,2',
'Mei' => '12,3',
'Juni' => '43',
'Juli' => '16,9',
'Augustus' => '16,7',
'September' => '14,2',
'Oktober' => '10',
'November' => '5,5',
'December' => '2,7');



foreach($alleMaanden as $X=> $X_temp){
echo"<br>";
echo"<tr>";
echo"<td>$X</td>";
echo"<td>$X_temp</td>";
echo"</tr>";
};
echo "</table>";




?>7