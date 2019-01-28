          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
            </li>
            <li class="breadcrumb-item active">Appels à tous</li>
            <li class="breadcrumb-item active">Appels</li>
          </ol>
          <!-- Contenu -->
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-bullhorn"></i>
                    Listes des appels
                </div>
              </div>
              <!-- Module : Gestion des appels à tous -->
              <div class="table-responsive mb-3">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Auteur</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                   <tfoot>
                      <tr>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Auteur</th>
                        <th>Actions</th>
                      </tr>
                   </tfoot>
                      <tbody>
                      <?php foreach($info as $row): ?>
                        <tr>
                            <td><?= $row->titre; ?></td>
                            <td><?= $row->date; ?></td>
                            <td><?= $row->id_membre; ?></td>
                            <td><a class='ml-auto' href='http://reseaurhplus.com/beta/rhplusadmin/modifier/appel/<?= $row->id; ?>'><i class='fas fa-edit ml-auto mr-2'></i></a>|<a href='http://reseaurhplus.com/beta/rhplusadmin/supprimer/appel/<?= $row->id; ?>' onclick="return(confirm('Êtes-vous certain de vouloir supprimer cet appel ?'));"><i class='fas fa-trash-alt ml-2'></i></a></li></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                </table>
              </div><!-- FIN Module : Gestion des appels à tous -->
              <!-- Module : Ajout d'un appel à tous  -->
              <div class="card-body formAjoutElement" style="display: none">
                <?= form_open("/rhplusadmin/ajout_modif/appel",["class" => "form-horizontal"]) ?>
                  <h5 class="card-title"><strong>Ajouter</strong> un appel</h5>
                  <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre de l'appel" required>
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="tinymce-basique" id="description" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="description">Fichier</label>
                    <input type="file" class="form-control" id="fichier" name="fichier">
                  </div>
                  <input type="hidden" id="id_membre" name="id_membre" value="1">
                  <button type="submit" id="action" name="action" class="btn btn-primary" value="Ajouter">Ajouter</button>
                <?= form_close() ?> 
              </div><!-- FIN Module : Ajout d'un appel à tous  -->
              <div class="card-footer">
                <button type="button" class="btn btn-primary btnAjoutElement">Ajouter un appel</button>
                <button type="button" class="btn btn-secondary" style="display: none">Annuler</button>
              </div>
            </div>
          </div><!-- FIN Contenu -->