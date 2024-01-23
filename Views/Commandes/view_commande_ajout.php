<div class="mx-auto w-50">
<h3 class="mt-3">Ajouter une commande</h3>


<form class= "mt-2" action="?controller=commandes&action=commande_ajout_requete" method="POST">


<div class="form-group">
    <label for="exampleInputEmail1">Titre livre</label>    
    <select class="form-select" name="choixLivre">
        <option selected>Choix du titre</option>
        <?php  foreach($titres as $t ): ?>
        <option value="<?=$t->Id_Livre?>"><?=$t->Titre_livre?></option>
        <?php endforeach; ?>
    </select>

</div>
<div class="form-group">
    <label for="exampleInputEmail1">Fournisseur</label>
    <select class="form-select" name="choixFournisseur">
        <option selected>Choix du fournisseur</option>
        <?php  foreach($fournisseurs as $f ): ?>
        <option value="<?=$f->Id_fournisseur?>"><?=$f->Raison_sociale?></option>
        <?php endforeach; ?>
    </select>

</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Quantité</label>
    <input type="number" name="quantite" class="form-control" id="quantite" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prix</label>
    <input type="text" name="prix" class="form-control" id="prix" >
  </div>
  
  
  
  <button type="submit" class="mt-3 btn btn-primary">Ajouter</button>

</form>
</div>



