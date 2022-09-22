<?php 
    include "conecta_mysql.inc";
    $cod_cliente = $_GET["cod_cliente"];
    $sql = "SELECT * FROM cliente WHERE cod_cliente = $cod_cliente;"; 
    $res = mysqli_query($mysqli,$sql);
    $cliente = mysqli_fetch_array($res);
?>
<html>
    <head>
        <title>Edição de Cliente</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Edição de Cliente</h1>
        <form action="pagina_extra.php" method="POST"> 
            <input type="hidden" name="operacao" value="editar">
            <input type="hidden" name="cod_cliente" value="<?php echo $cod_cliente?>">
            <p>Nome: <input type="text" name="nome" value="<?php echo $cliente['nome']?>"></p>
            <p>E-mail: <input type="text" name="email" value="<?php echo $cliente['email']?>"></p>
            <p>Data de Nascimento: <input type="date" name="data_nasc" value="<?php echo $cliente['data_nasc']?>"></p>
            <p>Bandeira do cartão de crédito: 
                <select name="bandeiraCartao">
                    <option value="">Escolha uma bandeira do cartão de crédito</option>
                    <option value="Visa" <?php echo ($cliente['cartao'] == 'Visa' ? 'selected':'') ?>>Visa</option>
                    <option value="MasterCard" <?php echo ($cliente['cartao'] == 'MasterCard' ? 'selected':'') ?>>MasterCard</option>
                    <option value="Visa Electron" <?php echo ($cliente['cartao'] == 'Visa Electron' ? 'selected':'') ?>>Visa Electron</option>
                </select>
            </p>              
            <p><input type="submit" value="Enviar"></p> 
        </form>
    </body>
</html>