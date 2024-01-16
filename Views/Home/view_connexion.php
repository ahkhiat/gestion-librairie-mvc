<div class="text-center">
  <h2>Connexion</h2>
</div>
<div class="w-25 mx-auto mt-5">
<form name ="form1" method="POST" action="?controller=home&action=connexion_requete">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" onchange="checkEmail(document.form1.email)">
    <small id="email" class="form-text text-muted">Votre email utilisé lors de l'inscription</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="MdP" name="MdP">
  </div>
  
  <button type="submit" class="btn btn-primary mt-3" name="envoi">Submit</button>
  <p>Pas de compte? <a href="?controller=home&action=register">s'enregistrer</a>.</p>

</form>
</div>