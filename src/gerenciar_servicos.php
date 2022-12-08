<?php
include "autentica.php";
include "conecta_mysql.inc";?>

<html>
    <head>
    <link rel="stylesheet" href="_css/sla.css">
    <link rel="stylesheet" href="_css/login.css">
    <link rel="stylesheet" href="_css/background.css">
        <title>Dados Cadastrados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
body {
    background-color: rgb(0,255,255, 0.30);
}
</style>
    </head>
    <body>
    <?php include "nav.php";?>
    <div class="hero">
    <div class="login">
        <h1>Dados Cadastrados</h1>
<?php
    $operacao = $_REQUEST["operacao"];

    if($operacao == "inserir"){
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $erro = 0;

        if(empty($nome)){
            echo "Por favor, preencha o nome do serviço.<br>";
            $erro = 1;
        }
        if(empty($descricao)){
            echo "Por favor, preencha a descrição do serviço.<br>";
            $erro = 1;
        }

        if($erro == 0){
            $sql = "INSERT INTO servico (nome,descricao)";
            $sql .= "VALUES ('$nome','$descricao');";
            mysqli_query($mysqli,$sql);
            echo "Serviço $nome registrado com sucesso!<br>";
            echo "<a href='editar_servicos.php'>Voltar para o gerenciamento de serviços</a>";
        }
    }
    else if($operacao == "exibir"){
        $sql = "SELECT * FROM servico;"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $servico = mysqli_fetch_array($res);
            echo "Serviço: ".$servico["nome"]."<br>";
            echo "Descrição: ".$servico["descricao"]."<br>";
            echo "<a href='gerenciar_servicos.php?operacao=excluir&id_servico=".$servico["id_servico"]."'>
            Excluir serviço</a><br>";
            echo "---------------------<br>";
        }
    }
    else if($operacao == "buscar"){
        $nome = $_POST["nome"];
        $sql = "SELECT * FROM servico WHERE nome like '%$nome%';"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $servico = mysqli_fetch_array($res);
            echo "Serviço: ".$servico["nome"]."<br>";
            echo "Descrição: ".$servico["descricao"]."<br>";
            echo "<a href='gerenciar_servicos.php?operacao=excluir&id_servico=".$servico["id_servico"]."'>
            Excluir serviço</a><br>";
            echo "---------------------<br>";
        }
    }
    else if($operacao == "excluir"){
        $id_servico = $_GET["id_servico"];
        $sql = "DELETE FROM servico WHERE id_servico = $id_servico;"; 
        mysqli_query($mysqli,$sql);
        echo "Serviço excluído com sucesso!<br>";
        echo "<a href='editar_servicos.php'>Voltar para o gerenciamento de serviços</a>";
    }
?>
    </div>
</div>
    </body>
</html>
<?php mysqli_close($mysqli); ?>