<?php
// include ("c_session.php");
include("vues/v_sommaire.php");
$lesVisiteurs = $pdo->getAllVisiteurs();
include("vues/v_visiteurs.php");
?>