<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="liens" href="?controller=livres&action=all_livres">Livres </a>
        <ul class="sous">
          <li><a class="nav-link active" href="?controller=livres&action=all_livres">Tous les livres</a></li>
        </ul>
      </li>
      <li class="nav-item"><a class="liens" href="?controller=fournisseurs&action=all_fournisseurs">Fournisseurs</a>
        <ul class="sous">
          <li><a class="nav-link active" href="?controller=fournisseurs&action=all_fournisseurs">Tous les Fournisseurs</a></li>
        </ul>
      </li>
        
      <li class="nav-item"><a class="liens" href="?controller=commandes&action=all_commandes">Commandes</a>
        <ul class="sous">
          <li><a class="nav-link active" href="?controller=commandes&action=all_commandes">Toutes les commandes</a></li>
        </ul>
      </li>
      </div>
      </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Librairie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=livres&action=all_livres">Livres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=fournisseurs&action=all_fournisseurs">Fournisseurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=commandes&action=all_commandes">Commandes</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>