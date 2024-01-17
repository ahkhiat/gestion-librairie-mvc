
<?php


$_SESSION["nom"] = $login[0]->nom;
$_SESSION["email"] = $login[0]->email;
$_SESSION["prenom"] = $login[0]->prenom;
$_SESSION["id"] = $login[0]->idUtilisateur;
$_SESSION["statut"] = $login[0]->Statut;
$_SESSION["adresse"] = $login[0]->adresse;
$_SESSION["code_postal"] = $login[0]->code_postal;
$_SESSION["localite"] = $login[0]->localite;
$_SESSION["tel"] = $login[0]->tel;
$_SESSION["github"] = $login[0]->github;
$_SESSION["insta"] = $login[0]->insta;
$_SESSION["twitter"] = $login[0]->twitter;
$_SESSION["Date"] = $login[0]->Date;


?>

<div class="w-25 mx-auto mt-5">
<h4>Bonjour <strong><?php echo $_SESSION["prenom"]; ?></strong>, ça fait un bail ! </h4>
</div>

<!-- <script>setTimeout(() => {
window.location.href = '?controller=home&action=home';

}, 2000);</script> -->



