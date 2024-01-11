<?php

$_SESSION["nom"] = $login[0]->nom;
$_SESSION["prenom"] = $login[0]->prenom;
$_SESSION["id"] = $login[0]->idUtilisateur;
$_SESSION["statut"] = $login[0]->Statut;

?>

<div class="w-25 mx-auto mt-5">
<h4>Bonjour <strong><?php echo $_SESSION["prenom"]; ?></strong>, ça fait un bail ! </h4>
</div>
