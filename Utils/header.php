<!-- header.php -->
<?php
session_start();

// if (isset($login->nom) && $login->prenom) {
// $nom = $login->nom;
// $prenom = $login->prenom;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-light navbar-expand-lg " style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controller=home">Ma librairie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?controller=home">Home</a>
        </li>

        <?php
        if(isset ($_SESSION["nom"])) 
        {echo '
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livres
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?controller=livres&action=all_livres">Tous les livres</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=livre_titre">Chercher par nom</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=livre_auteur">Chercher par auteur</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=livre_editeur">Chercher par éditeur</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fournisseurs
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=all_fournisseurs">Tous les fournisseurs</a></li>
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseur_nom">Chercher par nom</a></li>
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseur_ville">Chercher par ville</a></li>
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseur_pays">Chercher par pays</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Commandes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?controller=commandes&action=all_commandes">Toutes les commandes</a></li>
            <li><a class="dropdown-item" href="?controller=commandes&action=commande_editeur">Chercher par éditeur</a></li>
            <li><a class="dropdown-item" href="?controller=commandes&action=commande_fournisseur">Chercher par fournisseur</a></li>
            <li><a class="dropdown-item" href="?controller=commandes&action=commande_date">Chercher par date</a></li>

          </ul>
        </li>
        
        

         ';} ?>
         <?php 
            if(isset($_SESSION["statut"]) && $_SESSION["statut"]=="Admin") 
            {echo '<li class="nav-item">
                  <a class="nav-link" href="?controller=utilisateurs&action=all_utilisateurs">Utilisateurs</a>
                  </li>';} 
        ?>


      </ul>

       
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="?controller=utilisateurs&action=update_utilisateur"><?php if(isset ($_SESSION["nom"])) {echo "<strong>" . substr($_SESSION["prenom"], 0, 1) . substr($_SESSION["nom"], 0, 1) . "</strong>";}?> </a>
        </li> 
        <li>
          <?php 
              if(isset ($_SESSION["nom"]))
              {
                echo "<a class='nav-link' href='?controller=home&action=deconnexion'>Deconnexion</a>";
              } else {
                echo "<a class='nav-link' href='?controller=home&action=connexion'>Connexion</a>";
              } ?>
        </li>
        </ul>
      </div>

    </div>
  </div>
</nav>



</body>
</html>