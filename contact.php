<!-- contact.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Contact - Mon site web</title>
</head>
<body>
	<header>
		<h1>Mon site web</h1>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="articles.php">Articles</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Contact</h2>
		<form method="post" action="traitement.php">
			<label for="nom">Nom :</label>
			<input type="text" id="nom" name="nom" required><br><br>
			<label for="email">Email :</label>
			<input type="email" id="email" name="email" required><br><br>
			<label for="message">Message :</label>
			<textarea id="message" name="message" required></textarea><br><br>
			<input type="submit" value="Envoyer">
		</form>
	</main>
	<footer>
		<p>Tous droits réservés.</p>
	</footer>
</body>
</html>
