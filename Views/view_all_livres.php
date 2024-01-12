<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table' class="table table-striped w-75 mx-auto">
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
        <td class="d-flex flex-row">
            <form action="?controller=livres&action=update_livre" method="POST">
                <input type="hidden" name="id" value="<?=$l->Id_Livre?>">    
                <button type="submit" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></button>
            </form>
            <form action="?controller=livres&action=update_livre" method="POST">
                <input type="hidden" name="id" value="<?=$l->Id_Livre?>">    
                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
            </form>
        </td>
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              