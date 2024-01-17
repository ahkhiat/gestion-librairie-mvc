<div class="mx-auto w-25">
<h3 class="mt-3">Modification de l'utilisateur</h3>


<form class= "mt-5" action="?controller=utilisateurs&action=update_utilisateur_admin_requete" method="POST">



<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" class="form-control" id="email"  value="<?php echo $utilisateur[0]->email ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom"  value="<?php echo $utilisateur[0]->nom ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $utilisateur[0]->prenom ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date de naissance</label>
    <input type="date" name="date_naissance" class="form-control" id="date_naissance"  value="<?php echo $utilisateur[0]->date_naissance ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Statut</label>
    <select name="Statut" id="Statut" class="form-control">
      <option value="Admin" <?php if($utilisateur[0]->Statut=="Admin") echo 'selected'; ?>>Admin</option>
      <option value="Utilisateur" <?php if($utilisateur[0]->Statut=="Utilisateur") echo 'selected'; ?>>Utilisateur</option>
    <!-- <input type="text" name="Statut" class="form-control" id="statut" aria-describedby="statut" value="<?php echo $utilisateur[0]->Statut ?>"> -->
    </select>
  </div>
    
    <input type="hidden" name="id" class="form-control" id="hide" value="<?php echo $utilisateur[0]->idUtilisateur ?>">

  
  <button type="submit" class="mt-3 btn btn-primary">Modifier</button>
</form>
</div>

<?php

