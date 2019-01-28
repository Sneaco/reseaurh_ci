		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
			</li>
			<li class="breadcrumb-item">
				<a href="<?= base_url('rhplusadmin/index/activite'); ?>">Activités</a>
			</li>
			<li class="breadcrumb-item active">Modifier une activité</li>
		</ol>
		<!-- Contenu -->
		<div class="row">
			<div class="col-12 col-lg-10 mx-auto">
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-list"></i>
						<strong>Modifier</strong> une activité
					</div>
					<!-- Module : Modification d'une activité -->
					<div class="card-body">
					<?php foreach($info as $row): ?>
						<?= form_open("/rhplusadmin/ajout_modif/activite/".$row->id,["class" => "form-horizontal"]) ?>
							<div class="form-group">
								<label for="titre">Nom</label>
								<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'activité" value="<?= $row->nom; ?>" required>
							</div>
							<div class="form-group">
								<label for="lieu">Lieu</label>
								<input type="text" class="form-control" id="lieu" name="lieu" placeholder="Lieu de l'activité" value="<?= $row->lieu; ?>" required>
							</div>
							<div class="form-group">
								<label for="titre">Date</label>
								<input type="date" class="form-control" id="date" name="date" value="<?= $row->date; ?>" required>
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="tinymce-basique" id="description" name="description"><?= $row->description; ?></textarea>
							</div>
							<button type="submit" id="action" name="action" class="btn btn-primary" value="Modifier">Modifier</button>
						<?= form_close() ?>
					<?php endforeach;?>
					</div><!-- FIN Module : Modification d'une activité -->
					<div class="card-footer">
						<a class="btn btn-secondary" href="<?= base_url('rhplusadmin/index/activite'); ?>" onclick="return(confirm('Êtes-vous certain d\'annuler les modifications apportées à cette activité ?'));">Annuler</a>
					</div>
				</div>
			</div>
      	</div><!-- FIN Contenu -->