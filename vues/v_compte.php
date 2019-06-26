<div id="contenu">
	<div id="accueil">
		<h2>Mon Compte</h2>
		<h3><?php echo $civilite . " " . $prenom . " " . $nom . "(" . $login . ")"?></h3>
		<p><img src="images/<?php echo $photo ?>"><br>
			Embauché le: <?php echo $dateEmbauche?><br>
			<?php echo $adresse?><br>
			<?php echo $codePostal . " " . $ville?><br>
			Téléphone: <?php echo $telephone?><br>
			Courriel: <?php echo $email?>
		</p>
		<form method="POST" action="index.php?uc=compte&action=editerProfil">
		<input id="editer" type="submit" value="Editer mon profil">
		</form>
	</div>
</div>