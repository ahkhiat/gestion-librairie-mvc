<div class="text-center">
  <h2>Créer un compte</h2>
</div>
<div class="w-25 mx-auto mt-5">
<form method="POST" action="?controller=home&action=register_requete">
<div class="form-group">
    <label for="exampleInputEmail1">Email*</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom*</label>
    <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="nom" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom*</label>
    <input type="text" class="form-control" id="prenom" aria-describedby="emailHelp" name="prenom" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age*</label>
    <input type="text" class="form-control" id="age" aria-describedby="emailHelp" name="age" required>
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