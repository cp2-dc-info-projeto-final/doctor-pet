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
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    .login {
        min-width: 300px;
        width: 30%;
        border: 5px outset red;
        background-color: lightblue;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;    
        }
    body {
        background-color: cyan;
    }

    </style>
</head>
<body>
            <div class="login">
                <h1>Você não fez o login!</h1>
                <p><a href='login.html'>Página de login</a></p>
            </div>    
    </body>
<?php
    exit;
    }
?>