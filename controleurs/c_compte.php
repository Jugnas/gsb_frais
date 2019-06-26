<?php
$sessionIdVisiteur = $_SESSION['idVisiteur'];
// $sessionPrenom = $_SESSION['prenom'];
// $sessionNom = $_SESSION['nom'];

$profil = $pdo->getProfilVisiteur($sessionIdVisiteur);

$prenom = $profil['prenom'];
$nom = $profil['nom'];
$photo = $profil['photo'];
$civilite = $profil['civilite'];
$login = $profil['login'];
$dateEmbauche = $profil['dateEmbauche'];
$adresse = $profil['adresse'];
$codePostal = $profil['cp'];
$ville = $profil['ville'];
$telephone = $profil['tel'];
$email = $profil['mail'];

// include("vues/v_sommaire.php");

$action = $_REQUEST['action'];

switch ($action) {
	case 'voirProfil':{
		include("vues/v_sommaire.php");
		include("vues/v_compte.php");
		break;
	}
	case 'editerProfil':{
		include("vues/v_sommaire.php");
		include("vues/v_editProfil.php");
		break;
	}

	case 'validerProfil':{
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["photo"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		transfererImage($target_dir, $target_file, $uploadOk, $imageFileType);
		$nom = $_REQUEST['nom'];
		$prenom = $_REQUEST['prenom'];
		$civilite = $_REQUEST['civilite'];
		// $photo = $_REQUEST['photo'];
		$adresse = $_REQUEST['adresse'];
		$codePostal = $_REQUEST['codePostal'];
		$ville = $_REQUEST['ville'];
		$login = $_REQUEST['login'];
		$dateEmbauche = $_REQUEST['dateEmbauche'];
		$telephone = $_REQUEST['telephone'];
		$email = $_REQUEST['email'];
		$pdo->editerProfilVisiteur($sessionIdVisiteur, $nom, $prenom, $photo, $adresse, $codePostal, $ville, $telephone, $email);
		include("vues/v_sommaire.php");
		include("vues/v_compte.php");
		break;
	}
	default:{
		include("vues/v_compte.php");
		break;
	}
}
?>