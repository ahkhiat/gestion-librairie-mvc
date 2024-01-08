<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table' class="table">
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
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              