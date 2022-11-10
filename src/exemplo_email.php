<?php
    include "envia_email.php";

    $nome = "Fulando de tal";
    $data = "10/11/2022";
    $email = "ramonofemann@gmail.com";

    $assunto = "Exemplo de e-mail pelo PHP";

    $mensagem = "Dados cadastrados:<br>";
    $mensagem .= "<br><b>Nome:</b> $nome";
    $mensagem .= "<br><b>Data:</b> $data";
    $mensagem .= "<br><b>E-mail:</b> $email";

    if(envia_email($email, $assunto, $mensagem)){
        echo "E-mail enviado com sucesso!";
    }
    else{
        echo "Falha no envio do e-mail";
    }
?>