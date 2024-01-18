
<section style="background-color: #eee;">

  <div class="container py-5">
    <form class= "" action="?controller=utilisateurs&action=utilisateur_fiche_update_requete" method="POST">

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="./Content/img/profile.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $utilisateur[0]->prenom . "&nbsp" . $utilisateur[0]->nom; ?></h5>
            <p class="text-muted mb-1"><?php echo $utilisateur[0]->Statut ?></p>
            <p class="text-muted mb-4"><?php echo $utilisateur[0]->localite ?></p>
            
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-github" style="color: #333333;"></i>
                <input type="text" name="github" class="form-control w-50" id="github" value="<?php echo $utilisateur[0]->github ?>">

            </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-instagram fa-lg" style="color: #ac2bac;"></i>
                <input type="text" name="insta" class="form-control w-50" id="insta" value="<?php echo $utilisateur[0]->insta ?>">

            </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-twitter-x fa-lg" style="color: #55acee;"></i>
                <input type="text" name="twitter" class="form-control w-50" id="twitter" value="<?php echo $utilisateur[0]->twitter ?>">

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
                <input type="text" name="nom" class="form-control" id="nom" value="<?php echo $utilisateur[0]->nom ?>">
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Prénom</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $utilisateur[0]->prenom ?>">
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="email" class="form-control" id="email"  value="<?php echo $utilisateur[0]->email ?>">
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date de naissance</p>
              </div>
              <div class="col-sm-9">
              <input type="date" name="date_naissance" class="form-control" id="date_naissance" value="<?php echo $utilisateur[0]->date_naissance ?>">
              </div>
            </div>
            
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Téléphone</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="tel" class="form-control" id="tel"  value="<?php echo $utilisateur[0]->tel ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Adresse</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="adresse" class="form-control" id="adresse" value="<?php echo $utilisateur[0]->adresse ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Code postal</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="code_postal" class="form-control" id="code_postal" value="<?php echo $utilisateur[0]->code_postal ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Localité</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="localite" class="form-control" id="localite" value="<?php echo $utilisateur[0]->localite ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Statut</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name="Statut" class="form-control" id="Statut" value="<?php echo $utilisateur[0]->Statut ?>" disabled>
              </div> 
              <input type="hidden" name="id" class="form-control" id="hide" value="<?php echo $_SESSION["id"] ?>">
                
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