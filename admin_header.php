<?php 
session_start();

if(!(isset($_SESSION['is_loged']) && $_SESSION['is_loged'] == 1)){

   header("Location: index.php");
}

    include_once 'model/connexion_bd.php';
    include_once 'model/utilisateur.php';
    include_once 'model/emprunt.php';
    include_once 'model/categorie.php';
    include_once 'model/livre.php';

?>

<html>
<head>
<title>Admin Bibliotheque</title>


</head>
<body>
	<h1>Bibliothèque</h1>

	<h2>menu</h2>
	<ul>
		<li><a href="admin_livre.php">Admin Livre</a></li>
		<li><a href="admin_utilisateur.php">Admin Utilisateur</a></li>
		<li><a href="controller/deconnexion_controller.php">Deconnexion </a></li>
	</ul>