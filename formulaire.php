<?php  
	try
	{
		$bdd= new PDO('mysql:host=localhost;dbname=formulaire', 'rado', 'rado06');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	if (isset($_POST['submit'])) {
		$nom= $_POST['nom'];
		$nom= $_POST['prenom'];
		$nom= $_POST['age'];
		$nom= $_POST['genre'];
		$req= $bdd->prepare('INSERT INTO utilisateur VALUES ("","rakoto","lita","20ans", "femme")');
		$req->excecute(array("nom" => $nom, "prenom" => $prenom, "age" =>$age, "genre"=>$genre));
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mon formulaire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/formulaire.css">
	<!--<script type="text/javascript" src="js/formulaire.js"></script>-->
</head>
<body>

	<h1 id="titre">MON FORMULAIRE</h1>
	<div id="form">
		<form method="post" id="enr" action = "#" >
		<center><table id="table">
				<tr>
					<td><p>Nom:</p></td>
					<td><input type="text" name="nom" id="nom" value=""></td>
				</tr>
				<tr>
					<td><p>Prenom:</p></td>
					<td><input type="text" name="prenom" id="prenom" value=""></td>
				</tr>
				<tr>
					<td><p>Age:</p></td>
					<td><select name="age" id="selection">
						<script type="text/javascript">
							for (var i = 18; i <= 90; i++) 
							{
								document.write('<option>'+i+ ' ans'+'</option>');
							}
						</script>
					</select></td>
				</tr>
				<tr>
					<td><p>Genre:</p></td>
					<td>
						<label>H</label><input type="radio" name="genre" value="Homme" id="mal" checked>
						<label>F</label><input type="radio" name="genre" value="femme" id="fem" >

					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="valider" value="Enregistrer" id="submit"/></td>
				</tr>
			</table>
		</center>
		</form>
	</div>
	<div class="tableau">
		<h2>Listes</h2>
		<table border="1" id="liste">
			<tr id="tete">
				<td><p>Nom</p></td>
				<td><p>Prenom</p></td>
				<td><p>Age</p></td>
				<td><p>Genre</p></td>
			</tr>
			<tr>
				<td>
				<?php  
					if (isset($_POST['nom'])) {
						# code...
						echo $_POST['nom'];
					}
				?>
				</td>
				<td>
					<?php  
					if (isset($_POST['prenom'])) {
						# code...
						echo $_POST['prenom'];
					}
				?>
				</td>
				<td><?php  
					if (isset($_POST['age'])) {
						# code...
						echo $_POST['age'];
					}
				?>	
				</td>
				<td>
					<?php  
					if (isset($_POST['genre'])) {
						# code...
						echo $_POST['genre'];
					}
				?>
				</td>
			</tr>
			<tr>
				<td><p>Botity</p></td>
				<td><p>Bozy</p></td>
				<td>19ans</td>
				<td>Femme</td>
			</tr>
		</table>
	</div>
</body>
</html>
