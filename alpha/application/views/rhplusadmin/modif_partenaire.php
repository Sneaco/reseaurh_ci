		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
			</li>
			<li class="breadcrumb-item active">Modifier un partenaire</li>
		</ol>
		<!-- Contenu -->
		<div class="row">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-list"></i>
						<strong>Modifier</strong> un partenaire
					</div>
					<!-- Module : Modification d'un partenaire -->
					<div class="card-body">
					<?php foreach($info as $row): ?>
						<?= form_open("/rhplusadmin/ajout_modif/partenaire/".$row->id,["class" => "form-horizontal"]) ?>
							<div class="form-group">
								<label for="nom">Nom</label>
								<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'organisation" value="<?= $row->nom ?>" required>
							</div>
							<div class="form-group">
								<label for="lien">Lien</label>
								<input type="url" class="form-control" id="lien" name="lien" placeholder="Lien vers le site de l'organisation" value="<?= $row->lien ?>" pattern="https?://.+" required>
								<small id="lienAide" class="form-text text-muted">L'adresse doit commencer par "http://" ou "https://". On vous suggère de copier le lien à partir de la barre d'adresse de votre navigateur au lieu de le tapper manuellement.</small>
							</div>
							<button type="submit" id="action" name="action" class="btn btn-primary" value="Modifier">Modifier</button>
						<?= form_close() ?>
					<?php endforeach;?>
					</div><!-- FIN Module : Modification d'un partenaire -->
					<div class="card-footer">
						<a class="btn btn-secondary" href="<?= base_url('rhplusadmin/index/'); ?>" onclick="return(confirm('Êtes-vous certain d\'annuler les modifications apportées à ce partenaire ?'));">Annuler</a>
					</div>
				</div>
			</div>
      	</div><!-- FIN Contenu -->