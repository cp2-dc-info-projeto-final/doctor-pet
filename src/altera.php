<?php 
    include "conecta_mysql.inc";
    $id_cliente = $_GET["id_cliente"];
    $sql = "SELECT * FROM cliente WHERE id_cliente = $id_cliente;"; 
    $res = mysqli_query($mysqli,$sql);
    $cliente = mysqli_fetch_array($res);
?>
<html>
    <head>
        <title>Edição de Usuário</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <meta charset="UTF-8">
        <h1>Edição de Usuário</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="editar">
            <input type="hidden" name="id_cliente" value="<?php echo $id_cliente?>">
            <p>Nome: <input type="text" name="nome"></p>
            <p>CPF: <input type="text" name="cpf"></p>
            <p>E-mail: <input type="text" name="email"></p>
            <p>Telefone: <input type="text" name="telefone"></p>
            <p>Data de Nascimento: <input type="date" name="nascimento"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
    </body>
</html>