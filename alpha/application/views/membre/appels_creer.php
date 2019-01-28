          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Accueil</a>
            </li>
            <li class="breadcrumb-item active">Appels</li>
            <li class="breadcrumb-item active">Créer</li>
          </ol>
          <!-- CONTENU -->
          <div class="col-lg-8 mx-auto">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-bullhorn"></i>
                Créez un appel
              </div>
              <form> 
                <div class="card-body">    
                    <div class="form-group">
                      <label for="titre">Titre</label>
                      <input type="text" class="form-control" id="titre" placeholder="Titre de l'appel">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="fichier">Joindre un document</label>
                      <input type="file" class="form-control-file" name="fichier" id="fichier">
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Publier</button>
                </div>
              </form>
            </div>
          </div>