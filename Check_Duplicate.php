
<?php
	$angka=array(1,1,2,3,4,5,6,7,8);
	for($i=0; $i < count($angka); $i++){
		for($j=$i+1; $j<count($angka); $j++){
			if($angka[$i]==$angka[$j]){
				$unik[] = ('TRUE');
				echo($unik[0]);
				multi_unique($unik);

				}
		}
	}

	for($i=0;$i< count($angka); $i++){
		$b = 0;
		for($j=0;$j<count($angka); $j++){
			
			if($angka[$i] == $angka[$j]){
				$b += 1;
			}
		}
		if($b == 1){
			$x[]='FALSE';
			echo($x[0]);
			multi_unique($unik);
		}
	}
	
?>
