<!DOCTYPE html>
<html>
<head>
	<title>Mon page de traitement</title>
</head>
<body>
	<?php
		if (isset($_POST['nom']) && isset($_POST['prenom'])) {
			echo "Votre nom est" .$_POST['nom']. 'et votre prenom est:' .$_POST['prenom'];
		}
	?>
</body>
</html>\

$bdd = 'mysql:host=localhost;dbname=formulaire;charset=utf8';
$dsn = 'mysql:host=localhost;dbname=formulaire;charset=utf8';