<?php 
	
	$marcasAnios = array(array("ford", "mercedes", "bmw"),$anios = array(1998, 1991, 2001));
	
	for ($i=0; $i < sizeof($marcasAnios[$i]) ; $i++) { 
		for ($j=0; $j < sizeof($marcasAnios[$j]); $j++) { 
			echo $marcasAnios[$i] . "<br>" . $marcasAnios[$j];
		}
	}
	

	

	
 ?>