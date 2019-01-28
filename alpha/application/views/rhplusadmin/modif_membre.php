		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
			</li>
			<li class="breadcrumb-item">
				<a href="<?= base_url('rhplusadmin/index/membre'); ?>">Activités</a>
			</li>
			<li class="breadcrumb-item active">Modifier un membre</li>
		</ol>
		<!-- Contenu -->
		<div class="row">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-list"></i>
						<strong>Modifier</strong> un membre
					</div>
					<!-- Module : Modification d'une activité -->
					<div class="card-body">
					<?php foreach($info as $row): ?>
						<?= form_open("/rhplusadmin/ajout_modif/membre/".$row->id,["class" => "form-horizontal"]) ?>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="nom">Nom</label>
									<input type="prenom" class="form-control" id="nom" name="nom" placeholder="Nom du membre" required>
								</div>
								<div class="form-group col-md-6">
									<label for="prenom">Prénom</label>
									<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom du membre" required>
								</div>
								<div class="form-group col-md-6">
									<label for="id_region">Région</label>
									<select class="form-control" id="id_region">
									<?php foreach($info2 as $row): ?>
										<option value="<?= $row->id; ?>"><?= $row->nom; ?></option>
									<?php endforeach;?>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label for="ville">Ville</label>
									<input type="text" class="form-control" id="ville" name="ville" placeholder="Ville où réside le membre" required>
								</div>
							</div>
							<hr>
							<div class="form-group form-check col-12">
								<input type="checkbox" class="form-check-input" id="si_emploi">
								<label class="form-check-label" for="si_emploi"><strong>A un emploi</strong></label>
							</div>
							<div class="form-row" id="formEmploi" name="formEmploi" style="display: none">
								<div class="form-group col-md-6">
									<label for="nom_organi">Organisation</label>
									<input type="text" class="form-control" id="nom_organi" name="nom_organi" placeholder="Nom de l'organisation" required>
								</div>
								<div class="form-group col-md-6">
									<label for="titre">Titre professionnel</label>
									<input type="text" class="form-control" id="titre" name="titre" placeholder="Titre professionnel" required>
								</div>
							</div>
							<hr>
							<div class="form-row">
								<div class="form-group col-10 col-md-6">
									<label for="courriel_pro">Courriel professionnel</label>
									<input type="email" class="form-control" id="courriel_pro" name="courriel_pro" placeholder="Courriel professionnel">
								</div>
								<div class="form-group col-2 col-md-6 d-flex align-items-center">
									<div class="form-check">
									<input class="form-check-input d-inline" type="radio" name="courriel_utilise" id="courriel_utilise1" value="professionnel" required>
									</div>
								</div>
								<div class="form-group col-10 col-md-6">
									<label for="courriel_perso">Courriel personnel</label>
									<input type="email" class="form-control" id="courriel_perso" name="courriel_perso" placeholder="Courriel personnel">
								</div>
								<div class="form-group col-2 col-md-6 d-flex align-items-center">
									<div class="form-check">
										<input class="form-check-input d-inline" type="radio" name="courriel_utilise" id="courriel_utilise2" value="personnel" required>
									</div>
								</div>
							</div>
							<div class="form-row flex-column">
							<?php for($i = 1; $i <= 3; $i++): ?>
								<div class="form-group col-md-6">
									<label for="tel<?= $i; ?>">Téléphone <?= $i ;?></label>
									<input type="text" pattern="[\(]\d{3}[\)] \d{3}[\-]\d{4}" class="form-control" id="tel<?= $i; ?>" name="tel<?= $i; ?>" placeholder="(xxx) xxx-xxxx">
								</div>
							<?php endfor; ?>
							</div>
						<?= form_close() ?>
					<?php endforeach;?>
					</div><!-- FIN Module : Modification d'une activité -->
					<div class="card-footer">
						<a class="btn btn-secondary" href="<?= base_url('rhplusadmin/index/membre'); ?>" onclick="return(confirm('Êtes-vous certain d\'annuler les modifications apportées à ce membre ?'));">Annuler</a>
					</div>
				</div>
			</div>
      	</div><!-- FIN Contenu -->