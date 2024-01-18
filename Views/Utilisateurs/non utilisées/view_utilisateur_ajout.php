<div class="mx-auto w-25">
<h3 class="mt-3">Ajout d'un utilisateur</h3>

<form class= "mt-5" action="?controller=utilisateurs&action=utilisateur_ajout_requete" method="POST">


<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" class="form-control" id="email" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="prenom">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date de naissance</label>
    <input type="date" name="date_naissance" class="form-control" id="age">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="date" name="date" class="form-control" id="date">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mot de passe</label>
    <input type="password" name="MdP" class="form-control" id="MdP">
  </div>

  
  <div class="form-group">
  <label for="exampleInputEmail1">Statut</label>

    <!-- <input type="text" name="statut" class="form-control" id="statut" aria-describedby="statut" > -->
  <select class="form-control" name="Statut">
    <option value="Admin">Admin</option>
    <option value="Personnel">Personnel</option>
    <option value="Utilisateur">Utilisateur</option>
  </select>

</div>
    

  
  <button type="submit" class="mt-3 btn btn-primary">Ajouter</button>
</form>
</div>

<?php

