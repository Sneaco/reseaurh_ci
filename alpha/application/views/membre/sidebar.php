      <!-- Sidebar -->
      <ul class="sidebar navbar-nav toggled">
        <?php foreach($menuPrincipaux as $menuP){
        /** Requête pour vérifier si ce menu principale à des sous-menus **/ 
          $sousMenu = $this->membre_model->sousMenu($menuP->id);;
          $add="";
        //S'il n'y en n'a pas !!  
          if(empty($sousMenu)){
            if(empty($menuP->personnalise))
              $add=$menuP->id;
            else
              $add=$menuP->personnalise;
            echo'<li class="nav-item"><a class="nav-link" href="'.site_url('membre/index/'.$add).'"><i class="fas fa-fw fa-'.$menuP->icone.'"></i><span>'.$menuP->nom.'</span></a></li>'."\n";
          }
        //S'il y en a !!
          else{
            echo'<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-'.$menuP->icone.'"></i><span>'.$menuP->nom.'</span></a>'."\n".'<div class="dropdown-menu" aria-labelledby="pagesDropdown">'."\n";
            /** Affichage des sous-menus **/
            foreach($sousMenu as $sMenu){
              $add_sou="";
              if(empty($sMenu->personnalise))
                $add_sous=$sMenu->id;
              else
                $add_sous=$sMenu->personnalise;
              echo '<a class="dropdown-item" href="'.site_url('membre/index/'.$add_sous).'">'.$sMenu->nom.'</a>'."\n";       
            }
            echo '</div></li>';  
          }
        }
        ?>  
        <li class="nav-item active">
          <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-times"></i>
            <span>Déconnexion</span>
          </a>
        </li>
      </ul><!-- FIN Sidebar -->

      <!-- #content-wrapper -->
      <div id="content-wrapper">
        <div class="container-fluid">