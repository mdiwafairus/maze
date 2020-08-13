<?php

function maze ($n) {	

	for ($i=1; $i <=$n; $i++) { 
		for ($j=1; $j <= $n; $j++) { 
			if ($i == 1 && $j == 2) {
				echo " ";
			} elseif ($i == 5 && $j == 2) {
				echo " ";
			} elseif ($i == 9 && $j == 2) {
				echo " ";
			} elseif ($i == 13 && $j == 2) {
				echo " ";
			} elseif ($i == 3 && $j == 14) {
				echo " ";
			} elseif ($i == 7 && $j == 14) {
				echo " ";
			} elseif ($i == 11 && $j == 14) {
				echo " ";
			} elseif ($i == 15 && $j == 14) {
				echo " ";
			} elseif ($i%2 === 0 && $j != 1 && $j != 15) {
				echo "<span style='color:white;'>@</span>";
			} else {
				echo "@";
			}
		}
		echo "<br>";
	}

} 

maze(15);

?>