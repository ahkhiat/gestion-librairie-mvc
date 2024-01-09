<form action="?controller=commandes&action=commande_fournisseur_result" method="POST">
<select class="form-select" aria-label="Default select example" name="choixCommande">
  <option selected>Open this select menu</option>

 
    <?php  foreach($commandes as $c ): ?>
    <option value="<?=$c->Raison_sociale?>"><?=$c->Raison_sociale?></option>
    <?php endforeach; ?>

</select>
<button type="submit" class="btn btn-primary">Submit</button>

</form>