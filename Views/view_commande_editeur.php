<div class="w-50 mx-auto mt-5">
<form action="?controller=commandes&action=commande_editeur_result" method="POST">
<select class="form-select" aria-label="Default select example" name="choixCommande">
  <option selected>Open this select menu</option>

 
    <?php  foreach($commandes as $c ): ?>
    <option value="<?=$c->Editeur?>"><?=$c->Editeur?></option>
    <?php endforeach; ?>

</select>
<button type="submit" class="btn btn-primary mt-3">Submit</button>

</form>
</div>