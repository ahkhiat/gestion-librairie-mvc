<div class="w-50 mx-auto mt-5">
<form action="?controller=livres&action=livre_editeur_result" method="POST">
<select class="form-select" aria-label="Default select example" name="choixEditeur">
  <option selected>Open this select menu</option>

 
    <?php  foreach($livres as $l): ?>
    <option value="<?=$l->Editeur?>"><?=$l->Editeur?></option>
    <?php endforeach; ?>

</select>
<button type="submit" class="btn btn-primary mt-3">Submit</button>

</form>
</div>