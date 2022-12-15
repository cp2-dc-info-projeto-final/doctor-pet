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
        <?php
    $operacao = $_REQUEST["operacao"];

    if($operacao == "adicionar_consulta"){
        $id_cliente = $_SESSION["id"];
        $id_servico = $_GET["id_servico"];
        $sql = "INSERT INTO item_servico (id_agendamento,id_servico)";
        $sql .= "VALUES ('$id_cliente','$id_servico');";
        mysqli_query($mysqli,$sql);

    }
    ?>
        </div>
    </div>
    <?php
    }
    ?>
    <body>