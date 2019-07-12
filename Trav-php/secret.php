<!DOCTYPE html>
<html>
	<head>
		<title>Travail php</title>
	</head>
	<body>
			<?php
			$login = $_POST['login'];
			$password = $_POST['password'];

			if(isset($login) && isset($password) && $password == 'faniahy')
			{
			?>
				<p>Bienvenue vous ête un utilisateur</p>
			<?php
			}
			else
			{
				echo '<p>Mot de passe incorrect</p>';
			}
			?>
	</body>
</html>