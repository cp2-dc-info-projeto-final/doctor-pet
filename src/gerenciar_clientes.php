<?php include "autentica.php";?>

<html>
    <head>
    <link rel="stylesheet" href="_css/sla.css">
    <link rel="stylesheet" href="_css/login.css">
    <link rel="stylesheet" href="_css/background.css">
    <title>Buscar clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
    body{
    background-color: rgb(0,255,255, 0.30);
    }
</style>
</head>
<body>
        <?php include "nav.php";?>
    <?php 
    if ($_SESSION["tipo"] == "administrador") {
    ?>
    <div class="hero">
        <div class="login">
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
        </div>
    </div>
        <?php
        }
        ?>
    </body>
</html>