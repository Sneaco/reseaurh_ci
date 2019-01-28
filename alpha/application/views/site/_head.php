<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<meta http-equiv ="X-UA-Compatible" content ="IE=edge">
	<meta name="viewport" content ="width=device-width,initial-scale=1">
	<title>Réseau RH+</title>
	<!-- Bootstrap -->
    <link href="<?php echo css_url('bootstrap/bootstrap.min'); ?>" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
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
				echo'<li class="nav-item"><a class="nav-link" href="'.site_url('site/index/'.$add).'">'.$menuP->nom.'</a></li>'."\n";	
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
  		Login
	</button>
  </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('/site/login'); ?>
			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="utilisateur" name="utilisateur" class="form-control" placeholder="Nom d'utilisateur" required="required" autofocus="autofocus">
					<label for="utilisateur">Nom d'utilisateur</label>
				</div>
			</div>
			<div class="form-group">
				<div class="form-label-group">
					<input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe" required="required">
					<label for="mdp">Mot de passe</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Se connecter</button>
		<?php
			echo form_close();
			echo @$error_credentials;
		?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>
<div class="container">