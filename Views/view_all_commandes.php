<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table' class="table">
    <thead>
        <th>n° commande</th>
        <th>Titre</th>
        <th>Fournisseur</th>
        <th>date achat</th>
        <th>prix achat</th>
        <th>quantité</th>
        
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr>
        <td><?=$c->id_commande?></td>
        <td><?=$c->Titre_livre?></td>
        <td><?=$c->Raison_sociale?></td>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->Nbr_exemplaires?></td>
        
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              