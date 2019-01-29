<!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			<div class="container-fluid">
				<a href="#masthead" class="navbar-brand js-scroll-trigger">
					<img class="navbar-brand" src="<?= img_url('site/logo_nav.png'); ?>" alt="logo reseau rh plus">
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

		<!-- CONTENU -->

		<!-- Head -->
		<header id="masthead" class="masthead">
			<div class="intro-body">
				<div class="container">
					<div class="col-12 d-sm-block d-md-none">
						<img src="<?= img_url('site/logoRH_rond.png'); ?>" class="img-fluid" alt="Responsive image">
					</div>
					<div class="row">
						<div class="col-lg-8 mx-auto">
							<h1 class="brand-heading text-drop">C'est <span class="vert"><strong>+</strong></span> qu'un <strong>réseau</strong></h1>
							<a href="#Accueil" class="btn btn-arrow js-scroll-trigger">
								<i class="fas fa-sort-down faa-bounce animated"></i>
							</a>
						</div><!-- FIN col-lg-8 -->
					</div><!-- FIN row -->
				</div><!-- FIN container -->
			</div><!-- FIN intro-body -->
		</header><!-- FIN head -->

		<!-- VIDÉOS -->
		<div class="container-fluid" id="Accueil">
			<h1 class="text-center">Le <span class="vert">Réseau RH +</span>, c'est quoi ?</h1>
			<div class="row justify-content-center">
				<div class="col video">
					<div style="" class="carousel slider">
						<div class="embed-responsive embed-responsive-16by9">
					    	<iframe class="embed-responsive-item iframe-lg" src="https://www.youtube.com/embed/FUWsDt9_Qvc?modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					    <div class="embed-responsive embed-responsive-16by9">
					    	<iframe class="embed-responsive-item iframe-lg" src="https://www.youtube.com/embed/MKkywj2BWQQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					    </div>
				  	</div>
					<iframe class="iframe-md" style="display: none;" class="embed-responsive-item" src="https://www.youtube.com/embed/FUWsDt9_Qvc?modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				  	<iframe class="iframe-md" style="display: none;" class="embed-responsive-item" src="https://www.youtube.com/embed/MKkywj2BWQQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div><!-- FIN VIDÉOS -->

		<!-- ACTVITÉS -->
		<div class="container">	
			<div class="row">
				<div class="col-lg-5 evenement">
					<h2 class="text-center"><span class="vert">Activités à venir</span></h2>
					<p class="text-md-center text-lg-left"><strong>23 octobre</strong> - Bowling, Jonquière QC</p>
					<p class="text-md-center text-lg-left"><strong>31 octobre</strong> - Pary d'Halloween</p>
					<p class="text-md-center text-lg-left"><strong>6 mai</strong> - Souper conférence, Chicoutimi QC</p>
				</div>		
				<div class="col-md-2 ligne-verticale d-none d-lg-block"><hr></div>
				<div class="col-md-12 mx-auto col-lg-5 calendrier">
					<h2 class="text-center"><span class="vert">Calendrier</span></h2>
					<div class="table-responsive-sm">
						<table class="table">
							<caption><strong>Octobre</strong> 2019</caption>
							<thead>
								<tr>
									<th>Dim</th>
									<th>Lun</th>
									<th>Mar</th>
									<th>Mer</th>
									<th>Jeu</th>
									<th>Ven</th>
									<th>Sam</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
									<td>5</td>
									<td>6</td>
									<td>7</td>
								</tr>
								<tr>
									<td>8</td>
									<td>9</td>
									<td>10</td>
									<td>11</td>
									<td>12</td>
									<td>13</td>
									<td>14</td>
								</tr>
								<tr>
									<td>15</td>
									<td>16</td>
									<td>17</td>
									<td>18</td>
									<td>19</td>
									<td>20</td>
									<td>21</td>
								</tr>
								<tr>
									<td>22</td>
									<td class="act_prevu">23</td>
									<td>24</td>
									<td>25</td>
									<td>26</td>
									<td>27</td>
									<td>28</td>
								</tr>
								<tr>
									<td>29</td>
									<td>30</td>
									<td class="act_prevu">31</td>
									<td>x</td>
									<td>x</td>
									<td>x</td>
									<td>x</td>
								</tr>
							<tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!-- FIN ACTVITÉS -->
		
		<!-- FIN CONTENU -->
	