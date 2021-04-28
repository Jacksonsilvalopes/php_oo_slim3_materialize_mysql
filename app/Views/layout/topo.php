<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script  src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title><?php echo isset($this->tituloPagina) ? \Config\SiteInfo::$nome." | ".$this->tituloPagina : \Config\SiteInfo::$nome; ?></title>
  </head>
  <body>
  <?php $this->layout('layout.nav'); ?>


      <div class="container">
