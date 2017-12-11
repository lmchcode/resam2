<?php 
 include 'header.php';
 
 
 
 
?>
<h2>Créer compte</h2>
<p>

 <form method="post" action="controller/cree_compte_controller.php" style="width: 50%">
 
 <div class="form-group">
 <label for="nom">Nom</label>
 <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nom" placeholder="Entrez nom">
 </div>
 
 <div class="form-group">
 <label for="prenom">Prénom</label>
 <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="prenom" placeholder="Entrez Prénom">
 </div>
 
  <div class="form-group">
 <label for="login">Login</label>
 <input type="text" class="form-control" id="login" name="login" aria-describedby="login" placeholder="Entrez login">
 </div>
  
 <div class="form-group">
 	<label for="passwd">Mot de passe</label>
 	<input type="password" class="form-control" id="passwd" name="passwd" placeholder="Entrez le mot de passe">
 </div>
 
  <div class="form-group">
 	<label for="passwd">Vérifier mot de passe</label>
 	<input type="password" class="form-control" id="passwd" name="passwd" placeholder="Entrez le mot de passe">
 </div>
 
 <div class="form-group">
 <label for="CP">Code Postal</label>
 <input type="text" class="form-control" id="CP" name="cp" aria-describedby="code postal" placeholder="Entrez votre code postal">
 </div>
 
<div class="form-group">
 <label for="adresse">Addresse</label>
 <input type="text" class="form-control" id="addresse" name="addresse" aria-describedby="addresse" placeholder="Entrez votre addresse">
 </div>

 <div class="form-group">
 <label for="tel">Telephone</label>
 <input type="text" class="form-control" id="tel" name="tel" aria-describedby="Téléphone" placeholder="Entrez numéro de téléphone">
 </div>

 <div class="form-group">
 <label for="tel">Telephone mobile</label>
 <input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="Téléphone Mobile" placeholder="Entrez numéro de téléphone mobile">
 </div>
 
 <div class="form-group">
 <label for="email">Email</label>
 <input type="text" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Entrez votre email">
 </div>
 
 <div class="form-group">
 <label for="login">Club</label>
 <input type="text" class="form-control" id="club" name="club" aria-describedby="club" placeholder="Votre club de sport">
 </div>
  
 
 <br>
 
 <div class="button">
        <button type="submit">créer compte</button>
    </div>
</form> 


</p>

<?php 
 include 'footer.php';
?>