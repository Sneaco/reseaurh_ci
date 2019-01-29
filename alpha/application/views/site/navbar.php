		<!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="secondNav">
			<div class="container-fluid">
				<a href="#masthead" class="navbar-brand js-scroll-trigger">
					<img class="navbar-brand" src="<?= img_url('site/logo_nav_mdv2.png'); ?>" alt="logo reseau rh plus">
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars fa-2x"></i></button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto text-center">
						<?php foreach($menuPrincipaux as $menuP){
					    /** Requête pour vérifier si ce menu principale à des sous-menus **/ 
							$sousMenu = $this->site_model->sousMenu($menuP->id);;
							$add="";
								//S'il n'y en n'a pas !!	
								if(empty($sousMenu)){
									if(empty($menuP->personnalise))
										$add=$menuP->id;
									else
										$add=$menuP->personnalise;
									echo'<li class="nav-item"><a class="nav-link js-scroll-trigger" href="'.site_url('site/index/'.$add).'">'.$menuP->nom.'</a></li>'."\n";	
								}
								//S'il y en a !!
								else{
									echo '<li class="nav-item dropdown">
					        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$menuP->nom.'</a>'."\n".'<div class="dropdown-menu" aria-labelledby="navbarDropdown">'."\n";
					        		/** Affichage des sous-menus **/
									foreach($sousMenu as $sMenu){ 
										$add_sou="";
										if(empty($sMenu->personnalise))
											$add_sous=$sMenu->id;
										else
											$add_sous=$sMenu->personnalise;
										echo '<a class="dropdown-item" href="'.site_url('site/index/'.$add_sous).'">'.$sMenu->nom.'</a>'."\n";			 
									}
									echo '</div></li>';	
								}
							}
					    ?>
						<li class="nav-item">
							<button class="btn" id="btn_infolettre" data-toggle="modal" data-target="#loginModal" type="button">connexion</button>
						</li>
					</ul>
				</div><!-- FIN NavbarResponsive -->
			</div>
		</nav><!-- FIN NAVBAR -->
		