<div class="w-50 mx-auto mt-5">
<form action="?controller=commandes&action=commande_date_result" method="POST">
<select class="form-select" aria-label="Default select example" name="choixCommande">
  <option selected>Open this select menu</option>

 
    <?php  foreach($commandes as $c ): ?>
    <option value="<?=$c->Date_achat?>"><?=$c->Date_achat?></option>
    <?php endforeach; ?>

</select>
<button type="submit" class="btn btn-primary mt-3">Submit</button>

</form>
</div>