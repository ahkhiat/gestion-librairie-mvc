

    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>

    <script type="text/javascript">
    function confirmation() {
      return confirm("Supprimer ce livre ?");
    }
</script>
<div class="w-75 mx-auto d-flex flex-column">
<div class="align-self-end">
    <a href="?controller=livres&action=livre_ajout"><button class="mt-3 btn btn-secondary">Ajouter un livre</button></a>
</div>
<table id='table' class="table table-striped ">

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
        <th>Action</th>
    </thead>
    <?php  foreach($livres as $l ): ?>
    <tr>
        <td style="display:none;"><?=$l->Id_Livre?></td>
        <td width="20%"><?=$l->ISBN?></td>
        <td width="100%"><?=$l->Titre_livre?></td>
        <td><?=$l->Theme_livre?></td>
        <td><?=$l->Nbr_pages_livre?></td>
        <td><?=$l->Format_livre?></td>
        <td><?=$l->Nom_auteur?></td>
        <td><?=$l->Prenom_auteur?></td>
        <td><?=$l->Editeur?></td>
        <td><?=$l->Annee_edition?></td>
        <td><?=$l->Prix_vente?></td>
        <td><?=$l->Langue_livre?></td>
        <td>
            <div class="d-flex flex-row">
            
                <a href="?controller=livres&action=update_livre&id=<?=$l->Id_Livre?>">
                    <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                <a href="?controller=livres&action=delete_livre&id=<?=$l->Id_Livre?>">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-pencil-fill"></i></button></a>
            </div>
        </td>
       
    </tr>
    <?php endforeach; ?>
</table>


</div>

           
              