<?php
$Id_Livre = $_POST["Id_Livre"];

?>

<table id='table' class="table">
    <thead>
        <th>ISBN</th>
        <th>Titre</th>
        <th>Theme</th>
        <th>Nombre de pages</th>
        <th>Format</th>
        <th>Nom de l'auteur</th>
        <th>Prénom</th>
        <th>Éditeur</th>
        <th>Année d'édition</th>
        <th>Prix</th>
        <th>Langue</th>
    </thead>
    
    <tr>
        <td><?=$livre->ISBN?></td>
        <td><?=$livre->Titre_livre?></td>
        <td><?=$livre->Theme_livre?></td>
        <td><?=$livre->Nbr_pages_livre?></td>
        <td><?=$livre->Format_livre?></td>
        <td><?=$livre->Nom_auteur?></td>
        <td><?=$livre->Prenom_auteur?></td>
        <td><?=$livre->Editeur?></td>
        <td><?=$livre->Annee_edition?></td>
        <td><?=$livre->Prix_vente?></td>
        <td><?=$livre->Langue_livre?></td>
       
    </tr>
</table>