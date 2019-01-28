<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
			</li>
			<li class="breadcrumb-item">
				<a href="<?= base_url('rhplusadmin/index/appel'); ?>">Appels</a>
			</li>
			<li class="breadcrumb-item active">Modifier un appel à tous</li>
		</ol>
		<!-- Contenu -->
		<div class="row">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-bullhorn"></i>
						<strong>Modifier</strong> un appel à tous
					</div>
					<!-- Module : Modification d'une activité -->
					<div class="card-body">
					<?php foreach($info as $row): ?>
						<?= form_open("/rhplusadmin/ajout_modif/appel",["class" => "form-horizontal"]) ?>
							<h5 class="card-title"><strong>Ajouter</strong> un appel</h5>
							<div class="form-group">
								<label for="titre">Titre</label>
								<input type="text" class="form-control" id="titre" name="titre" placeholder="Titre de l'appel" value="<?= $row->titre ?>" required>
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="tinymce-basique" id="description" name="description"><?= $row->description ?></textarea>
							</div>
							<div class="form-group">
								<label for="description">Fichier</label>
								<input type="file" class="form-control" id="fichier" name="fichier" value="<?= $row->fichier ?>">
							</div>
							<input type="hidden" id="id_membre" name="id_membre" value="<?= $row->id_membre ?>">
							<button type="submit" id="action" name="action" class="btn btn-primary" value="Modifier">Modifier</button>
						<?= form_close() ?> 
					<?php endforeach;?>
					</div><!-- FIN Module : Modification d'une activité -->
					<div class="card-footer">
						<a class="btn btn-secondary" href="<?= base_url('rhplusadmin/index/activite'); ?>" onclick="return(confirm('Êtes-vous certain d\'annuler les modifications apportées à cet appel ?'));">Annuler</a>
					</div>
				</div>
			</div>
      	</div><!-- FIN Contenu -->