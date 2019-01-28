          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Accueil</a>
            </li>
            <li class="breadcrumb-item">
              <a href="profil.php">Profil</a>
            </li>
            <li class="breadcrumb-item active">Modifier</li>
          </ol>
          <!-- CONTENU -->
          <div class="col-lg-8 mx-auto">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-user-circle"></i>
                Modifier votre profil
              </div>
              <form>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="nom">Nom <span style="color: red; font-weight: bold;">*</span></label>
                      <input type="text" class="form-control" id="nom" value="Cassegrain">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="prenom">Prénom <span style="color: red; font-weight: bold;">*</span></label>
                      <input type="text" class="form-control" id="prenom" value="Ginette">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="region">Région <span style="color: red; font-weight: bold;">*</span></label>
                       <select id="region" class="form-control">
                        <option selected>Saguenay</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Ville <span style="color: red; font-weight: bold;">*</span></label>
                      <input type="text" class="form-control" id="ville" value="Jonquière">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="si_emploi" checked>
                      <label class="form-check-label" for="si_emploi">J'ai un emploi</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="entreprise">Entreprise <span style="color: red; font-weight: bold;">*</span></label>
                      <input type="text" class="form-control" id="entreprise" value="Construction Poitras Inc">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="titre">Titre <span style="color: red; font-weight: bold;">*</span></label>
                      <input type="text" class="form-control" id="titre" value="Adjointe administrative">
                    </div>
                  </div>
                  <hr>
                  <small class="form-text text-muted">* Vous devez choisir une adresse courriel avec laquelle vous recevrez les notifications au propos du réseau.</small>
                  <small class="form-text text-muted mb-3">** Vous devez inscrire au moins une adresse courriel.</small>
                  <div class="form-row">
                    <div class="form-group col-8">
                      <label for="courriel_prof">Courriel professionnel</label>
                      <input type="email" class="form-control d-inline" id="courriel_prof" value="ginette.cassegrain@gmail.com">
                    </div>
                    <div class="form-group col-1 d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input d-inline" type="radio" name="courriel_utilise" id="courriel_utilise1" value="ginette.cassegrain@gmail.com">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-8">
                      <label for="courriel_perso">Courriel personnel</label>
                      <input type="email" class="form-control d-inline" id="courriel_perso" value="ginette.cassegrain@gmail.com">
                    </div>
                    <div class="form-group col-1 d-flex align-items-center">
                      <div class="form-check">
                        <input class="form-check-input d-inline" type="radio" name="courriel_utilise" id="courriel_utilise2" value="ginette.cassegrain@gmail.com">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="telephone1">Téléphone 1</label>
                      <input type="email" class="form-control" id="telephone1" value="(123) 456-7890">
                    </div>
                    <div class="form-group col-md-8">
                      <label for="telephone2">Téléphone 2</label>
                      <input type="email" class="form-control" id="telephone2" value="(123) 456-7890">
                    </div>
                    <div class="form-group col-md-8">
                      <label for="telephone3">Téléphone 3</label>
                      <input type="email" class="form-control" id="telephone3" value="(123) 456-7890">
                    </div>
                  </div>       
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <a class="btn btn-secondary" href="profil.php">Retour</a>
                </div>
              </form>
            </div>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-credit-card"></i>
                Votre abonnement
              </div>
              <div class="card-body text-center">
                <a class="btn btn-primary" href="">Renouveler votre abonnement sur Beavertix</a>
              </div>
            </div>
          </div>