<?php
function menu_ativo($menu){
  $ref=(isset($_GET['ref']))?$_GET['ref']:'index';
  if ($menu==$ref) {
    echo 'class="active"';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>IF-Br: Avaliação Médica Funcional</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="16x16.png">  
  
  <!-- default bootstrap + google cdn -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="../sources/js/popper.min.js"></script> -->

  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
  <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->

  <link rel="stylesheet" href="css/default.css">
  <script src="js/default.js"></script>

  <!-- <link rel="stylesheet" href="css/dropdown.css"> -->
  <!-- <script src="js/dropdown.js"></script> -->

  <link rel="stylesheet" href="css/snackbar.css">
  <link rel="stylesheet" href="css/custom_checkbox.css">
  
</head>
<body>

<nav class="navbar fixed-top sticky-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">
        IF-Br Adulto
        <?=date('d/n/y H:i:s')?>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?=menu_ativo('index')?>>     <a href="index.php">Formulários</a></li>
        <li <?=menu_ativo('legenda')?>>   <a href="legenda.php?ref=legenda">Legenda</a></li>
        <li <?=menu_ativo('pontuacao')?>> <a href="pontuacao.php?ref=pontuacao">Critérios de pontuação</a></li>
      </ul>
    </div>
  </div>
</nav>
  