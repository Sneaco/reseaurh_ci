	<section class="row">
		<div class="col col-12 text-center">
			<hr>
			<h1>Les activités</h1>
			<hr>
		</div>
		<?php foreach($info as $row): ?>
			<div class="col col-12 card">
				<div class="card-body">
					<h2 class="card-title"><?= $row->nom; ?></h2>
					<h4 class="card-subtitle mb-3 text-muted"><?= $row->lieu; ?></h4>
					<h6 class="card-subtitle mb-2"><?= $row->date; ?></h6>
					<hr>
					<p><?= $row->description; ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</section>