<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="AbrakadaWeb">
    <title>Réseau RH+ Admin - Connexion</title>
    <!-- Bootstrap -->
    <link href="<?php echo css_url('bootstrap/bootstrap.min'); ?>" rel="stylesheet" type="text/css">
   <!-- "Custom styles for this template" -->
    <link href="<?php echo css_url('admin/sb-admin.min'); ?>" rel="stylesheet" type="text/css">
    <!-- CSS personnalisé -->
    <link href="<?php echo css_url('admin/style'); ?>" rel="stylesheet" type="text/css">
  </head>
  <body id="page-top" class="sidebar-toggled">
  <!-- Navbar-->
    <nav class="navbar navbar-expand navbar-dark static-top" style="background-color: #2f3338;">
        <img id="logo" class="m-1" src="<?php echo img_url('logo.svg'); ?>" height="60" alt="Logo du Réseau RH+">
    </nav><!-- FIN Navbar-->
    <div class="container">
      <div class="card card-login mx-auto mt-5 text-center">
        <div class="card-header">Connexion administration</div>
          <div class="card-body">
            <?= form_open('/rhplusadmin/login'); ?>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="utilisateur" name="utilisateur" class="form-control" placeholder="Nom d'utilisateur" required="required" autofocus="autofocus">
                  <label for="utilisateur">Nom d'utilisateur</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe" required="required">
                  <label for="mdp">Mot de passe</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Se connecter</button>
            <?php
              echo form_close();
              echo @$error_credentials;
            ?>
        </div>
      </div>
    </div>
    <!-- jQuery 3.3.1 -->
    <script src="<?= js_url('jquery/jquery-3.3.1.min'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= js_url('bootstrap/bootstrap.bundle.min'); ?>"></script>
    <!-- "Custom scripts for all pages" -->
    <script src="<?= js_url('sb-admin/sb-admin.min'); ?>"></script>
  </body>
</html>
