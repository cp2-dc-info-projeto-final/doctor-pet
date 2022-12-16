<?php
    // Recebe os campos do formulário
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    $novasenha = $_POST["novasenha"];


    include "conecta_mysql.inc";
    $sql= "SELECT * FROM cliente WHERE email = '$email';";
    $res = mysqli_query($mysqli, $sql);
    $erro = 0;
    if(mysqli_num_rows($res) != 1){
        echo "E-mail não cadastrado. Por favor, insira um e-mail válido.<br>";
        $erro = 1;
        }
    else{
        $cliente = mysqli_fetch_array($res);
        if ($cliente["cpf"] != $cpf){
            echo "CPF inválido, por favor insira o CPF corretamente.<br>";
            $erro = 1;
        }
        if ($cliente["telefone"] != $telefone){
            echo "Telefone inválido, por favor insira o telefone corretamente.<br>";
            $erro = 1;
        }
        if ($senha != $novasenha){
            echo "Por favor, repita a senha corretamente.<br>";
            $erro = 1;
        }
        if(strlen($senha) < 5 or strlen($senha) >10){
            echo "Por favor, digite a senha entre 5 e 10 caracteres.<br>";
            $erro = 1;
        }
    }
    if($erro == 0){
        $id_cliente = $cliente["id_cliente"];
        $senha_cript = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "UPDATE cliente SET senha = '$senha_cript'";
        $sql .= "WHERE id_cliente = $id_cliente;";  
        mysqli_query($mysqli,$sql);

        echo "Senha atualizada com sucesso!<br>";
        echo "<a href='login.html'>Voltar para a tela de login</a>"; 
    }
    ?>