<div class="mx-auto w-25">
<h3 class="mt-3">Modification de l'utilisateur</h3>

<form class= "mt-5" action="?controller=home&action=update_utilisateur_requete" method="POST">


  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" class="form-control" id="email"  value="<?php echo $_SESSION["email"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom"  value="<?php echo $_SESSION["nom"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="prenom"  value="<?php echo $_SESSION["prenom"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date de naissance</label>
    <input type="date" name="date_naissance" class="form-control" id="date_naissance"  value="<?php echo $_SESSION["date_naissance"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Statut</label>
    <input type="text" name="statut" class="form-control" id="statut" aria-describedby="statut" value="<?php echo $_SESSION["statut"] ?>" disabled>
  </div>
    
    <input type="hidden" name="id" class="form-control" id="hide" value="<?php echo $_SESSION["id"] ?>">

  
  <button type="submit" class="mt-3 btn btn-primary">Modifier</button>
</form>
</div>

<?php

