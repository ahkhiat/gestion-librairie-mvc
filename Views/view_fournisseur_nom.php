<form action="?controller=fournisseurs&action=fournisseur_nom_result" method="POST">
<select class="form-select" aria-label="Default select example" name="choixFournisseur">
  <option selected>Open this select menu</option>

 
    <?php  foreach($fournisseurs as $f ): ?>
    <option value="<?=$f->Raison_sociale?>"><?=$f->Raison_sociale?></option>
    <?php endforeach; ?>

</select>
<button type="submit" class="btn btn-primary">Submit</button>

</form>