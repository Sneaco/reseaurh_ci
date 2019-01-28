		<!-- CONTENU -->
		<div class="container d-flex flex-column align-items-center" id="Contenu">
			<h1 class="titre_activite">Activités</h1>
			<div class="row justify-content-start">
			<?php foreach($info as $row): ?>
				<div class="activite">
					<h3><span class="vert"><?= $row->date; ?></span> - <?= $row->lieu; ?></h3>
					<p class="description_activite"><?= $row->nom; ?> <a href="http://reseaurhplus.com/beta/site/voir_activite/<?= $row->$id; ?>"><span class="vert">{...}</span></a> </p>
				</div>
			<?php endforeach; ?>
			</div>
		</div><!-- FIN CONTENU -->