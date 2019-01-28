		<!-- MODAL DE CONNEXION -->
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body flex-column d-flex align-items-center">
						<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h2 class="modal-title" id="loginModalLabel">connexion</h2>
						<!--<form style="width: 50%;">
							<div class="form-group">
								<input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="adresse courriel">
							</div>
							<div class="form-group">
								<input required type="password" class="form-control" id="exampleInputPassword1" placeholder="mot de passe">
							</div>
							<button type="button" class="btn btn-lg btn-block btn-modal">se connecter</button> <br>
						</form>-->
						<?= form_open('/site/login',["style" => "width: 50%;"]); ?>
							<div class="form-group">
								<input type="text" id="utilisateur" name="utilisateur" class="form-control" placeholder="Nom d'utilisateur" required="required" autofocus="autofocus">
							</div>
							<div class="form-group">
								<input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe" required="required">
							</div>
							<button type="submit" class="btn btn-lg btn-block btn-modal">se connecter</button>
						<?php
							echo form_close();
							echo @$error_credentials;
						?>
						<a href="" class="lien_abonnement">vous n'êtes pas membre ?</a>
					</div>
				</div>
			</div>
		</div><!-- FIN MODAL DE CONNEXION -->

		<!-- FOOTER -->
		<div id="content_footer" class="container-fluid d-flex flex-column justify-content-end">	
			<footer class="container-fluid">
				<div class="fond_slider d-none d-md-block">
					<div class="col-10 mx-auto carousel_partenaire slider">
					<?php for($i=0;$i<10;$i++): ?>
						<div class="partenaire">
							<img src="<?= img_url('site/logoBetN.png'); ?>" class="img-fluid logo_partenaire" alt="Responsive image">
						</div>
					<?php endfor; ?>
					</div>
				</div>
				<div class="fond_slider d-xs-block d-sm-block d-md-none d-lg-none d-xl-none align-items-center">
					<div class="col-10 mx-auto carousel_partenaire_responsive slider">
					<?php for($i=0;$i<10;$i++): ?>
						<div class="partenaire">
							<img src="<?= img_url('site/logoBetN.png'); ?>" class="img-fluid logo_partenaire" alt="Responsive image">
						</div>
					<?php endfor; ?>
					</div>
				</div>
				<div class="container">
					<div class="row_footer row">
						<!-- FOOTER LG à XL -->
						<div class="col-lg-4 d-none d-lg-block">
							<img src="<?= img_url('site/logoFINAL_RH+_BetN.png'); ?>" class="logo_rh_blanc img-fluid" alt="Logo réseau rh plus blanc">
						</div>
						<div class="footer_section col-lg-4 d-none d-lg-block">
							<ul class="second_nav nav flex-column">
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
							</ul>
						</div>
						<div class="footer_section col-lg-4 d-none d-lg-block">
							<h3>Média sociaux</h3>
							<img src="<?= img_url('site/link_facebook.png'); ?>" class="img_link img-fluid" alt="lien facebook">
							<img src="<?= img_url('site/link_linkedin.png'); ?>" class="img_link img-fluid" alt="lien linkedin">
							<h3>Abonnez-vous à notre <span class="vert">infolettre</span></h3>

							<div class="input-group mb-3">
								<input type="text"class="form-control" id="infolettre" placeholder="Votre adresse courriel ..." aria-label="Recipient's username" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" id="btn_infolettre" type="button">envoyer</button>
								</div>
							</div>
						</div>
						<!-- FIN FOOTER LG à XL -->			
						<!-- FOOTER MD à SM -->		
						<div class="footer_section_responsive col-12 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
							<img src="<?= img_url('site/logoFINAL_RH+_BetN.png'); ?>" class="logo_rh_blanc_responsive img-fluid" alt="Logo réseau rh plus blanc">
						</div>
						<div class="footer_section_responsive col-12 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
							<div class="nav_footer_responsive">
								<ul class="second_nav_responsive nav flex-column">
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
								</ul>
							</div>
						</div>		
						<div class="footer_section_responsive col-12 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
							<h3 class="h3_infolettre_responsive">Abonnez-vous à notre <span class="vert">infolettre</span></h3>
							<div class="input-group mb-3">
								<input type="text"class="form-control" id="infolettre_responsive" placeholder="Votre adresse courriel ..." aria-label="Recipient's username" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<button class="btn" id="btn_infolettre_responsive" type="button">envoyer</button>
								</div>
							</div>
						</div>
						<div class="footer_section_responsive_reseau_sociaux col-12 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
							<h3 class="media_sociaux">Média sociaux</h3>
							<img src="<?= img_url('site/link_facebook.png'); ?>" class="img_link_responsive img-fluid" alt="lien facebook">
							<img src="<?= img_url('site/link_linkedin.png'); ?>" class="img_link_responsive img-fluid" alt="lien linkedin">
						</div>
						<!-- FIN FOOTER MD à SM -->
					</div>
					<p class="copyright"><span class="vert">Tous droits réservés</span><span class="blanc"> © AbrakadaWeb </span><span class="vert">2019</span></p>
				</div>
			</footer>
		</div><!-- FIN FOOTER -->

		<!-- jQuery 3.3.1 -->
	    <script src="<?= js_url('jquery/jquery-2.2.0.min'); ?>"></script>
	    <!-- <script src="js/jquery.easing.min.js"></script> -->
	    <!-- Bootstrap -->
	    <script src="<?= js_url('bootstrap/bootstrap.bundle.min'); ?>"></script>
		<!-- Slick -->
		<script src="<?= js_url('slick/slick.min'); ?>"></script>
		<!-- Javascript personnalisés -->
		<script src="<?= js_url('site/myjs'); ?>"></script>
		<script type="text/javascript">
			$(document).on('ready', function() {  
			/* Slick */
				$(".carousel").slick({
					lazyLoad: 'ondemand', // ondemand progressive anticipated
					infinite: true
				});
				$(".carousel_partenaire").slick({
	        		lazyLoad: 'ondemand', // ondemand progressive anticipated
	        		infinite: true,
	        		slidesToShow: 5,
	       			slidesToScroll: 5
	    		});
				$(".carousel_partenaire_responsive").slick({
	        		lazyLoad: 'ondemand', // ondemand progressive anticipated
	        		infinite: true,
	        		slidesToShow: 3,
	        		slidesToScroll: 3
	    		}); 
			});
		</script>
	</body>
</html>