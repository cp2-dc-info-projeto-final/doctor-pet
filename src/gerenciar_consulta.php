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
        $_SESSION["id_servico"] = $id_servico;
        $sql = "SELECT * FROM agendamento WHERE id_servico = '$id_servico' AND id_cliente IS NULL;";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
        $servico = mysqli_fetch_array($res);
        echo "Dia: ".$servico["dia"]."<br>";
        echo "Hora: ".$servico["hora"]."<br>";
        echo "<a href='gerenciar_consulta.php?operacao=adicionar_horario&id_agendamento=".$servico["id_agendamento"]."'>
        Agendar consulta</a><br>";
        echo "---------------------<br>";
        }
    }
    if($operacao == "adicionar_horario"){
    $id_cliente = $_SESSION["id"];
    $id_agendamento = $_GET["id_agendamento"];
    $sql = "UPDATE agendamento SET id_cliente = '$id_cliente'";
    $sql .= "WHERE id_agendamento = $id_agendamento;";  
    mysqli_query($mysqli,$sql);
    echo "Consulta agendada com sucesso!<br>";
    echo "<a href='exibir_consulta.php'>Voltar para o início</a>"; 

    }
    if($operacao == "excluir"){
    $id_agendamento = $_GET["id_agendamento"];
    $sql = "UPDATE agendamento SET id_cliente = NULL ";
    $sql .= "WHERE id_agendamento = $id_agendamento;";  
    if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
    }
    echo "Consulta cancelada com sucesso!<br>";
    echo "<a href='exibir_consulta.php'>Voltar para o início</a>"; 
    }
    ?>
    
        </div>
    </div>
    <?php
    }
    ?>
    <body>