<?php 
	
	$a = [6,1,1,6,2,3,5];
	
	
	$total = count($a);
	
	for($i=0;$i< $total; $i++){
		$b = 0;
		for($j=0;$j<$total; $j++){
			
			if($a[$i] == $a[$j]){
				$b += 1;
			}
		}
		if($b == 1){
			echo $a[$i]. ' ';
		}
	}
	
