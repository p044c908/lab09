<?php

	echo "<link rel='stylesheet' href='style.css'>";

	echo "<p>Hello shopper. Your username is: " . $_POST["user"] . ". Happy shopping :)))<br>";
	echo "Your password is: " . $_POST["password"] . "</p>";

	$total = 0;
	$RT = 3;
	$name = [" ", "Quantity", "Cost per item", "Sub total"];
	$items = ["Item 1", "Item 2", "Item 3"];
	$cost = [2.00, 4.00, 6.00];
	echo "<h1>Receipt</h1><table>";
	for ($i=0; $i < $RT+3; $i++) {
		echo "<tr>";
		for ($j=0; $j < 4; $j++) {
			if ($i == 0) {
				echo "<th>" . name[$j] . "</th>";
			} else if ($i == ($RT+1)) {
				switch ($j) {
					case 0:
						echo "<th>Shipping</th>";
						break;

					case 1:
						if ($_POST["ship"] == 0) {
							$shipping = "Free";
						}
						if ($_POST["ship"] == 50) {
							$shipping = "Express";
						}
						if ($_POST["ship"] == 5) {
							$shipping = "Three Day";
						}
						echo "<td colspan=2>" . $shipping . "</td>";
						break;

					case 2:
						echo "<td>$" . number_format($_POST["ship"], 2) . "</td>";
						$total += $_POST["ship"];
						break;

					default:
						echo "";
						break;
				}
			} else if ($i == ($RT+2)) {
				if ($j == 0) {
					echo "<th colspan=3><center> Total Cost </center></th>";
				}

				if ($j == 3) {
					echo "<td>$" . number_format($total, 2) . "</td>";
				}
			} else {
				switch ($j) {
					case 0:
						echo "<th>" . $items[$i-1] . "</th>";
						break;

					case 1:
						echo "<td>" . $_POST["item" . $i] . "</td>";
						break;

					case 2:
						echo "<td>$" . number_format($cost[$i-1], 2) . "</td>";
						break;
						
					case 3:
						echo "<td>$" . number_format($_POST["item" . $i]*$cost[$i-1], 2) . "</td>";
						$total += $_POST["item" . $i]*$cost[$i-1];
						break;

					default:
						break;
				}
			}
		}
		echo "</tr>";
	}
	echo "</table";
?>
