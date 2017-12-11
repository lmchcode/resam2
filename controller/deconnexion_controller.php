<?php 
session_start();
unset($_SESSION['is_loged']);
header("Location: ../index.php");

?>