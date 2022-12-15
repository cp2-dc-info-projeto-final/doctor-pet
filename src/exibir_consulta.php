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
        $id_cliente = $_SESSION["id"];
        $sql = "SELECT * FROM agendamento WHERE id_cliente = '$id_cliente';"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
            for($i = 0; $i < $linhas; $i++){
                $agendamento = mysqli_fetch_array($res);
                $id_servico = $agendamento["id_servico"];
                $sql = "SELECT * FROM servico WHERE id_servico = '$id_servico';";
                $re = mysqli_query($mysqli,$sql);
                $servico = mysqli_fetch_array($re);
                echo "Serviço: ".$servico["nome"]."<br>";
                echo "Dia: ".$agendamento["dia"]."<br>";
                echo "Hora: ".$agendamento["hora"]."<br>";
                echo "<a href='gerenciar_consulta.php?operacao=excluir&id_agendamento=".$agendamento["id_agendamento"]."'>
                Excluir agendamento</a><br>";
                echo "---------------------<br>";
                }
        ?>
        </div>
    </div>
    <?php
    }
    ?>
    </body>
</html>