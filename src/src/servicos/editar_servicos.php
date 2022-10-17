<?php include "../autentica.php";?>
<html>
    <head>
    <link rel="stylesheet" href="../_css/bootstrap.css">
        <title>Gerenciamento de serviços</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
body {
  background-color: cyan;
}
</style>
    </head>
    <body>
        <h1>Cadastrar serviços</h1>
        <form action="gerenciar.php" method="POST">
            <input type="hidden" name="operacao" value="inserir">
            <p>Nome do serviço: <input type="text" name="nome"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
        <h1>Exibir serviços</h1>
        <p>Clique no botão abaixo para exibir os serviços disponíveis</p>
        <form action="gerenciar.php" method="POST">
            <input type="hidden" name="operacao" value="exibir">
            <p><input type="submit" value="Exibir serviços"></p>
        </form>
        <h1>Buscar serviços</h1>
        <form action="gerenciar.php" method="POST">
            <input type="hidden" name="operacao" value="buscar">
            <p>Nome: <input type="text" name="nome" size="10"></p>
            <p><input type="submit" value="Buscar"></p>
        </form>
    </body>
</html>