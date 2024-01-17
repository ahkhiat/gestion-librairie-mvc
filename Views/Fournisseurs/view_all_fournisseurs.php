<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>

    <script type="text/javascript">
    function confirmation() {
      return confirm("Supprimer ce livre ?");
    }
    </script>

<div class="w-75 mx-auto d-flex flex-column">
<div class="align-self-end">
<a href="?controller=fournisseurs&action=fournisseur_ajout"><button class="mt-3 btn btn-secondary">Ajouter un fournisseur</button></a>
</div>
<table id='table' class="table table-striped">
    <thead>
        <!-- <th>id</th> -->
        <th>Code fournisseur</th>
        <th>Raison Sociale</th>
        <th>Rue</th>
        <th>CP</th>
        <th>Localité</th>
        <th>Pays</th>
        <th>Tél</th>
        <th>Url</th>
        <th>Email</th>
        <th>Fax</th>
        <?php 
            if(isset($_SESSION["statut"]) && $_SESSION["statut"]=="Admin") 
                {echo '
        <th>Action</th>
        ';} 
       ?>
    </thead>
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <!-- <td><?=$f->Id_fournisseur?></td> -->
        <td><?=$f->Code_fournisseur?></td>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Rue_fournisseur?></td>
        <td><?=$f->Code_postal?></td>
        <td><?=$f->Localite?></td>
        <td><?=$f->Pays?></td>
        <td><?=$f->Tel_fournisseur?></td>
        <td><?=$f->Url_fournisseur?></td>
        <td><?=$f->Email_fournisseur?></td>
        <td><?=$f->Fax_fournisseur?></td>
        <?php 
            if(isset($_SESSION["statut"]) && $_SESSION["statut"]=="Admin") 
                {echo '
                
        <td>
            <div class="d-flex flex-row">
            
                <a href="?controller=fournisseurs&action=fournisseur_update&id='. $f->Id_fournisseur .'">
                    <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                <a href="?controller=fournisseurs&action=fournisseur_delete&id='. $f->Id_fournisseur .'">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-trash-fill"></i></button></a>
            </div>
        </td>';} 
       ?>  
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              