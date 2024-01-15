

<table id='table' class="table w-75 mx-auto">

    <thead>
        <th>Code fournisseur</th>
        <th>Raison Sociale</th>
        <th>Rue</th>
        <th>Code postal</th>
        <th>Localité</th>
        <th>Pays</th>
        <th>Tél</th>
        <th>Site web</th>
        <th>email</th>
        <th>Fax</th>
    </thead>
    
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
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