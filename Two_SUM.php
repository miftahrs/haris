
<?php
	$angka=array(1,2,3,4,5);
	$jumlah='6';
	for($i=0; $i < count($angka); $i++){
		$a=($angka[$i]);
		for($j=$i+1; $j<count($angka); $j++){
			if($a + $angka[($j)]==$jumlah){
				echo('output:'.$a.'dan'.$angka[$j]).'<br>';
			}
		}
	}
	
?>
