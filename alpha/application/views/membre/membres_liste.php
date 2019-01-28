			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Accueil</a>
				</li>
				<li class="breadcrumb-item active">Membres</li>
			</ol>
			<!-- CONTENU -->
			<div class="col-lg-8 mx-auto">
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-list"></i>
						Liste des membres du réseau
					</div>
				</div>
				<div class="table-responsive mb-3">
					<table class="table" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Membre</th>
								<th>Poste</th>
								<th>Organisation</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Membre</th>
								<th>Poste</th>
								<th>Organisation</th>
							</tr>
							</tr>
						</tfoot>
						<tbody>
						<?php foreach($info as $row): ?>
							<tr>
								<td><a href="" data-toggle="modal" data-target="#membreModalGinette"><?= $row->nom; ?>, <?= $row->prenom; ?> <i class="fas fa-user-circle"></i></a></td>
								<td><?= $row->titre; ?></td>
								<td><?= $row->nom_organi; ?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>