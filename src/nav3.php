<body>
<link rel="stylesheet" href="_css/sla.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="navbar navbar-expand-sm bg-dark navbar-dark">
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
    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction()">Dropdown
        <i class="fa fa-caret-down"></i>
      </button>
        <div class="dropdown-content" id="myDropdown">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
    </div>
    <li class="nav-item">
    <a class="nav-link" href="form_extra.php">Gerenciar cadastros</a>
    </li>
<?php
    }
    ?>
 </ul>
  </div>
  <script>
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }
  </script>
</body>