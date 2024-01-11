<h1>Bienvenue dans notre librairie</h1>


<?php

// if (isset($_SESSION["prenom"]) && isset($_SESSION["nom"]))  {

//     echo $_SESSION["prenom"] . $_SESSION["nom"];

// }

// echo "data" . "<br>";
// var_dump($data);

// echo "<br>";

if (isset($_SESSION['prenom'])) {

echo "Bonjour, " . $_SESSION['prenom'] . "&nbsp" . $_SESSION['nom'];


}

