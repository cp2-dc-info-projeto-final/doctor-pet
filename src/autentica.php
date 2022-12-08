<?php
    session_start();
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    if(empty($email)){
        ?>
        <html>
<head>
  <link rel="stylesheet" href="_css/bootstrap.css">
  <link rel="stylesheet" href="_css/background.css">
  <link rel="stylesheet" href="_css/login.css">
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    body {
        background-color: rgb(0,255,255, 0.30);
    }
    </style>
</head>
<body>
    <div class="hero">
            <div class="login">
                <h1>Você não fez o login!</h1>
                <p><a href='login.html'>Página de login</a></p>
            </div>  
        </div>  
    </body>
<?php
    exit;
    }
?>