			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
				</li>
				<li class="breadcrumb-item active">Menus</li>
				<li class="breadcrumb-item active">Menus secondaires</li>
			</ol>
			<!-- Contenu -->
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card mb-3">
						<div class="card-header">
							<i class="fas fa-list"></i>
							Gestions des menus secondaires
						</div>
						
						<div class="card-body">
							<!-- Liste des menus secondaires -->
							<?= form_open("",["class" => "form-horizontal"]) ?>
								<select class="form-control form-control-lg" id="selectMenuPrin" name="selectMenuPrin">
									<option value="0">Choisissez une menu...</option>
									<optgroup label="Site publique">
									<?php foreach($info1 as $row): ?>
										<?php if($row->personnalise == null): ?>
											<option value="<?= $row->id ?>"><?= $row->nom ?></option>
										<?php endif;?>
									<?php endforeach;?>
									</optgroup>
									<optgroup label="Site privé">
									<?php foreach($info2 as $row): ?>
										<?php if($row->personnalise == null): ?>
											<option value="<?= $row->id ?>"><?= $row->nom ?></option>
										<?php endif;?>
									<?php endforeach;?>
									</optgroup>
								</select>
							<?= form_close() ?><!-- FIN Liste des menus secondaires -->
							<!-- Module : Gestion des menus secondaires -->
							<ul id="listMenuSec" class="list-group sortable" style="display: none"></ul>
							<!-- Module : Ajout d'une page/menu secondaire -->
							<?= form_open("/rhplusadmin/ajout_modif/menu",["class" => "form-horizontal", "id" => "formAjoutModif", "style" => "display: none"]) ?>
								<hr>
								<h5 class="card-title"><strong>Ajouter</strong> une page</h5>
								<div class="form-group">
									<label for="nom">Nom</label>
									<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de la page" required>
								</div>
								<div class="form-group">
									<label for="contenu">Contenu de la page</label>
									<textarea class='tinymce-basique' id='contenu' name='contenu'></textarea>
								</div>
								<input type="hidden" id="parent" name="parent" value="">
								<input type="hidden" id="site" name="site" value="">
								<button type="submit" id="action" name="action" class="btn btn-primary" value="Ajouter">Ajouter</button>
							<?= form_close() ?><!-- FIN Module : Ajout d'une page/menu secondaire -->
						</div>
						<div class="card-footer" style="display: none">
							<button type="button" class="btn btn-primary" id="btnAjoutPage">Ajouter une page</button>
							<button type="button" class="btn btn-secondary" style="display: none">Annuler</button>
						</div>
					</div>
				</div>
          </div><!-- FIN Contenu -->