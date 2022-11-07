<?php
    // Recebe os campos do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    include "conecta_mysql.inc";
    $sql= "SELECT * FROM cliente WHERE email = '$email';";
    $res = mysqli_query($mysqli, $sql);

    //testa se não encontrou o e-mail no banco de dados
    if(mysqli_num_rows($res) != 1){
        include "conecta_mysql.inc";
        $sql= "SELECT * FROM funcionario WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);

        //testa se não encontrou o e-mail no banco de dados
        if(mysqli_num_rows($res) != 1){
            include "conecta_mysql.inc";
            $sql= "SELECT * FROM administrador WHERE email = '$email';";
            $res = mysqli_query($mysqli, $sql);

            //testa se não encontrou o e-mail no banco de dados
            if(mysqli_num_rows($res) != 1){                
            echo "E-mail inválido!";
            echo "<p><a href='login.html'>Página de login</a></p>";
            }
            else{
                $cliente = mysqli_fetch_array($res);
                //Testa se a senha está errada
                if(!password_verify($senha, $cliente['senha'])){
                echo "Senha inválida!";
                echo "<p><a href='login.html'>Página de login</a></p>";
                }            
            else{
                // Abre a sessão e registra as variáveis de login
                session_start();
                $_SESSION["email"] = $email;
                $usuario = "administrador";
                $_SESSION["tipo"] = $usuario;
                //direciona para a página inicial
                header("Location: confirmalogin.php");
                }
            }
        }
        else{
            $cliente = mysqli_fetch_array($res);
            //Testa se a senha está errada
            if(!password_verify($senha, $cliente['senha'])){
                echo "Senha inválida!";
                echo "<p><a href='login.html'>Página de login</a></p>";
            }
        else{
            // Abre a sessão e registra as variáveis de login
            session_start();
            $_SESSION["email"] = $email;
            $usuario = "funcionario";
            $_SESSION["tipo"] = $usuario;
            //direciona para a página inicial
            header("Location: confirmalogin.php");
            }
        }

    }
    else{
        $cliente = mysqli_fetch_array($res);
        //Testa se a senha está errada
        if(!password_verify($senha, $cliente['senha'])){
            echo "Senha inválida!";
            echo "<p><a href='login.html'>Página de login</a></p>";
        }
    else{
        // Abre a sessão e registra as variáveis de login
        session_start();
        $_SESSION["email"] = $email;
        $usuario = "cliente";
        $_SESSION["tipo"] = $usuario;
        //direciona para a página inicial
        header("Location: confirmalogin.php");
        }
    }
?>