

<table id='table' class="table w-75 mx-auto">

    <thead>
        <th>Titre</th>
        <th>Fournisseur</th>
        <th>Editeur</th>
        <th>Date achat</th>
        <th>Prix achat</th>
        <th>Quantité</th>
        
    </thead>
    
    <?php  foreach($commandes as $c ): ?>
    <tr>
        <td><?=$c->Titre_livre?></td>
        <td><?=$c->Raison_sociale?></td>
        <td><?=$c->Editeur?></td>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->Nbr_exemplaires?></td>
        
       
    </tr>
    <?php endforeach; ?>

</table>