<div class="w-50 mx-auto mt-5">
<form action="?controller=livres&action=livre_auteur_result" method="POST">
<select class="form-select" aria-label="Default select example" name="choixAuteur">
  <option selected>Open this select menu</option>

 
    <?php  foreach($livres as $l ): ?>
    <option value="<?=$l->Nom_auteur?>"><?=$l->Nom_auteur?></option>
    <?php endforeach; ?>

</select>
<button type="submit" class="btn btn-primary mt-3">Submit</button>

</form>
</div>