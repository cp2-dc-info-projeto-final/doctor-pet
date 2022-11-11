<?php 
    include "conecta_mysql.inc";
    include "autentica.php";
    $id_administrador = $_GET["id_administrador"];
    $sql = "SELECT * FROM administrador WHERE id_administrador = $id_administrador;"; 
    $res = mysqli_query($mysqli,$sql);
    $administrador = mysqli_fetch_array($res);
?>
<html>
    <head>
        <link rel="stylesheet" href="_css/bootstrap.css">
        <title>Edição de Usuário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
body {
  background-color: cyan;
}
</style>
    </head>
    <body>
        <meta charset="UTF-8">
        <h1>Edição de Usuário</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="editar_administrador">
            <input type="hidden" name="id_administrador" value="<?php echo $id_administrador?>">
            <p>Nome: <input type="text" name="nome"></p>
            <p>CPF: <input type="text" name="cpf"
            maxlength='14'
                placeholder="xxx.xxx.xxx-xx"></p>
            <p>E-mail: <input type="email" name="email"
                placeholder="exemplo@gmail.com"
                pattern=".+@gmail.com"></p>
            <p>Telefone: <input type="tel" name="telefone"
                placeholder="(xx) xxxxx-xxxx"
                maxlength='15'
                pattern="[(]{1}[0-9]{2}[)]{1}[ ]{1}[0-9]{5}-[0-9]{4}"></p>
            <p>Data de Nascimento: <input type="date" name="nascimento"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
    </body>
</html>
