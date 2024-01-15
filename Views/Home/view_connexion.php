<div class="text-center">
  <h2>Connexion</h2>
</div>
<div class="w-25 mx-auto mt-5">
<form method="POST" action="?controller=home&action=connexion_requete">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="nom" >
    <small id="nom" class="form-text text-muted">Votre nom utilisé lors de l'inscription</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="MdP" name="MdP">
  </div>
  
  <button type="submit" class="btn btn-primary mt-3" name="envoi">Submit</button>
</form>
</div>