      <!-- Sidebar -->
      <ul class="sidebar navbar-nav toggled">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('rhplusadmin/index/'); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Accueil</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-list"></i>
            <span>Menus</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?= base_url('rhplusadmin/menu/prin'); ?>">Menus principaux</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('rhplusadmin/menu/sec'); ?>">Menus secondaires</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Appels à tous</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?= base_url('rhplusadmin/index/appel'); ?>">Appels</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('rhplusadmin/index/commentaire'); ?>">Commentaires</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('rhplusadmin/index/activite'); ?>">
            <i class="fas fa-fw fa-calendar-plus"></i>
            <span>Activités</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('rhplusadmin/index/membre'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Membres</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('rhplusadmin/index/courriel'); ?>">
            <i class="fas fa-fw fa-at"></i>
            <span>Courriels</span>
          </a>
        </li>
        <hr class="menu-divider">
        <li class="nav-item active">
          <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-times"></i>
            <span>Déconnexion</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-file-pdf"></i>
            <span>Procédurier</span>
          </a>
        </li>
      </ul><!-- FIN Sidebar -->

      <!-- #content-wrapper -->
      <div id="content-wrapper">
        <div class="container-fluid">