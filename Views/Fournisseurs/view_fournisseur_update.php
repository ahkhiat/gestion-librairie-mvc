<div class="mx-auto w-50">
<h3 class="mt-3">Modifier un fournisseur</h3>


<form class= "mt-2" action="?controller=fournisseurs&action=fournisseur_update_requete" method="POST">


  <div class="form-group">
    <label for="exampleInputEmail1">Code fournisseur</label>
    <input type="text" name="Code_fournisseur" class="form-control" id="Code_fournisseur" aria-describedby="Code_fournisseur" value="<?php echo $fournisseur[0]->Code_fournisseur ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Raison sociale</label>
    <input type="text" name="Raison_sociale" class="form-control" id="Raison_sociale" aria-describedby="Raison_sociale" value="<?php echo $fournisseur[0]->Raison_sociale ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Rue</label>
    <input type="text" name="Rue_fournisseur" class="form-control" id="Rue_fournisseur" aria-describedby="Rue_fournisseur" value="<?php echo $fournisseur[0]->Rue_fournisseur ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Code postal</label>
    <input type="text" name="Code_postal" class="form-control" id="Code_postal" aria-describedby="Code_postal" value="<?php echo $fournisseur[0]->Code_postal ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Localité</label>
    <input type="text" name="Localite" class="form-control" id="Localite" aria-describedby="Localite" value="<?php echo $fournisseur[0]->Localite ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pays</label>
    <input type="text" name="Pays" class="form-control" id="Pays" aria-describedby="Pays" value="<?php echo $fournisseur[0]->Pays ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Téléphone</label>
    <input type="text" name="Tel_fournisseur" class="form-control" id="Tel_fournisseur" aria-describedby="Tel_fournisseur" value="<?php echo $fournisseur[0]->Tel_fournisseur ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Url</label>
    <input type="text" name="Url_fournisseur" class="form-control" id="Url_fournisseur" aria-describedby="Url_fournisseur" value="<?php echo $fournisseur[0]->Url_fournisseur ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="Email_fournisseur" class="form-control" id="Email_fournisseur" aria-describedby="Email_fournisseur" value="<?php echo $fournisseur[0]->Email_fournisseur ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Fax</label>
    <input type="text" name="Fax_fournisseur" class="form-control" id="Fax_fournisseur" aria-describedby="Fax_fournisseur" value="<?php echo $fournisseur[0]->Fax_fournisseur ?>">
  </div>
  <input type="hidden" name="Id_fournisseur" class="form-control" id="hide" value="<?php echo $fournisseur[0]->Id_fournisseur?>">

  
  
  <button type="submit" class="mt-3 btn btn-primary">Ajouter</button>

</form>
</div>



