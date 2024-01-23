<div class="text-center">
  <h2>Créer un compte</h2>
</div>
<div class="w-25 mx-auto mt-5">
<form method="POST" action="?controller=home&action=register_requete">
<div class="form-group">
    <label for="exampleInputEmail1">Email*</label>
    <input type="text" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom*</label>
    <input type="text" class="form-control" id="nom" name="nom" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom*</label>
    <input type="text" class="form-control" id="prenom" name="prenom" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date de naissance*</label>
    <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe*</label>
    <input type="password" class="form-control" id="MdP" name="MdP" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmez le mot de passe*</label>
    <input type="password" class="form-control" id="MdP2" name="MdP2" required>
  </div>

  
  <button type="submit" class="btn btn-primary mt-3" name="envoi">Submit</button>
</form>
</div>