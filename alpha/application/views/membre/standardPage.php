          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Accueil</a>
            </li>
            <li class="breadcrumb-item active">Aide</li>
            <li class="breadcrumb-item active"><?= $result[0]->nom ?></li>
          </ol>
          <!-- CONTENU -->
          <div class="col-lg-8 mx-auto">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-exclamation-circle"></i>
                <?= $result[0]->nom ?>
              </div>
              <div class="card-body">
                <?= $result[0]->contenu ?>
              </div>
            </div>
          </div>