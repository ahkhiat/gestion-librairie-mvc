

<p> <?= isset($search)?'Recherche par '.$search:'' ?></p>


<div class="w-75 mx-auto d-flex flex-column">
<div class="align-self-end">
<a href="?controller=utilisateurs&action=utilisateur_ajout"><button class="mt-3 btn btn-secondary">Ajouter un utilisateur</button></a>
</div>
<table id='table' class="table table-striped table-hover ">

<thead>
    <th>Email</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Date de naissance</th>
    <th>Statut</th>
    <th>Action</th>
</thead>
<?php  foreach($utilisateurs as $u): ?>
    <!-- A FAIRE -->
    <tr onclick="location.href = '?controller=utilisateurs&action=utilisateur_fiche_admin&id=<?=$u->idUtilisateur?>'"> 
        <td style="display:none;"><?=$u->idUtilisateur?></td>
        <td><?=$u->email?></td>
        <td ><?=$u->nom?></td>
        <td ><?=$u->prenom?></td>
        <td><?=$u->date_naissance?></td>
        <td><?=$u->Statut?></td>
    
        <td width="50">
            <div class="d-flex flex-row">
            
                <a href="?controller=utilisateurs&action=utilisateur_fiche_admin&id=<?=$u->idUtilisateur?>">
                    <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                <a href="?controller=utilisateurs&action=delete_utilisateur&id=<?=$u->idUtilisateur?>">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-trash-fill"></i></button></a>
            </div>
        </td>
    
    </tr>
<?php endforeach; ?>
</table>


</div>

       
          