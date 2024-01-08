<!-- <script>
    let select = document.querySelector(".form-select");
        select.addEventListener('change', ()=> {
    document.createElement("table")        
    })
</script> -->

<form action="?controller=livres&action=livre_titre_result" method="POST">
<select class="form-select" aria-label="Default select example" name="choixLivre">
  <option selected>Open this select menu</option>
  <?php
    foreach ($livres as $l){
        echo "<option value=" . $l->$Id_Livre . ">" . $l->Titre_livre . "</option>";
    }
  ?>
</select>
<button type="submit" class="btn btn-primary">Submit</button>

</form>


<!-- 
<table id='table' class="table">
    <thead>
        <th>ISBN</th>
        <th>Titre</th>
        <th>Theme</th>
        <th>Nombre de pages</th>
        <th>Format</th>
        <th>Nom de l'auteur</th>
        <th>Prénom</th>
        <th>Éditeur</th>
        <th>Année d'édition</th>
        <th>Prix</th>
        <th>Langue</th>
    </thead>
    <?php  foreach($livres as $l ): ?>
    <tr>
        <td><?=$l->ISBN?></td>
        <td><?=$l->Titre_livre?></td>
        <td><?=$l->Theme_livre?></td>
        <td><?=$l->Nbr_pages_livre?></td>
        <td><?=$l->Format_livre?></td>
        <td><?=$l->Nom_auteur?></td>
        <td><?=$l->Prenom_auteur?></td>
        <td><?=$l->Editeur?></td>
        <td><?=$l->Annee_edition?></td>
        <td><?=$l->Prix_vente?></td>
        <td><?=$l->Langue_livre?></td>
       
    </tr>
    <?php endforeach; ?>
</table> -->