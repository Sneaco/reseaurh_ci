          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Accueil</li>
          </ol>
          <!-- CONTENU -->
          <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
              <!-- Message du jour -->
              <div class="card mb-3 text-center">
                <div class="card-header">
                  <h5 class="mb-0">Message du jour</h5>
                </div>
                <div class="card-body">
                <?php foreach($info1 as $row): ?>
                  <?= $row->message; ?>
                <?php endforeach; ?>
                </div>
              </div><!-- FIN Message du jour -->
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <!-- Appels à tous -->
            <div class="col-12 col-lg-5">
              <div class="card mb-3">
                <div class="card-header">
                  <h3 class="text-center mb-0">Appels à tous</h3>
                </div>
              </div>
              <div class="list-group mb-3">
              <?php foreach($info2 as $row): ?>
                <a href="" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h5>Exemple d'appel à tous</h5>
                    <small>Comentaires <span class="badge badge-primary badge-pill">0</span></small>
                  </div>
                  <h6 class="mb-2 text-muted">2018-12-31</h6>
                  <small>Par <strong>Cassegrain, Ginette</strong></small>
                </a>
              <?php endforeach; ?>
              </div>
            </div><!-- FIN Appels à tous -->
            <!-- Activités à venir -->
            <div class="col-12 col-lg-5">
              <div class="card mb-3">
                <div class="card-header">
                  <h3 class="text-center mb-0">Activités à venir</h3>
                </div>
              </div>
              <div class="list-group mb-3">
              <?php foreach($info3 as $row): ?>
                <a href="activites_inscrip.php" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h5>Souper spaghetti</h5>
                    <h6>Jonquière</h6>
                  </div>
                  <h6 class="mb-2 text-muted">2018-12-31</h6>
                </a>
              <?php endforeach; ?>
              </div>
            </div><!-- FIN Activités à venir -->
          </div><!-- FIN Contenu -->