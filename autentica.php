<?php
    session_start();
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    if(empty($email)){
        echo "Você não fez o login!";
        echo "<p><a href='login.html'>Página de login</a></p>";
        exit;
    }
?>