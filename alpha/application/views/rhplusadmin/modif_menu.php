		<?php foreach($info as $row): ?>
			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
				</li>
				<li class="breadcrumb-item active">Menus</li>
				<li class="breadcrumb-item">
				<?php if($row->parent == 0): ?>
					<a href="<?= base_url('rhplusadmin/menu/prin'); ?>">Menus principaux</a>
				<?php else: ?>
					<a href="<?= base_url('rhplusadmin/menu/sec'); ?>">Menus secondaires</a>
				<?php endif;?>
				</li>
				<li class="breadcrumb-item active">Modifier une page</li>
			</ol>
			<!-- Contenu -->
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card mb-3">
						<div class="card-header">
							<i class="fas fa-list"></i>
						<?php if($row->parent == 0): ?>
							Gestions des menus principaux
						<?php else: ?>
							Gestions des menus secondaires
						<?php endif;?>
						</div>
						<!-- Module : Modification d'un menu principal ou secondaire -->
						<div class="card-body">
							<?= form_open("/rhplusadmin/ajout_modif/menu/".$row->id,["class" => "form-horizontal"]) ?>
								<h5 class="card-title"><strong>Modifier</strong> une page</h5>
								<div class="form-group">
									<label for="nom">Nom</label>
									<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de la page" value="<?= $row->nom ?>" required>
								</div>
							<?php if($row->parent != 0 && $type == "standard"): ?>
								<div class="form-group">
									<label for="contenu">Contenu de la page</label>
									<textarea class="tinymce-basique" id="contenu" name="contenu"><?= $row->contenu ?></textarea>
								</div>
							<?php endif;?>
								<button type="submit" id="action" name="action" class="btn btn-primary" value="Modifier">Modifier</button>
							<?= form_close() ?>
						</div><!-- FIN Module : Modification d'un menu principal ou secondaire -->
						<div class="card-footer">
						<?php if($row->parent == 0): ?>
							<a class="btn btn-secondary" href="<?= base_url('rhplusadmin/menu/prin'); ?>" onclick="return(confirm('Êtes-vous certain d\'annuler les modifications apportées à cette page ?'));">Annuler</a>
						<?php else: ?>
							<a class="btn btn-secondary" href="<?= base_url('rhplusadmin/menu/sec'); ?>" onclick="return(confirm('Êtes-vous certain d\'annuler les modifications apportées à cette page ?'));">Annuler</a>
						<?php endif;?>
						</div>
					</div>
				</div>
          	</div><!-- FIN Contenu -->
		<?php endforeach;?>