<div class="mx-auto w-25">
<h3 class="mt-3">Modification de l'utilisateur</h3>


<form class= "mt-5" action="?controller=utilisateurs&action=update_utilisateur_admin_requete" method="POST">



  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $utilisateur[0]->nom ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" value="<?php echo $utilisateur[0]->prenom ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" name="age" class="form-control" id="age" aria-describedby="age" value="<?php echo $utilisateur[0]->age ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Statut</label>
    <input type="text" name="Statut" class="form-control" id="statut" aria-describedby="statut" value="<?php echo $utilisateur[0]->Statut ?>">
  </div>
    
    <input type="hidden" name="id" class="form-control" id="hide" value="<?php echo $utilisateur[0]->idUtilisateur ?>">

  
  <button type="submit" class="mt-3 btn btn-primary">Modifier</button>
</form>
</div>

<?php

