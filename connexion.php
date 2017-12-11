<?php 
 include 'header.php';
?>
<h2>Connexion</h2>
<p>
Bibliothèque EfreiTech

 <form method="post" action="controller/connexion_controller.php" style="width: 50%">
 
 <div class="form-group">
 <label for="login">Login</label>
 <input type="text" class="form-control" id="login" name="login" aria-describedby="login" placeholder="Entrez login">
 </div>
 
 <div class="form-group">
 	<label for="passwd">Mot de passe</label>
 	<input type="password" class="form-control" id="passwd" name="passwd" placeholder="Entrez le mot de passe">
 </div>
 <br>
 <input type="submit" class="btn btn-primary" value="Connexion">
</form> 


</p>

<?php 
 include 'footer.php';
?>