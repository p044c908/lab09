<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table >";
for ($i = 0; $i <= 100; $i++) {
	echo "<tr>";
	for ($j = 0; $j <= 100; $j++) {
		if ($i == 0) {
			if ($j == 0) {
				echo "<th></th>";
			} else {
				echo "<th>" . $j . "</th>";
			}
		} else {
			if ($j == 0) { //multiply 1
				echo "<th>" . $i . "</th>";
			} else { //multiply
				echo "<td>" . $i*$j . "</td>";
			}
		}
	}
	echo "</tr>";
}
echo "</table>";

?>
