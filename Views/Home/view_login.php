<!-- <script>location.reload();</script> -->

<?php


$_SESSION["nom"] = $login[0]->nom;
$_SESSION["prenom"] = $login[0]->prenom;
$_SESSION["id"] = $login[0]->idUtilisateur;
$_SESSION["statut"] = $login[0]->Statut;
$_SESSION["age"] = $login[0]->age;

// var_dump($login);

?>

<div class="w-25 mx-auto mt-5">
<h4>Bonjour <strong><?php echo $_SESSION["prenom"]; ?></strong>, ça fait un bail ! </h4>
</div>

<script>setTimeout(() => {
window.location.href = '?controller=home&action=home';

}, 2000);</script>



