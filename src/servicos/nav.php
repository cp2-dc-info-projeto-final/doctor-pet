<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 <a class="navbar-brand" href="index.php">
 <img src="../img/logo2.jpg" style="width:200px;">
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
</body>