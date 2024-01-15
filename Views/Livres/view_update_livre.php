<div class="mx-auto w-50">
<h3 class="mt-3">Modification du livre</h3>

<!-- <?php var_dump($livre)?> -->


<form class= "mt-2" action="?controller=livres&action=update_livre_requete" method="POST">


  <div class="form-group">
    <label for="exampleInputEmail1">ISBN</label>
    <input type="text" name="ISBN" class="form-control" id="ISBN" aria-describedby="ISBN" value="<?php echo $livre[0]->ISBN ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" name="Titre_livre" class="form-control" id="Titre_livre" aria-describedby="Titre_livre" value="<?php echo $livre[0]->Titre_livre ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Theme</label>
    <input type="text" name="Theme_livre" class="form-control" id="Theme_livre" aria-describedby="Theme_livre" value="<?php echo $livre[0]->Theme_livre ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de pages</label>
    <input type="text" name="Nbr_pages_livre" class="form-control" id="Nbr_pages_livre" aria-describedby="Nbr_pages_livre" value="<?php echo $livre[0]->Nbr_pages_livre ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Format</label>
    <input type="text" name="Format_livre" class="form-control" id="Format_livre" aria-describedby="Format_livre" value="<?php echo $livre[0]->Format_livre ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom de l'auteur</label>
    <input type="text" name="Nom_auteur" class="form-control" id="Nom_auteur" aria-describedby="Nom_auteur" value="<?php echo $livre[0]->Nom_auteur ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom de l'auteur</label>
    <input type="text" name="Prenom_auteur" class="form-control" id="Prenom_auteur" aria-describedby="Prenom_auteur" value="<?php echo $livre[0]->Prenom_auteur ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Editeur</label>
    <input type="text" name="Editeur" class="form-control" id="Editeur" aria-describedby="Editeur" value="<?php echo $livre[0]->Editeur ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Année édition</label>
    <input type="text" name="Annee_edition" class="form-control" id="Annee_edition" aria-describedby="Annee_edition" value="<?php echo $livre[0]->Annee_edition ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prix</label>
    <input type="text" name="Prix_vente" class="form-control" id="Prix_vente" aria-describedby="Prix_vente" value="<?php echo $livre[0]->Prix_vente ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Langue</label>
    <input type="text" name="Langue_livre" class="form-control" id="Langue_livre" aria-describedby="Langue_livre" value="<?php echo $livre[0]->Langue_livre ?>" >
  </div>
    
    <input type="hidden" name="Id_Livre" class="form-control" id="hide" value="<?php echo $livre[0]->Id_Livre?>">

  
  <button type="submit" class="mt-3 btn btn-primary">Modifier</button>

</form>
</div>



