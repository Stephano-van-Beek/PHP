<?php
echo "<table border='1'><br />";
for ($row = 0; $row < 12; $row ++) {
echo "<tr>";

for ($col = 1; $col <= 10; $col ++) {
echo "<td>".$col. "</td>";
}

echo "</tr>";
}

echo "</table>";