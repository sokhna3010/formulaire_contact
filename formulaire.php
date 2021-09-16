<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formu</title>
	<style >
		h3 {
			color: #953707;
		}
		h1{
			text-align: center;
			color: #eb1524;
		}
		h2{
			text-align: center;
		}
		
	</style>
</head>						
<body>
	<div align="center">
<form method="POST" action="formulaire.php">
	<fieldset style="width: 50%; background-color: #ebc3af;">
		<legend><b>CONTACT</b></legend>
	<table>
	<tr>
		<td bgcolor="#eab89f" align="right"><label  for="prenom"> Prenom:</label></td>
		<td ><input type="text" placeholder="votre prenom" name="votreprenom" id="prenom" required=""></td>
	</tr>
	
	<tr>
		<td bgcolor="#e8ab8d" align="right"><label for="nom">Nom:</label></td>
		<td><input type="text" placeholder="votre nom" name="votrenom" id="nom"required=""></td>   <br>
	</tr>
	
	<tr>
		<td bgcolor="#e5a180" align="right"><label for="age">AGE:</label></td>
		<td><input type="number" min="1" placeholder="age" name="votreage" id="age" required=""></td>
	</tr>

	<tr>
		<td bgcolor="#e29872" align="right"><label for="email">Email:</label></td>
		<td><input type="email" placeholder="email" name="email" id="email" required=""></td>
	</tr>
	
	<tr>
		<td bgcolor="#df8d65" align="right"><label for="adresse">Adresse:</label></td>
		<td><textarea name="adresse"id="adresse"cols=30 rows="5" placeholder="Veuillez saisir votre message" required=""></textarea></td>
	</tr>
	<tr>				
		<td align="left">
	<input type="submit" value="Envoyer" name="inscription"></td>
	<td align="right"><input type="reset" value="supprimer" name="reset"></td></tr>
	</table><br>
	</fieldset>
</form>
</div>
</body>
</html>
<?php

	// $user = $_POST['prenom'];
	// $mynam = $_POST['nom'];
 	// $monage = $_POST['age'];
	// $monemail = $_POST['email'];
	// $myadresse	= $_POST['adresse'];
				// verifier que le bouton submit a eté actioné
				
		if (isset($_POST['inscription'])) {

							// verifier  que ya du mouvement sur chaque champ
			if (isset($_POST['votreprenom']) AND isset($_POST['votrenom']) AND isset($_POST['votreage']) AND isset($_POST['email']) AND isset($_POST['adresse'])) {

							// verifier que ces champs ne sont pas vide

				if (!empty($_POST['votreprenom']) AND !empty($_POST['votrenom']) AND !empty($_POST['votreage']) AND !empty($_POST['email']) AND !empty($_POST['adresse']))
						{
							// pour securiser les saisis Traiter les donnees recuperer

							$prenom=htmlspecialchars($_POST['votreprenom']);
							$nom=htmlspecialchars($_POST['votrenom']);
							$age=htmlspecialchars($_POST['votreage']);
							$email=htmlspecialchars($_POST['email']);
							$adresse=htmlspecialchars($_POST['adresse']);

							echo"<center><h3>  Formulaire bien envoyer</h3> </center>";


							echo " <center> Bonjour <mark> $prenom  </mark>  <br>Merci pour votre nom <mark> $nom</mark> <br> <br> Votre age est <mark>$age</mark> <br> <br>  Votre email est:<mark>$email</mark> <br>  <br>Adresse bien recu <mark>$adresse</mark> </center>";
						}
			
						else{
			echo"<h1> Formulaire non envoyer<h1/>";
				
			echo"<h2> Tous les champs doivent etre rempris<h2/>";
				}
			
			}
			
		}
		

?>