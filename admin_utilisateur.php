<?php 
 include 'admin_header.php';
?>
<h2>Admin Utilisateur</h2>
<p>
Bibliothèque EfreiTech

</p>
<h5>Ajouter Utilisateur</h5>
 <form method="post" action="controller/admin_utilisateur_controller.php?action=insert">
  Nom:<br>
  <input type="text" name="nom" id="nom"><br><br>
  Prénom:<br>
  <input type="text" name="prenom" id="prenom"><br><br> 
  
  Login:<br>
  <input type="text" name="login" id="login"><br><br>
  Mot de passe:<br>
  <input type="text" name="passwd" id="passwd"><br><br> 
  <input type="submit" value="Enregisrer">
</form> 

<?php 
    $list = utilisateur::getListUtilisateurs();
    echo "<table>";
    foreach ($list as $ligne){
        echo "<tr>";
        echo "<td>"; echo("<a href=controller/admin_utilisateur_controller.php?action=del&id=".$ligne['usr_id'].">X</a>")    ;echo "</td>";
        echo "<td>"; echo($ligne['usr_nom'])    ;echo "</td>";
        echo "<td>"; echo($ligne['usr_prenom'])    ;echo "</td>";
        echo "<td>"; echo($ligne['usr_login'])    ;echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

?>
    
<?php 
 include 'footer.php';
?>