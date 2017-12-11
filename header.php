<?php 

function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

// Example
if ( is_session_started() === FALSE ) session_start();

  
    include_once 'model/connexion_bd.php';
    include_once 'model/utilisateur.php';
    include_once 'model/emprunt.php';
    include_once 'model/categorie.php';
    include_once 'model/livre.php';

?>

<html>
<head>
<meta charset="UTF-8">
<title>Résam</title>
<link rel="stylesheet" href="lib/css/bootstrap.css">
<link href="lib/js/bootstrap.js">

</head>
<body>
<div class="container-fluid">
	<h1>RESAM</h1> 
	<div class="btn-group" role="group" aria-label="Basic example">
	<button type="button" class="btn btn-secondary" onclick="location.href='index.php'">Accueil</button>
    <button type="button" class="btn btn-secondary" onclick="location.href='connexion.php'">Connexion</button>       
    <button type="button" class="btn btn-secondary" onclick="location.href='deconnexion.php'">Déconnexion</button>   
    <button type="button" class="btn btn-secondary" onclick="location.href='creeCompte.php'">Créer un  compte</button>
	</div>