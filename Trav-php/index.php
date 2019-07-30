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
		</div>
	</body>
</html>