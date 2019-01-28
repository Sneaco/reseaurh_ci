          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Accueil</a>
            </li>
            <li class="breadcrumb-item active">Appels</li>
            <li class="breadcrumb-item">
              <a href="appels_liste.php">Liste</a>
            </li>
            <li class="breadcrumb-item active">Exemple</li>
          </ol>
          <!-- CONTENU -->
          <div class="col-lg-8 mx-auto">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-bullhorn"></i>
                Appel à tous
              </div>
              <div class="card-body">
                <h3 class="card-title">Exemple d'appel à tous</h3>
                <h5 class="card-subtitle mb-2 text-muted">2018-12-31</h5>
                <small>Par <strong><a href="" data-toggle="modal" data-target="#membreModalGinette">Cassegrain, Ginette  <i class="fas fa-user-circle"></i></a></strong></small>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="card-footer">
                <h5 class="card-title">Pièce jointe</h5>
                <button type="submit" class="btn btn-primary">document.pdf <i class="fas fa-download"></i></button>
              </div>
            </div>
            <hr>
            <!-- COMMENTAIRES -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-comments"></i>
                Commentaires
              </div>
              <div class="card-body">
                <form>        
                  <div class="form-group">
                    <label for="description">Votre commentaire ...</label>
                    <textarea class="form-control" id="description" rows="2"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Publier</button>
                </form>
              </div>
            </div>
            <hr>
            <div class="table-responsive mb-3">
              <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="width: 10%;">Membre</th>
                    <th style="width: 15%;">Date</th>
                    <th>Commentaire</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Membre</th>
                    <th>Date</th>
                    <th>Commentaire</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td><strong><a href="" data-toggle="modal" data-target="#membreModalBob">Gratton, Bob <i class="fas fa-user-circle"></i></a></strong></td>
                    <td>2018-12-31</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>