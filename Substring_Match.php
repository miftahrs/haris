<!DOCTYPE html>
<html>
<body>

	<form method="POST" action="?">
		<table>
			<tr>
				<th>First : </th>
				<td><input type="text" name="o"
					<?php
					if (isset($_POST['o']) && isset($_POST['p'])) {
						echo 'value="'.$_POST['o'].'"';
					}
					?>
					></td>
				</tr>
				<tr>
					<th>Second : </th>
					<td><input type="text" name="p"
						<?php
						if (isset($_POST['o']) && isset($_POST['p'])) {
							echo 'value="'.$_POST['p'].'"';
						}
						?>
						></td>
					</tr>
					<tr>
						<th></th>
						<td><input type="submit" value="Submit"></td>
					</tr>
				</table>
			</form>


			<?php

			if (isset($_POST['o']) && isset($_POST['p'])) {
				$o = $_POST['o'];
				$p = $_POST['p'];
				$q = 1;

				$x = strlen($o);
				$y = strlen($p);

				$a = str_split($o);
				$b = str_split($p);
				$c = array();

				for ($i=0; $i < $x ; $i++) {
					for ($j=0; $j < $y; $j++) {
						if ($a[$i] == $b[$j]) {
							$z = count($c);
							if($z == 0){
								array_push($c, $b[$j]);
							}
							for ($k = 0; $k < $z; $k++){
								if($a[$i] == $c[$k]){
									$q=1;
									break;
								}
								else{
									$q=0;
								}
							}
							if($q==0){
								array_push($c, $b[$j]);
								$q=1;
							}
						}
						else {
						}
					}
				}

				$z = count($c);
				echo "<br><br><i>Huruf yang sama : ";
				for ($i=0; $i < $z ; $i++) {
					echo $c[$i];
					if ($z == 2 && $i == $z-2 ){
						echo " dan ";
					}
					elseif ($i == $z-2 && $i != $z ){
						echo ", dan ";
					}
					elseif($i < $z-1){
						echo ", ";
					}
				}
				echo "</i>";
			}

			?>

</body>
</html>