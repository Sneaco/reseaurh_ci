			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
				</li>
				<li class="breadcrumb-item active">Activités</li>
			</ol>
			<!-- Contenu -->
			<div class="row">
				<div class="col-lg-8 mx-auto">
	              	<div class="card mb-3">
	                	<div class="card-header">
	                  		<i class="fas fa-calendar-plus"></i>
	                  		Listes des activités
	                	</div>
	              	</div>
	              	<!-- Module : Gestion des activités -->
	              	<div class="table-responsive mb-3">
	                	<table class="table" id="dataTable" width="100%" cellspacing="0">
	                  		<thead>
	                    		<tr>
	                    			<th>Nom</th>
	                    			<th>Lieu</th>
	                    			<th>Date</th>
	                    			<th>Actions</th>
	                    		</tr>
	                  		</thead>
			                <tfoot>
			                    <tr>
			                    	<th>Nom</th>
			                    	<th>Lieu</th>
			                    	<th>Date</th>
			                    	<th>Actions</th>
			                    </tr>
			                </tfoot>
	                  		<tbody>
                  			<?php foreach($info as $row): ?>
                    			<tr>
                      				<td><?= $row->nom; ?></td>
                      				<td><?= $row->lieu; ?></td>
                      				<td><?= $row->date; ?></td>
                      				<td><a class='ml-auto' href='http://reseaurhplus.com/beta/rhplusadmin/modifier/activite/<?= $row->id; ?>'><i class='fas fa-edit ml-auto mr-2'></i></a>|<a href='http://reseaurhplus.com/beta/rhplusadmin/supprimer/activite/<?= $row->id; ?>' onclick="return(confirm('Êtes-vous certain de vouloir supprimer cette activité ?'));"><i class='fas fa-trash-alt ml-2'></i></a></li></td>
                    			</tr>
                  			<?php endforeach;?>
	                  		</tbody>
	                	</table>
	              	</div><!-- FIN Module : Gestion des activités -->
	              	<!-- Module : Ajout d'une activité -->
              		<div class="card-body formAjoutElement" style="display: none">
              			<?= form_open("/rhplusadmin/ajout_modif/activite",["class" => "form-horizontal"]) ?>
							<h5 class="card-title"><strong>Ajouter</strong> une activité</h5>
							<div class="form-group">
								<label for="titre">Nom</label>
								<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'activité" required>
							</div>
							<div class="form-group">
								<label for="lieu">Lieu</label>
								<input type="text" class="form-control" id="lieu" name="lieu" placeholder="Lieu de l'activité" required>
							</div>
							<div class="form-group">
								<label for="titre">Date</label>
								<input type="date" class="form-control" id="date" name="date" required>
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="tinymce-basique" id="description" name="description"></textarea>
							</div>
							<button type="submit" id="action" name="action" class="btn btn-primary" value="Ajouter">Ajouter</button>
						<?= form_close() ?>	
					</div><!-- FIN Module : Ajout d'une activité -->
               		<div class="card-footer">
						<button type="button" class="btn btn-primary btnAjoutElement">Ajouter une activité</button>
						<button type="button" class="btn btn-secondary" style="display: none">Annuler</button>
					</div>
	            </div>
			</div><!-- FIN Contenu -->