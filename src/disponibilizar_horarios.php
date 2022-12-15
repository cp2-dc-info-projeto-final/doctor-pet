<?php include "autentica.php";?>
<?php include "conecta_mysql.inc";?>
<html>
    <head>
        <link rel="stylesheet" href="_css/login.css">
        <link rel="stylesheet" href="_css/background.css">
        <link rel="stylesheet" href="_css/sla.css">
        <title>Doctor Pet</title>
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
    if ($_SESSION["tipo"] == "administrador") {
    ?>
    <div class="hero">
        <div class="login">
        <?php
            $operacao = $_REQUEST["operacao"];
            if($operacao == "disponibilizar"){
            $id_servico = $_GET["id_servico"];  
        ?>
        <form action="disponibilizar_horarios.php" method="POST">
            <input type="hidden" name="operacao" value="inserir">
            <input type="hidden" name="id_servico" value="<?php echo $id_servico?>">
            <p>Dia disponível: <input type="date" name="dia"></p>
            <p>Horário disponível: <input type="time" name="hora"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
        <?php
        }
            if($operacao == "inserir"){
            $dia = $_POST["dia"];
            $hora = $_POST["hora"];
            $id_servico = $_POST["id_servico"];

            $sql = "INSERT INTO agendamento (dia,hora,id_servico)";
            $sql .= "VALUES ('$dia','$hora','$id_servico');";
            mysqli_query($mysqli,$sql);
            echo "Dia: $dia <br>";
            echo "Hora: $hora <br>";
            echo "Horário cadastrado!<br>";
            echo "<a href='gerenciar_servicos.php'>Voltar para o início</a>";
            }
        ?>
        </div>
    </div>
    <?php
    }
    ?>
</body>
</html>
<?php mysqli_close($mysqli); ?>