<!-- Header acceuil -->	
	<header class="jumbotron jumbotron-fluid">
		<div class="container text-center">
			<h1 class="display-4">Réseau RH+</h1>
			<p class="lead">C'est <strong>+</strong> qu'un réseau!</p>
		</div>
	</header>
<!-- Caroussel -->
	<section class="row text-center">
		<div class="col">
			<h2>Le Réseau RH+, c'est quoi?</h2>
			<hr>
			<div id="carouselAccueil" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselAccueil" data-slide-to="0" class="active"></li>
					<li data-target="#carouselAccueil" data-slide-to="1"></li>
					<li data-target="#carouselAccueil" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo images_url('slide1.svg'); ?>" alt="Première slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Première slide</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo images_url('slide2.svg'); ?>" alt="Deuxième slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Deuxième slide</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo images_url('slide3.svg'); ?>" alt="Troisième slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Troisième slide</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselAccueil" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Précédent</span>
				</a>
				<a class="carousel-control-next" href="#carouselAccueil" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Suivant</span>
				</a>
			</div>
		</div>
	</section>
