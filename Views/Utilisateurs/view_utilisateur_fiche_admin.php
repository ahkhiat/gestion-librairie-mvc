
<section style="background-color: #eee;">

<div class="pt-4 text-center">
  <p class="display-5">Mode administrateur</p>
</div>

  <div class="container py-5">
    <div class="d-flex justify-content-start mb-2">
      <a href="?controller=utilisateurs&action=all_utilisateurs"><button type="button" class="btn btn-secondary">Retour liste utilisateurs</button></a>
    </div>
    
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
                <p class="mb-0"><a href="http://www.github.com/<?php echo $utilisateur[0]->github ?>" target="_blank" style="text-decoration : none; color : inherit"><?php echo $utilisateur[0]->github ?></a></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0"><a href="http://www.instagram.com/<?php echo $utilisateur[0]->insta ?>" target="_blank" style="text-decoration : none; color : inherit"><?php echo $utilisateur[0]->insta ?></a></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-twitter-x fa-lg" style="color: #55acee;"></i>
                <p class="mb-0"><a href="http://www.twitter.com/<?php echo $utilisateur[0]->twitter ?>" target="_blank" style="text-decoration : none; color : inherit"><?php echo $utilisateur[0]->twitter ?></a></p>
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
                <p class="text-muted mb-0"><?php echo $utilisateur[0]->nom; ?></p>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Prénom</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $utilisateur[0]->prenom; ?></p>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $utilisateur[0]->email ; ?></p>
              </div>
            </div>
            
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Téléphone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $utilisateur[0]->tel ; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $utilisateur[0]->adresse . "&nbsp" .  $utilisateur[0]->code_postal . "&nbsp".  $utilisateur[0]->localite; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Statut</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $utilisateur[0]->Statut ?></p>
              </div>
            </div>

          </div>
        </div>

        <div class="d-flex justify-content-center mb-2">
              <a href="?controller=utilisateurs&action=utilisateur_fiche_admin_update&id=<?=$utilisateur[0]->idUtilisateur?>"><button type="button" class="btn btn-primary">Modifier</button></a>
              <a href="?controller=utilisateurs&action=delete_utilisateur&id=<?=$utilisateur[0]->idUtilisateur?>"><button type="button" class="btn btn-outline-danger ms-1" onclick="return confirmation()">Supprimer</button></a>
        </div>
        <!--
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
            -->

      </div>
    </div>
  </div>
</section>