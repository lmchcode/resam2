<?php 
include 'header.php';




$nom = (isset ($_POST['nom']))? $_POST['nom']: "" ;
$prenom  = (isset ($_POST['prenom']))? $_POST['prenom']: "" ;
$login = (isset ($_POST['login']))? $_POST['login']: "" ;
$pass  = (isset ($_POST['passwd']))? $_POST['passwd']: "" ;
$CP = (isset ($_POST['code postal']))? $_POST['code postal']: "" ;
$adresse  = (isset ($_POST['adresse']))? $_POST['adresse']: "" ;
$ville = (isset ($_POST['ville']))? $_POST['ville']: "" ;
$tel  = (isset ($_POST['tel']))? $_POST['tel']: "" ;
$mobile  = (isset ($_POST['mobile']))? $_POST['mobile']: "" ;
$email = (isset ($_POST['email']))? $_POST['email']: "" ;
$club = (isset ($_POST['club']))? $_POST['club']: "" ;


if (strpbrk($email, '@') === false || strpbrk($email, '.') === false )
{
	echo "email invalide\n";
	echo "$email";

}else{
$request = $pdo->prepare('INSERT INTO utilisateur(usr_login, usr_psw, code_postal, usr_nom, usr_prenom, adresse, ville, tel, mobile, email, club, usr_sup) VALUES(:usr_login, :usr_psw,:code_postal, :usr_nom, :usr_prenom, :adresse, :ville, :tel, :mobile, :email, :club, :usr_sup)');
$request->execute(array(
	'usr_login' => $login,
	'usr_psw' => $pass,
	'code_postal' => $CP,
	'usr_nom' => $nom,
	'usr_prenom' => $prenom,
	'adresse' => $adresse,
	'ville' => $ville,
	'tel' => $tel,
	'mobile' => $mobile,
	'email' => $email,
	'club' => $club,
	'usr_sup' => 0
	));


}
?>
<p>
<a href="../index.php">retour a l'index</a>
</p>