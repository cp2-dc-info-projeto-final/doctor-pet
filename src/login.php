<?php
    // Recebe os campos do formul�rio
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //Realiza a consulta do banco de dados
    include "conecta_mysql.inc";
    $sql = "SELECT * FROM cliente WHERE email = '$email';";
    $res = mysqli_query($mysqli, $sql);

    //Testa se n�o encontrou o e-mail
    if(mysqli_num_rows($res) != 1){
        echo "E-mail inv�lido!";
        echo "<p><a href='login.html'>P�gina de login</a></p>";
    }
    else{
        $cliente = mysqli_fetch_array($res);
        //Testa se a senha est� errada
        if($senha != $cliente["senha"]){
            echo "Senha inv�lida!";
            echo "<p><a href='login.html'>P�gina de login</a></p>";
    }
    else{
        //direciona para a p�gina inicial
        header("Location: form_extra.html");
    }
}
?>