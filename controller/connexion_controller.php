<?php 
include 'header.php';

$login = (isset ($_POST['login']))? $_POST['login']: "" ;
$pass  = (isset ($_POST['passwd']))? $_POST['passwd']: "" ;

$connected  = utilisateur::checkConnexion($login, $pass);
session_start();
if ($connected == true){
    $_SESSION['is_loged'] = 1;
    echo "ok";
    
    
}else{
    $_SESSION['is_loged'] = 0;
    echo "nok";
}


?>
<p>
<a href="../index.php">retour a l'index</a>
</p>