
<div class="w-50 mx-auto mt-5">
<form action="?controller=livres&action=livre_titre_result" method="POST">
<select class="form-select" aria-label="Default select example" name="choixLivre">
  <option selected>Open this select menu</option>

 
    <?php  foreach($livres as $l ): ?>
    <option value="<?=$l->Titre_livre?>"><?=$l->Titre_livre?></option>
    <?php endforeach; ?>

</select>
<button type="submit" class="btn btn-primary mt-3">Submit</button>

</form>
</div>


