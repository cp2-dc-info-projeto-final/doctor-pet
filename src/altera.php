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
            <p>CPF: <input type="text" name="CPF" value="<?php echo $cliente['CPF']?>"></p>
            <p>telefone: <input type="text" name="telefone" value="<?php echo $cliente['telefone']?>"></p>
            <p>endereço: <input type="text" name="endereço" value="<?php echo $cliente['endereço']?>"></p>
            <p>nome do pet: <input type="text" name="nome do pet" value="<?php echo $cliente['nome do pet']?>"></p>
            <p>peso do pet: <input type="text" name="peso do pet" value="<?php echo $cliente['peso do pet']?>"></p>
            <p>espécie: <input type="number" name="espécie" value="<?php echo $cliente['espécie']?>"></p>
            <p>Sexo do pet: 
                <select name="sexo">
                    <option value="">defina o sexo do pet </option>
                    <option value="macho" <?php echo ($cliente['sexo'] == 'macho' ? 'selected':'') ?>>macho</option>
                    <option value="femea" <?php echo ($cliente['sexo'] == 'femea' ? 'selected':'') ?>>femea</option>
                    
                </select>
            </p>              
            <p><input type="submit" value="Enviar"></p> 
        </form>
    </body>
</html>
