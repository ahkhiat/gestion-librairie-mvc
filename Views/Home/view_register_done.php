<?php


$_SESSION["email"] = $register[0]->email;
$_SESSION["nom"] = $register[0]->nom;
$_SESSION["prenom"] = $register[0]->prenom;
$_SESSION["id"] = $register[0]->idUtilisateur;
$_SESSION["statut"] = $register[0]->Statut;
$_SESSION["date_naissance"] = $register[0]->date_naissance;
$_SESSION["adresse"] = $register[0]->adresse;
$_SESSION["code_postal"] = $register[0]->code_postal;
$_SESSION["localite"] = $register[0]->localite;
$_SESSION["tel"] = $register[0]->tel;
$_SESSION["github"] = $register[0]->github;
$_SESSION["insta"] = $register[0]->insta;
$_SESSION["twitter"] = $register[0]->twitter;
$_SESSION["Date"] = $register[0]->Date;


// var_dump($login);

?>

<div class="w-25 mx-auto mt-5">
<h4>Bonjour <strong><?php echo $_SESSION["prenom"]; ?></strong>, votre compte est crée ! </h4>
</div>

<script>setTimeout(() => {
window.location.href = '?controller=home&action=home';

}, 2000);</script>
