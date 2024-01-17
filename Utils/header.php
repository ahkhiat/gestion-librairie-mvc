<!-- header.php -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="./Content/style.css"> 
    <script src="./Content/script.js" defer></script>
    <title>Document</title>
</head>
<body>
<div class="container pt-5">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-light" >

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
            if(isset ($_SESSION["nom"])) // Display if user is LOGGED
              {
                include("headerUtilisateur.php");
              }
        ?>

        <?php   // --------------- Display User menu if user is ADMIN ------------------
            if(isset($_SESSION["statut"]) && $_SESSION["statut"]=="Admin")  
            {echo '<li class="nav-item">
                  <a class="nav-link" href="?controller=utilisateurs&action=all_utilisateurs">Utilisateurs</a>
                  </li>';} 
        ?>


      </ul>
      <!-- ---------------------- Light Dark mode function, call a js script -------------->
      <button class="btn btn-rounded" id="theme" onclick="myFunction()"><i class="bi bi-moon-fill"></i></button>

       
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
        <?php    // ------------ Display if user is ADMIN -------------
            if(isset($_SESSION["statut"]) && $_SESSION["statut"]=="Admin")  
            {echo "<strong><a class='nav-link text-danger' id='admin'>Mode Administrateur</a></strong>";} 
        ?>
        </li>

        <li class="nav-item"> <!--   Display name's initials & click to update     -->
            <a class="nav-link" href="?controller=utilisateurs&action=utilisateur_fiche"><?php if(isset ($_SESSION["nom"])) {echo "<strong>" . substr($_SESSION["prenom"], 0, 1) . substr($_SESSION["nom"], 0, 1) . "</strong>";}?> </a>
        </li> 
        <li>
          <?php  // ---------- Login & logout link ----------
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


</div>
</body>
</html>