<!DOCTYPE html>
<html>
	<head>
		<title>Travail PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<p>Bienvenue Welcome!</p>
		<div>
			<p>Tapez votre Login et votre mot de passe</p>
			<form action="secret.php" method="post">
				<div>
					<label>Login</label>
					<input type="text" name="login">
				</div>
				<div>
					<label>Mot de passe</label>
					<input type="password" name="password">
				</div>
				<div>
					<input type="submit" name="valider" value="Valider">
				</div>
			</form>
		</div>
		<div>
			<!-- Code in Game /Apprendre PHP INTEGRATION HTML -->
				<select>
				<?php
					for($i=0;$i<=10;$i++){
						$char = "";
						if($i%2==0) $char=$i." "."pair";
						else $char=$i." "."impair";
						echo "					
							<option value='$i'>$char</option>
						";
					}
				?>
				</select>

			<!-- Code in Game /CoC PHP triangle -->	
			<?php 
				$N=2;
				
				for($i=0;$i<$N;$i++){

					/* Mode Inversé */
					/*for($j=$N;$j>$i;$j--){
						echo "$N";
					}*/

					/* Mode normal */
					for($j=0;$j<=$i;$j++){
						echo "$N";
					}
					echo "\n";
				}

				$n = 5;
				for ($i = 1; $i <= $n; $i++)
				{
					for ($k = $n; $k >= $i; $k--)
					{
						echo "*";
					}
				echo "\n";
				} 
			?>
		</div>
		<p>
			<?php 
				$N=100;
				$c=0;
				$r=1;
				for($i=1;$i<$N;$i++){
					if($i>$N){
						exit();
					}else{
						$i *= $i;
						echo "$i ";
					}
				}
			?>
		</p>
		<p>
			<?php
				/*for($i=1;$i<=10;$i++){
					for($j=1;$j<=$i;$j++){
						echo '$i $j = '." ".$i*$j;
					}
				}*/
			?> 
		</p>
		<p>
			<?php
				$S="DAMN hard ma poule";
				$input=explode(" ",$S);
				for($i=0;$i<sizeof($input);$i++){
				    //echo $input[$i];
				    $c=$input[$i];
				    if(!ctype_upper($c)){
				        $s=strlen($c);
				        echo "$s";
				    }
				}
			?>
		</p>
	</body>
</html>