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
	</body>
</html>