<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="AbrakadaWeb">
    <title>Réseau RH+ Admin</title>
    <!-- Bootstrap -->
    <link href="<?php echo css_url('bootstrap/bootstrap.min'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo css_url('datatables/dataTables.bootstrap4'); ?>" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <!-- (!) À CHANGER LORSQUE TOUS LES ICONES SERONT CHOISIES -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- SB Admin -->
    <link href="<?php echo css_url('admin/sb-admin.min'); ?>" rel="stylesheet" type="text/css">
    <!-- CSS personnalisé -->
    <link href="<?php echo css_url('admin/style'); ?>" rel="stylesheet" type="text/css">
    <!-- Pour cacher le message de TinyMCE en attendant de l'installer en version locale -->
    <style>
      div.mce-notification {
        display: none;
      }
    </style>
  </head>
  <body id="page-top" class="sidebar-toggled">
  <!-- Navbar-->
    <nav class="navbar navbar-expand navbar-dark static-top" style="background-color: #2f3338;">
      <a class="navbar-brand m-1" href="<?= base_url('rhplusadmin/index/'); ?>">
        <img id="logoSm" src="<?= img_url('logo_sm.svg'); ?>" height="60" alt="Logo du Réseau RH+">
        <img id="logo" src="<?= img_url('logo.svg'); ?>" height="60" alt="Logo du Réseau RH+">
      </a>
      <button class="btn btn-link btn-sm text-white mt-auto mb-2 order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars fa-2x"></i>
      </button>
      <span class="navbar-text mt-auto mb-2 ml-auto mr-2">
        Boujour, <strong class="ml-1" style="color: white;"><?= $this->session->utilisateur ?></strong> !
      </span>
    </nav><!-- FIN Navbar-->
    
    <div id="wrapper"><!-- #wrapper-->