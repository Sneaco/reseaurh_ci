          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
            </li>
            <li class="breadcrumb-item active">Menus</li>
            <li class="breadcrumb-item active">Menus principaux</li>
          </ol>
          <!-- Contenu -->
          <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-list"></i>
                  Gestions des menus principaux
                </div>
                <!-- Module : Gestion des menus principaux -->
                <div class="card-body">
                  <h5 class="card-title">Espace publique</h5>
                  <ul id="liste_menu_pub" class="list-group sortable">
                  <?php foreach($info1 as $row): ?>
                    <li id="<?= $row->id; ?>" class="ui-state-default list-group-item d-flex align-items-center">
                      <i class="fas fa-arrows-alt-v mr-3"></i></i><?= $row->nom; ?><a class='ml-auto' href='http://reseaurhplus.com/beta/rhplusadmin/modifier/menu/<?= $row->id; ?>/principal'><i class='fas fa-edit ml-auto'></i></a>
                    </li>
                  <?php endforeach;?>
                  </ul>
                  <hr>
                  <h5 class="card-title">Espace réservé aux membres</h5>
                  <ul id="liste_menu_priv" class="list-group sortable">
                  <?php foreach($info2 as $row): ?>
                    <li id="<?= $row->id; ?>" class="ui-state-default list-group-item d-flex align-items-center">
                      <i class="fas fa-arrows-alt-v mr-3"></i></i><?= $row->nom; ?><a class='ml-auto' href='http://reseaurhplus.com/beta/rhplusadmin/modifier/menu/<?= $row->id; ?>/principal'><i class='fas fa-edit ml-auto'></i></a>
                    </li>
                  <?php endforeach;?>
                  </ul>
                </div><!-- FIN Module : Gestion des menus principaux -->
              </div>
            </div>
          </div><!-- FIN Contenu -->