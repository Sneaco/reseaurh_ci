		<!-- CONTAINER -->
		
			<div class="container d-flex flex-column align-items-center" id="Contenu">
				<h1><span class="vert">Inscription à l'activité</span></h1>
				<!-- (!) DESCRIPTION DE L'ACTIVITÉ -->
				<?php foreach($info as $row): ?>
					<h2><?= $row->nom; ?></h2>
					<h3><span class="vert"><?= $row->date; ?></span> <?= $row->lieu; ?></h3>
					<p><?= $row->description; ?></p>
				<?php endforeach; ?>
				<!-- FIN DESCRIPTION DE L'ACTIVITÉ -->
				<form class="form_membre">
					<div class="form-group">
						<label>Nom</label>
						<input class="form-control" type="text" placeholder="nom">
					</div>
					<div class="form-group">
						<label>Prénom</label>
						<input class="form-control" type="text" placeholder="prénom">
					</div>  
					<div class="form-group">
						<label>Courriel</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse courriel">
					</div>
					<div class="row justify-content-end">
						<button type="submit" class="btn btn-formulaire">annuler</button>
						<button type="submit" class="btn btn-formulaire">confirmer</button>
					</div>
				</form>
			</div>
		<!-- FIN CONTAINER -->