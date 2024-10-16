<?php


use App\Modele\Modele_Utilisateur;
use App\Vue\Vue_Structure_BasDePage;
use App\Vue\Vue_Structure_Entete;

$Vue->setEntete(new Vue_Structure_Entete());



switch ($action) {
    case "AfficherRGPD" :
        $Vue->addToCorps(new \App\Vue\Vue_ConsentementRGPD());
        break;
    case "AccepterRGPD" :
        $listeNiveauAutorisation = Modele_Utilisateur::Utilisateur_Modifier_RGPD($_REQUEST["idUtilisateur"],1);
        $Vue->addToCorps(new \App\Vue\Vue_Menu_Administration($_SESSION["typeConnexionBack"]));
        break;
    case "RefuserRGPD":
        $Vue->addToCorps(new \App\Vue\Vue_Connexion_Formulaire_client());
        break;

}
$Vue->setBasDePage(new  Vue_Structure_BasDePage());

