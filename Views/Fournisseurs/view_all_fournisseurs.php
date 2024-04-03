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
        <td><?=$f->code_fournisseur?></td>
        <td><?=$f->raison_sociale?></td>
        <td><?=$f->rue_fournisseur?></td>
        <td><?=$f->code_postal?></td>
        <td><?=$f->localite?></td>
        <td><?=$f->pays?></td>
        <td><?=$f->tel_fournisseur?></td>
        <td><?=$f->url_fournisseur?></td>
        <td><?=$f->email_fournisseur?></td>
        <td><?=$f->fax_fournisseur?></td>
        <?php 
            if(isset($_SESSION["statut"]) && $_SESSION["statut"]=="Admin") 
                {echo '
                
        <td>
            <div class="d-flex flex-row">
                <form action="?controller=fournisseurs&action=fournisseur_update" method="POST">
                    <input type="hidden" name="id" class="form-control" id="hide" value="' .   $f->Id_fournisseur  .'">
                    <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button>
                </form>
                <form action="?controller=fournisseurs&action=fournisseur_delete" method="POST">
                    <input type="hidden" name="id" class="form-control" id="hide" value="' .   $f->Id_fournisseur  .'">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-trash-fill"></i></button>
                </form>
            </div>
        </td>';} 
       ?>  
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              