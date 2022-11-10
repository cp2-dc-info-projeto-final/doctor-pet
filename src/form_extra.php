<?php include "autentica.php";?>
<html>
    <head>
    <link rel="stylesheet" href="_css/bootstrap.css">
        <title>Cadastro de Usuário</title>
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
 </ul>
</nav>
        <h1>Cadastro de Usuário</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="inserir">
            <p>Nome: <input type="text" name="nome"></p>
            <p>CPF: <input type="text" name="cpf"
                maxlength='14'
                placeholder="xxx.xxx.xxx-xx"></p>
            <p>E-mail: <input type="email" name="email"
                placeholder="exemplo@gmail.com"
                pattern=".+@gmail.com"></p>
                <p>Telefone: <input type="tel" name="telefone"
                maxlength='15'
                placeholder="(xx) xxxxx-xxxx"
                pattern="[(]{1}[0-9]{2}[)]{1}[ ]{1}[0-9]{5}-[0-9]{4}"></p>
            <p>Data de Nascimento: <input type="date" name="nascimento"></p>
            <p>Senha: <input type="password" name="senha"></p>
            <p>Confirmar senha: <input type="password" name="senha_rep"></p>
            <p>Tipo de usuário: 
                <select name="tipo_usuario">
                    <option value="">Defina o tipo de usuário:</option>
                    <option value="cliente">Cliente</option>
                    <option value="funcionario">Funcionário</option>
                    <option value="administrador">Administrador</option>
                </select>
            </p>       
            <p><input type="submit" value="Enviar"></p>
        </form>

        <h1>Buscar clientes</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="buscar_cliente">
            <p>Nome: <input type="text" name="nome" size="10"></p>
            <p><input type="submit" value="Buscar"></p>
        </form>
        <h1>Mostrar clientes</h1>
        <p>Clique no botão abaixo para mostrar os clientes cadastrados</p>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="exibir_cliente">
            <p><input type="submit" value="Mostrar clientes"></p>
        </form>

        <h1>Buscar funcionários</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="buscar_funcionario">
            <p>Nome: <input type="text" name="nome" size="10"></p>
            <p><input type="submit" value="Buscar"></p>
        </form>
        <h1>Mostrar funcionários</h1>
        <p>Clique no botão abaixo para mostrar os funcionários cadastrados</p>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="exibir_funcionario">
            <p><input type="submit" value="Mostrar funcionários"></p>
        </form>

        <h1><a href='servicos/editar_servicos.php'>Gerenciar serviços</a></h1>
        <?php
        }
        ?>
    </body>
</html>