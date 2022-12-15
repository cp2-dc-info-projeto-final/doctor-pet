<nav class="navbar">
    <a href="index.php">
        <img src="img/logo2.jpg" style="width:200px;">
        </a>
        <?php 
    if ($_SESSION["tipo"] == "cliente") {
    ?>
  <nav class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Consultas
    <i class="fa fa-caret-down"></i>
  </button>
  <nav class="dropdown-content" id="myDropdown">
    <a href="agendar_consulta.php">Agendar consultas</a>
    <a href="gerenciar_consulta.php">Gerenciar consultas</a>
  </nav>
  </nav>
  <?php
    }
    ?>
  <?php 
    if ($_SESSION["tipo"] == "administrador") {
    ?>
  <nav class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Gerenciamento
    <i class="fa fa-caret-down"></i>
  </button>
  <nav class="dropdown-content" id="myDropdown">
    <a href="cadastro_usuario.php">Cadastrar usuários</a>
    <a href="gerenciar_clientes.php">Gerenciar clientes</a>
    <a href="gerenciar_funcionarios.php">Gerenciar funcionários</a>
    <a href="gerenciar_administradores.php">Gerenciar administradores</a>
    <a href="editar_servicos.php">Gerenciar serviços</a>
  </nav>
  </nav>
  <?php
    }
    ?>
    <a href="logout.php">Logoff</a>
</nav>