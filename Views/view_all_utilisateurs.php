

<p> <?= isset($search)?'Recherche par '.$search:'' ?></p>

<script type="text/javascript">
function confirmation() {
  return confirm("Supprimer cet utilisateur ?");
}
</script>
<div class="w-75 mx-auto d-flex flex-column">
<div class="align-self-end">
<a href="?controller=utilisateurs&action=utilisateur_ajout"><button class="mt-3 btn btn-secondary">Ajouter un utilisateur</button></a>
</div>
<table id='table' class="table table-striped ">

<thead>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Age</th>
    <th>Statut</th>
    <th>Action</th>
</thead>
<?php  foreach($utilisateurs as $u): ?>
<tr>
    <td style="display:none;"><?=$u->idUtilisateur?></td>
    <td ><?=$u->nom?></td>
    <td ><?=$u->prenom?></td>
    <td><?=$u->age?></td>
    <td><?=$u->Statut?></td>
   
    <td width="50">
        <div class="d-flex flex-row">
        
            <a href="?controller=utilisateurs&action=update_utilisateur&id=<?=$u->idUtilisateur?>">
                <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
            <a href="?controller=livres&action=delete_livre&id=<?=$u->idUtilisateur?>">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-pencil-fill"></i></button></a>
        </div>
    </td>
   
</tr>
<?php endforeach; ?>
</table>


</div>

       
          