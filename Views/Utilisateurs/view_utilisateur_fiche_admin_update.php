
<section style="background-color: #eee;">

<div class="pt-4 text-center">
  <p class="display-5">Mode administrateur</p>
</div>


  <div class="container py-5">
    <div class="d-flex justify-content-start mb-2">
    <a href="?controller=utilisateurs&action=all_utilisateurs"><button type="button" class="btn btn-secondary">Retour liste utilisateurs</button></a>
    </div>

    <form class= "" action="?controller=utilisateurs&action=update_utilisateur_admin_requete" method="POST">

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="./Content/img/profile.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $utilisateur[0]->prenom . "&nbsp" . $utilisateur[0]->nom; ?></h5>
            <!-- <p class="text-muted mb-1"><?php echo $utilisateur[0]->Statut ?></p>
            <p class="text-muted mb-4"><?php echo $utilisateur[0]->localite ?></p> -->
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-github" style="color: #333333;"></i>
                <input type="text" name="github" class="form-control w-50" id="github" aria-describedby="github" value="<?php echo $utilisateur[0]->github ?>">

            </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-instagram fa-lg" style="color: #ac2bac;"></i>
                <input type="text" name="insta" class="form-control w-50" id="insta" aria-describedby="insta" value="<?php echo $utilisateur[0]->insta ?>">

            </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-twitter-x fa-lg" style="color: #55acee;"></i>
                <input type="text" name="twitter" class="form-control w-50" id="twitter" aria-describedby="twitter" value="<?php echo $utilisateur[0]->twitter ?>">

            </li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nom</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $utilisateur[0]->nom ?>">
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Prénom</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" value="<?php echo $utilisateur[0]->prenom ?>">
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="email" class="form-control" id="email" aria-describedby="email" value="<?php echo $utilisateur[0]->email ?>">
              </div>
            </div>
            
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Téléphone</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="tel" class="form-control" id="tel" aria-describedby="tel" value="<?php echo $utilisateur[0]->tel ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="adresse" class="form-control" id="adresse" aria-describedby="adresse" value="<?php echo $utilisateur[0]->adresse ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Code postal</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="code_postal" class="form-control" id="code_postal" aria-describedby="code_postal" value="<?php echo $utilisateur[0]->code_postal ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Localité</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="localite" class="form-control" id="localite" aria-describedby="localite" value="<?php echo $utilisateur[0]->localite ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Statut</p>
              </div>
              <div class="col-sm-9">
                    <select name="Statut" id="Statut" class="form-control">
                        <option value="Admin" <?php if($utilisateur[0]->Statut=="Admin") echo 'selected'; ?>>Admin</option>
                        <option value="Utilisateur" <?php if($utilisateur[0]->Statut=="Utilisateur") echo 'selected'; ?>>Utilisateur</option>
                    </select>
              </div> 
              <input type="hidden" name="id" class="form-control" id="hide" value="<?php echo $utilisateur[0]->idUtilisateur ?>">
                
            </div>

          </div>
        </div>

        <div class="d-flex justify-content-center mb-2">
              <button type="submit" class="btn btn-primary">Confirmer</button>
              <!-- <button type="button" class="btn btn-outline-danger ms-1">Supprimer</button> -->
        </div>
      </div>
    </div>

    </form>

  </div>
</section>