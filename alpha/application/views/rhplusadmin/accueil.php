          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Accueil</li>
          </ol>
          <!-- Contenu -->
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-info-circle"></i>
                  Modifier le message du jour
                </div>
                <!-- Module : Gestion message du jour -->
                <div class="card-body">
                  <?= form_open('/rhplusadmin/ajout_modif/message_jour'); ?>
                    <div class="form-group">
                      <?php foreach($info1 as $row): ?>
                        <textarea class="tinymce-messagejour" id="message" name="message" required><?= $row->message; ?></textarea>
                      <?php endforeach;?>
                    </div>
                    <input type="submit" class="btn btn-primary" name="action" value="Modifier">
                  <?= form_close(); ?>
                </div><!-- FIN Module : Gestion message du jour -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-handshake"></i>
                  Modifier les partenaires
                </div>
              </div>
              <!-- Module : Gestion des partenaires -->
              <div class="table-responsive mb-3">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom de l'organisation</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nom de l'organisation</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php foreach($info2 as $row): ?>
                    <tr>
                      <td><?= $row->nom; ?></td>
                      <td><a class='ml-auto' href='http://reseaurhplus.com/beta/rhplusadmin/modifier/partenaire/<?= $row->id; ?>'><i class='fas fa-edit ml-auto mr-2'></i></a>|<a href='http://reseaurhplus.com/beta/rhplusadmin/supprimer/partenaire/<?= $row->id; ?>' onclick="return(confirm('Êtes-vous certain de vouloir supprimer ce partenaire ?'));"><i class='fas fa-trash-alt ml-2'></i></a></li></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div><!-- FIN Module : Gestion des partenaires -->
              <!-- Module : Ajout des partenaires -->
              <div class="card-body formAjoutElement" style="display: none">
                <?= form_open("/rhplusadmin/ajout_modif/partenaire/".$row->id,["class" => "form-horizontal"]) ?>
                  <h5 class="card-title"><strong>Ajouter</strong> une activité</h5>
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'organisation" required>
                  </div>
                  <div class="form-group">
                    <label for="lien">Lien</label>
                    <input type="url" class="form-control" id="lien" name="lien" placeholder="Lien vers le site de l'organisation" pattern="https?://.+" required>
                    <small id="lienAide" class="form-text text-muted">L'adresse doit commencer par "http://" ou "https://". On vous suggère de copier le lien à partir de la barre d'adresse de votre navigateur au lieu de le tapper manuellement.</small>
                  </div>
                  <button type="submit" id="action" name="action" class="btn btn-primary" value="Ajouter">Ajouter</button>
                <?= form_close() ?> 
              </div><!-- FIN Module : Ajout des partenaires -->
              <div class="card-footer">
                <button type="button" class="btn btn-primary btnAjoutElement">Ajouter un partenaire</button>
                <button type="button" class="btn btn-secondary" style="display: none">Annuler</button>
              </div>
          </div><!-- FIN Contenu -->