<?php include "autentica.php";?>
<html>
    <head>
        <link rel="stylesheet" href="_css/bootstrap.css">
        <link rel="stylesheet" href="_css/custom.css">
        <title>Doctor Pet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
body {
  background-color: cyan;
}
</style>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 <a class="navbar-brand" href="index.php">
 <img src="img/logo2.jpg" style="width:200px;">
 </a>
 <ul class="navbar-nav">
 <li class="nav-item">
 <a class="nav-link" href="logout.php">Logout</a>
 </li>
 <?php 
    if ($_SESSION["tipo"] == "administrador") {
    ?>
    <li class="nav-item">
    <a class="nav-link" href="form_extra.php">Gerenciar cadastros</a>
    </li>
    <?php
    }
    ?>
 </ul>
</nav>
    <div id="fundo" class="container"> <br>
    <h1>Doctor Pet</h1>
    </div>
</body>
</html>