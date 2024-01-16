<?php


$_SESSION["email"] = $register[0]->email;
$_SESSION["nom"] = $register[0]->nom;
$_SESSION["prenom"] = $register[0]->prenom;
$_SESSION["id"] = $register[0]->idUtilisateur;
$_SESSION["statut"] = $register[0]->Statut;
$_SESSION["age"] = $register[0]->age;

// var_dump($login);

?>

<div class="w-25 mx-auto mt-5">
<h4>Bonjour <strong><?php echo $_SESSION["prenom"]; ?></strong>, votre compte est crée ! </h4>
</div>

<!-- <script>setTimeout(() => {
window.location.href = '?controller=home&action=home';

}, 2000);</script> -->
