<div class="mx-auto w-25">
<h3 class="mt-3">Ajout d'un utilisateur</h3>

<form class= "mt-5" action="?controller=utilisateurs&action=utilisateur_ajout_requete" method="POST">


  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" name="age" class="form-control" id="age" aria-describedby="age" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="date" name="date" class="form-control" id="date" aria-describedby="date" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mot de passe</label>
    <input type="password" name="MdP" class="form-control" id="MdP" aria-describedby="MdP" >
  </div>

  
  <div class="form-group">
  <label for="exampleInputEmail1">Statut</label>

    <!-- <input type="text" name="statut" class="form-control" id="statut" aria-describedby="statut" > -->
  <select class="form-control" name="statut">
    <option>Admin</option>
    <option>Utilisateur</option>
  </select>

</div>
    

  
  <button type="submit" class="mt-3 btn btn-primary">Ajouter</button>
</form>
</div>

<?php

