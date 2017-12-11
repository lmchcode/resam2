<?php 
include 'header.php';

$action = $_GET['action'];

if($action == "insert"){

$nom = (isset ($_POST['nom']))? $_POST['nom']: "" ;
$prenom  = (isset ($_POST['prenom']))? $_POST['prenom']: "" ;
$login = (isset ($_POST['login']))? $_POST['login']: "" ;
$pass  = (isset ($_POST['passwd']))? $_POST['passwd']: "" ;

utilisateur::ajouterUtilisateurs($nom, $prenom, $login, $pass);
header("Location: ../admin_utilisateur.php");

}


if($action == "del"){
    utilisateur::supprimerUtilisateur($_GET['id']);
    header("Location: ../admin_utilisateur.php");
}
?>