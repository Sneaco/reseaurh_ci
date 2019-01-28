          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?= base_url('rhplusadmin/index/'); ?>">Accueil</a>
            </li>
            <li class="breadcrumb-item active">Appels à tous</li>
            <li class="breadcrumb-item active">Commentaires</li>
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
              <!-- Liste des appels à tous  -->
              <div class="table-responsive mb-3">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Auteur</th>
                      </tr>
                    </thead>
                   <tfoot>
                      <tr>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Auteur</th>
                      </tr>
                   </tfoot>
                      <tbody>
                      <?php foreach($info1 as $row): ?>
                        <tr>
                          <td><?= $row->titre; ?></td>
                          <td><?= $row->date; ?></td>
                          <td><?= $row->id_membre; ?></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                </table>
              </div><!-- FIN Liste des appels à tous  -->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-comments"></i>
                    Commentaires pour ""
                </div>
              </div>
              <!-- Module : Gestion des commentaires pour un appel à tous -->
              <div class="table-responsive mb-3">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Commentaire</th>
                        <th>Date</th>
                        <th>Auteur</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                   <tfoot>
                      <tr>
                        <th>Commentaire</th>
                        <th>Date</th>
                        <th>Auteur</th>
                        <th>Actions</th>
                      </tr>
                   </tfoot>
                      <tbody>
                      <?php foreach($info2 as $row): ?>
                        <tr>
                            <td><?= $row->commentaire; ?></td>
                            <td><?= $row->date; ?></td>
                            <td><?= $row->id_membre; ?></td>
                            <td><a class='ml-auto' href='http://reseaurhplus.com/beta/rhplusadmin/modifier/commentaire_appel/<?= $row->id; ?>'><i class='fas fa-edit ml-auto mr-2'></i></a>|<a href='http://reseaurhplus.com/beta/rhplusadmin/supprimer/commentaire_appel/<?= $row->id; ?>' onclick="return(confirm('Êtes-vous certain de vouloir supprimer cet appel ?'));"><i class='fas fa-trash-alt ml-2'></i></a></li></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                </table>
              </div><!-- FIN Module : Gestion des commentaires pour un appel à tous -->
            </div>
          </div><!-- FIN Contenu -->