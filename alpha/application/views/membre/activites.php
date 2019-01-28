		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Accueil</a>
			</li>
			<li class="breadcrumb-item active">Activités</li>
		</ol>
		<!-- CONTENU -->
		<div class="col-lg-8 mx-auto">
			<div class="card mb-3">
				<div class="card-header">
					<i class="fas fa-calendar"></i>
					Activités à venir
				</div>
			</div>
			<div class="table-responsive mb-3">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Activité</th>
							<th>Lieu</th>
							<th>Date</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Activité</th>
							<th>Lieu</th>
							<th>Date</th>
						</tr>
					</tfoot>
					<tbody>
					<?php foreach($info as $row): ?>
						<tr>
							<td><a href="activites_inscrip.php"><?= $row->nom; ?></a></td>
							<td><?= $row->lieu; ?></td>
							<td><?= $row->date; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>