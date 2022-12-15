<?php
    include "conecta_mysql.inc";
    include "autentica.php";
?>
<html>
    <head>
    <link rel="stylesheet" href="_css/sla.css">
    <link rel="stylesheet" href="_css/login.css">
    <link rel="stylesheet" href="_css/background.css">
        <title>Agendar consultas</title>
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
    if ($_SESSION["tipo"] == "cliente") {
    ?>
        <div class="hero">
        <div class="login">
        <h1>Agendamento de consultas</h1>
        <?php $sql = "SELECT * FROM servico;"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $servico = mysqli_fetch_array($res);
            echo "Serviço: ".$servico["nome"]."<br>";
            echo "Descrição: ".$servico["descricao"]."<br>";
            echo "<a href='gerenciar_consulta.php?operacao=adicionar_consulta&id_servico=".$servico["id_servico"]."'>
            Agendar consulta</a><br>";
            echo "---------------------<br>";
        }
        ?>
        </div>
        </div>
    <?php
    }
    ?>