

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
        <td><?=$u->email?></td>
        <td ><?=$u->nom?></td>
        <td ><?=$u->prenom?></td>
        <td><?=$u->date_naissance?></td>
        <td><?=$u->Statut?></td>
    
        <td width="50">
            <div class="d-flex flex-row">
                <form action="?controller=utilisateurs&action=utilisateur_fiche_admin" method="POST">
                    <input type="hidden" name="id" class="form-control" id="hide" value="<?php echo $u->idUtilisateur ?>">
                    <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button>
                </form>
                <form action="?controller=utilisateurs&action=delete_utilisateur" method="POST">
                    <input type="hidden" name="id" class="form-control" id="hide" value="<?php echo $u->idUtilisateur ?>">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-trash-fill"></i></button>
                </form>
            </div>
            
        </td>
    
    </tr>
<?php endforeach; ?>
</table>


</div>

       
          