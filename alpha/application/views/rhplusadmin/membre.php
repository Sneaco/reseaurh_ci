          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
            </li>
            <li class="breadcrumb-item active">Membres</li>
          </ol>
          <!-- Contenu -->
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-users"></i>
                    Listes des membres
                </div>
              </div>
              <!-- Module : Gestion des membres -->
              <div class="table-responsive mb-3">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Membre</th>
                        <th>Poste</th>
                        <th>Organisation</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                  <tfoot>
                      <tr>
                        <th>Membre</th>
                        <th>Poste</th>
                        <th>Organisation</th>
                        <th>Actions</th>
                      </tr>
                  </tfoot>
                    <tbody>
                    <?php foreach($info1 as $row): ?>
                      <tr>
                          <td><?= $row->nom; ?>, <?= $row->prenom; ?></td>
                          <td><?= $row->titre; ?></td>
                          <td><?= $row->nom_organi; ?></td>
                          <td><a class='ml-auto' href='http://reseaurhplus.com/beta/rhplusadmin/modifier/membre/<?= $row->id; ?>'><i class='fas fa-edit ml-auto mr-2'></i></a>|<a href='http://reseaurhplus.com/beta/rhplusadmin/supprimer/membre/<?= $row->id; ?>' onclick="return(confirm('Êtes-vous certain de vouloir supprimer cette activité ?'));"><i class='fas fa-trash-alt ml-2'></i></a></li></td>
                      </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
              </div><!-- FIN Module : Gestion des membres -->
              <!-- Module : Ajout d'une activité -->
              <div class="card-body formAjoutElement" style="display: none">
                <?= form_open("/rhplusadmin/ajout_modif/activite",["class" => "form-horizontal"]) ?>
                  <h5 class="card-title"><strong>Ajouter</strong> un membre</h5>
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
                  <button type="submit" id="action" name="action" class="btn btn-primary" value="Ajouter">Ajouter</button>
                <?= form_close() ?> 
              </div><!-- FIN Module : Ajout d'une activité -->
              <div class="card-footer">
                <button type="button" class="btn btn-primary btnAjoutElement">Ajouter un membre</button>
                <button type="button" class="btn btn-secondary" style="display: none">Annuler</button>
              </div>
            </div>
          </div><!-- FIN Contenu -->