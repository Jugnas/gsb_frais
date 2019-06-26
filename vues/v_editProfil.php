<div id="contenu">
	<div id="accueil">
		<h2>Editer mon profil</h2>
		<form method="POST" action="index.php?uc=compte&action=validerProfil" enctype="multipart/form-data">
			<p>
        <label for="nomProfil">Nom: </label>
        <input type="text" id="nomProfil" name="nom" value="<?php echo $nom ?>"  />
      </p>
      <p>
        <label for="prenomProfil">Prénom: </label>
        <input type="text" id="prenomProfil" name="prenom" value="<?php echo $prenom ?>"  />
      </p>
      <p>
        <label for="photoProfil">Photo: </label>
        <!-- <input type="text" id="photoProfil" name="photo" value="<?php echo $photo ?>"  /> -->
        <input type="file" name="photo" id="photoProfil" />
    <!-- <input type="submit" value="Upload Image" name="transferer" /> -->
      </p>
      <p>
        <label for="adresseProfil">Adresse: </label>
        <input type="text" id="adresseProfil" name="adresse" value="<?php echo $adresse ?>" />
      </p>
      <p>
        <label for="codePostalProfil">Code Postal: </label>
        <input type="text" id="codePostalProfil" name="codePostal" value="<?php echo $codePostal ?>"  />
      </p>
      <p>
        <label for="villeProfil">Ville: </label>
        <input type="text" id="villeProfil" name="ville" value="<?php echo $ville ?>"  />
      </p>
      <p>
        <label for="telephoneProfil">Téléphone: </label>
        <input type="tel" id="telephoneProfil" name="telephone" value="<?php echo $telephone ?>"  />
      </p>
      <p>
        <label for="emailProfil">Courriel: </label>
        <input type="email" id="emailProfil" name="email" value="<?php echo $email ?>"  />
      </p>
      <input type="hidden" id="loginProfil" name="login" value="<?php echo $login ?>"  />
      <input type="hidden" id="civiliteProfil" name="civilite" value="<?php echo $civilite ?>"  />
      <input type="hidden" id="dateEmbaucheProfil" name="dateEmbauche" value="<?php echo $dateEmbauche ?>"  />
		<input id="modifier" type="submit" value="Modifier">
		</form>
	</div>
</div>