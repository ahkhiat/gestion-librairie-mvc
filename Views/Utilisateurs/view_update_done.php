

<!-- <?php

$_SESSION["email"] = $login[0]->email;
$_SESSION["nom"] = $login[0]->nom;
$_SESSION["prenom"] = $login[0]->prenom;
$_SESSION["id"] = $login[0]->idUtilisateur;
$_SESSION["statut"] = $login[0]->Statut;
$_SESSION["age"] = $login[0]->age;

// var_dump($login);
?> -->

<div class="w-25 mx-auto mt-5">
<h4>Bonjour <strong><?php echo $_SESSION["prenom"]; ?></strong>, vos données ont été mises à jour ! </h4>
</div>
