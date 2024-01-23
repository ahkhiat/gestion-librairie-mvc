<div class="w-75 mx-auto d-flex flex-column">
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
        <div class="align-self-end">
        <a href="?controller=commandes&action=commande_ajout"><button class="mt-3 btn btn-secondary">Ajouter une commande</button></a>
        </div>
    <table id='table' class="table table-striped">
    <thead>
        <th>Titre</th>
        <th>Fournisseur</th>
        <th>Editeur</th>
        <th>Date achat</th>
        <th>Prix achat</th>
        <th>Quantité</th>
        <th>Utilisateur</th>
        
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr>
        <td><?=$c->Titre_livre?></td>
        <td><?=$c->Raison_sociale?></td>
        <td><?=$c->Editeur?></td>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->Nbr_exemplaires?></td>
        <td><?=$c->prenom?></td>
        
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              