<?php include "conecta_mysql.inc"; ?>
<?php include "autentica.php"; ?>

<html>
    <head>
    <link rel="stylesheet" href="_css/custom.css">
    <link rel="stylesheet" href="_css/background.css">
    <link rel="stylesheet" href="_css/sla.css">
        <title>Dados Cadastrados</title>
        <meta charset="UTF-8">
        <style>
                body{
    background-color: rgb(0,255,255, 0.30);
    }
</style>
    </head>
    <body>
    <?php include "nav.php"; ?>
    <div class="login">
        <h1>Dados Cadastrados</h1>
<?php
    $operacao = $_REQUEST["operacao"];

    if($operacao == "inserir"){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $nascimento = $_POST["nascimento"];
        $senha = $_POST["senha"];
        $senha_rep = $_POST["senha_rep"];
        $tipo_usuario = $_POST["tipo_usuario"];

        $erro = 0;

        if(empty($nome) or strstr($nome, ' ') == false){
            echo "Por favor, preencha o nome completo.<br>";
            $erro = 1;
        }

        if(strstr ($cpf, '.','-') == false or strlen($cpf) != 14){
            echo "Por favor, digite o CPF corretamente.<br>";
            $erro = 1;
        }

        if(strlen($email) < 10 or strstr($email, '@') == false){
            echo "Por favor, preencha o e-mail corretamente.<br>";
            $erro = 1;
        }

        $sql = "SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.<br>";
            echo "<a href='cadastro_usuario.php'>Voltar para o início</a>";
            $erro = 1;
            $sql = "SELECT * FROM funcionario WHERE email = '$email';";
            $res = mysqli_query($mysqli, $sql);
        
            //Testa se já existe o e-mail cadastrado
            if(mysqli_num_rows($res) == 1){
                echo "E-mail já cadastrado. Por favor, digite outro e-mail.<br>";
                echo "<a href='cadastro_usuario.php'>Voltar para o início</a>";
                $erro = 1;
                $sql = "SELECT * FROM administrador WHERE email = '$email';";
                $res = mysqli_query($mysqli, $sql);
            
                //Testa se já existe o e-mail cadastrado
                if(mysqli_num_rows($res) == 1){
                    echo "E-mail já cadastrado. Por favor, digite outro e-mail.<br>";
                    echo "<a href='cadastro_usuario.php'>Voltar para o início</a>";
                    $erro = 1;
                }
            }
        }

        $sql = "SELECT * FROM cliente WHERE telefone = '$telefone';";
        $res = mysqli_query($mysqli, $sql);
        
        if(strlen($senha) < 5 or strlen($senha) >10){
            echo "Por favor, digite a senha entre 5 e 10 caracteres.<br>";
            $erro = 1;
        }

        if($senha != $senha_rep){
            echo "Por favor, repita a senha corretamente.<br>";
            $erro = 1;
        }


        if(empty($nascimento)){
            echo "Por favor, preencha a data.<br>";
            $erro = 1;
        }

        if(empty($tipo_usuario)){
            echo "Por favor, defina um tipo de usuário.<br>";
            $erro = 1;
        }
        
        if($erro == 0 AND $tipo_usuario == 'cliente'){
            $senha_cript = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO cliente (nome,cpf,email,telefone,senha,nascimento)";
            $sql .= "VALUES ('$nome','$cpf','$email','$telefone','$senha_cript','$nascimento');";
            mysqli_query($mysqli,$sql);
            echo "Nome: $nome <br>";
            echo "CPF: $cpf <br>";
            echo "E-mail: $email <br>";
            echo "Telefone: $telefone <br>";
            echo "Data de nascimento: $nascimento <br>";
            echo "<a href='cadastro_usuario.php'>Voltar para o início</a>";
        }
        else if($erro == 0 AND $tipo_usuario == 'funcionario'){
            $senha_cript = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO funcionario (nome,cpf,email,telefone,senha,nascimento)";
            $sql .= "VALUES ('$nome','$cpf','$email','$telefone','$senha_cript','$nascimento');";
            mysqli_query($mysqli,$sql);
            echo "Nome: $nome <br>";
            echo "CPF: $cpf <br>";
            echo "E-mail: $email <br>";
            echo "Telefone: $telefone <br>";
            echo "Data de nascimento: $nascimento <br>";
            echo "<a href='cadastro_usuario.php'>Voltar para o início</a>";
        }
        else if($erro == 0 AND $tipo_usuario == 'administrador'){
            $senha_cript = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO administrador (nome,cpf,email,telefone,senha,nascimento)";
            $sql .= "VALUES ('$nome','$cpf','$email','$telefone','$senha_cript','$nascimento');";
            mysqli_query($mysqli,$sql);
            echo "Nome: $nome <br>";
            echo "CPF: $cpf <br>";
            echo "E-mail: $email <br>";
            echo "Telefone: $telefone <br>";
            echo "Data de nascimento: $nascimento <br>";
            echo "<a href='cadastro_usuario.php'>Voltar para o início</a>";
        }
    }
    else if($operacao == "exibir_cliente"){
        $sql = "SELECT * FROM cliente;"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $cliente = mysqli_fetch_array($res);
            echo "Nome: ".$cliente["nome"]."<br>";
            echo "E-mail: ".$cliente["email"]."<br>";
            echo "Data de nascimento: ".$cliente["nascimento"]."<br>";
            echo "CPF: ".$cliente["cpf"]."<br>";
            echo "Telefone: ".$cliente["telefone"]."<br>";
            echo "<a href='altera_cliente.php?id_cliente=".$cliente["id_cliente"]."'>
            Editar cliente</a><br>";
            echo "<a href='pagina_extra.php?operacao=excluir_cliente&id_cliente=".$cliente["id_cliente"]."'>
            Excluir cliente</a><br>";
            echo "---------------------<br>";
        }
    }
    else if($operacao == "buscar_cliente"){
        $nome = $_POST["nome"];
        $sql = "SELECT * FROM cliente WHERE nome like '%$nome%';"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $cliente = mysqli_fetch_array($res);
            echo "Nome: ".$cliente["nome"]."<br>";
            echo "E-mail: ".$cliente["email"]."<br>";
            echo "Data de nascimento: ".$cliente["nascimento"]."<br>";
            echo "CPF: ".$cliente["cpf"]."<br>";
            echo "Telefone: ".$cliente["telefone"]."<br>";
            echo "<a href='altera_cliente.php?id_cliente=".$cliente["id_cliente"]."'>
            Editar cliente</a><br>";
            echo "<a href='pagina_extra.php?operacao=excluir&id_cliente=".$cliente["id_cliente"]."'>
            Excluir cliente</a><br>";
            echo "---------------------<br>";
        }
    }
    else if($operacao == "editar_cliente"){
        $id_cliente = $_POST["id_cliente"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $nascimento = $_POST["nascimento"];

        $erro = 0;

        if(empty($nome) or strstr($nome, ' ') == false){
            echo "Por favor, preencha o nome completo.<br>";
            $erro = 1;
        }

        if(strstr ($cpf, '.','-') == false or strlen($cpf) != 14){
            echo "Por favor, digite o CPF corretamente.<br>";
            $erro = 1;
        }

        $sql = "SELECT * FROM cliente WHERE email = '$email' AND id_cliente != '$id_cliente';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.";
            echo "<a href='gerenciar_clientes.php'>Voltar para o início</a>"; 
            $erro = 1;
            }


        $sql = "SELECT * FROM funcionario WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.";
            echo "<a href='gerenciar_clientes.php'>Voltar para o início</a>"; 
            $erro = 1;
        }

        $sql = "SELECT * FROM administrador WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.";
            echo "<a href='gerenciar_clientes.php'>Voltar para o início</a>"; 
            $erro = 1;
        }

        if(strlen($email) < 10 or strstr($email, '@') == false){
            echo "Por favor, preencha o e-mail corretamente.<br>";
            $erro = 1;
        }

        if(empty($nascimento)){
            echo "Por favor, preencha a data.<br>";
            $erro = 1;
        }

        if($erro == 0){
            $sql = "UPDATE cliente SET nome = '$nome', cpf = '$cpf', email = '$email', 
            nascimento = '$nascimento', telefone = '$telefone'";
            $sql .= "WHERE id_cliente = $id_cliente;";  
            mysqli_query($mysqli,$sql);

            echo "Cliente atualizado com sucesso!<br>";
            echo "<a href='gerenciar_clientes.php'>Voltar para o início</a>"; 
        }
    }
    else if($operacao == "excluir_cliente"){
        $id_cliente = $_GET["id_cliente"];
        $sql = "DELETE FROM cliente WHERE id_cliente = $id_cliente;"; 
        mysqli_query($mysqli,$sql);
        echo "Cliente excluído com sucesso!<br>";
        echo "<a href='gerenciar_clientes.php'>Voltar para o início</a>";
    }
    else if($operacao == "exibir_funcionario"){
        $sql = "SELECT * FROM funcionario;"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $funcionario = mysqli_fetch_array($res);
            echo "Nome: ".$funcionario["nome"]."<br>";
            echo "E-mail: ".$funcionario["email"]."<br>";
            echo "Data de nascimento: ".$funcionario["nascimento"]."<br>";
            echo "CPF: ".$funcionario["cpf"]."<br>";
            echo "Telefone: ".$funcionario["telefone"]."<br>";
            echo "<a href='altera_funcionario.php?id_funcionario=".$funcionario["id_funcionario"]."'>
            Editar Funcionário</a><br>";
            echo "<a href='pagina_extra.php?operacao=excluir_funcionario&id_funcionario=".$funcionario["id_funcionario"]."'>
            Excluir funcionário</a><br>";
            echo "---------------------<br>";
        }
    }
    else if($operacao == "buscar_funcionario"){
        $nome = $_POST["nome"];
        $sql = "SELECT * FROM funcionario WHERE nome like '%$nome%';"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $funcionario = mysqli_fetch_array($res);
            echo "Nome: ".$funcionario["nome"]."<br>";
            echo "E-mail: ".$funcionario["email"]."<br>";
            echo "Data de nascimento: ".$funcionario["nascimento"]."<br>";
            echo "CPF: ".$funcionario["cpf"]."<br>";
            echo "Telefone: ".$funcionario["telefone"]."<br>";
            echo "<a href='altera_funcionario.php?id_funcionario=".$funcionario["id_funcionario"]."'>
            Editar Funcionário</a><br>";
            echo "<a href='pagina_extra.php?operacao=excluir_funcionario&id_funcionario=".$funcionario["id_funcionario"]."'>
            Excluir funcionário</a><br>";
            echo "---------------------<br>";
        }
    }
    else if($operacao == "editar_funcionario"){
        $id_funcionario = $_POST["id_funcionario"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $nascimento = $_POST["nascimento"];

        $erro = 0;

        if(empty($nome) or strstr($nome, ' ') == false){
            echo "Por favor, preencha o nome completo.<br>";
            $erro = 1;
        }

        if(strstr ($cpf, '.','-') == false or strlen($cpf) != 14){
            echo "Por favor, digite o CPF corretamente.<br>";
            $erro = 1;
        }

        $sql = "SELECT * FROM funcionario WHERE email = '$email' AND id_funcionario != '$id_funcionario';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.";
            echo "<a href='gerenciar_funcionarios.php'>Voltar para o início</a>"; 
            $erro = 1;
            }


        $sql = "SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.";
            echo "<a href='gerenciar_funcionarios.php'>Voltar para o início</a>"; 
            $erro = 1;
        }

        $sql = "SELECT * FROM administrador WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.";
            echo "<a href='gerenciar_funcionarios.php'>Voltar para o início</a>"; 
            $erro = 1;
        }

        if(strlen($email) < 10 or strstr($email, '@') == false){
            echo "Por favor, preencha o e-mail corretamente.<br>";
            $erro = 1;
        }

        if(empty($nascimento)){
            echo "Por favor, preencha a data.<br>";
            $erro = 1;
        }

        if($erro == 0){
            $sql = "UPDATE funcionario SET nome = '$nome', cpf = '$cpf', email = '$email', 
            nascimento = '$nascimento', telefone = '$telefone'";
            $sql .= "WHERE id_funcionario = $id_funcionario;";  
            mysqli_query($mysqli,$sql);

            echo "Funcionário atualizado com sucesso!<br>";
            echo "<a href='gerenciar_funcionarios.php'>Voltar para o início</a>"; 
        }
    }
    else if($operacao == "excluir_funcionario"){
        $id_funcionario = $_GET["id_funcionario"];
        $sql = "DELETE FROM funcionario WHERE id_funcionario = $id_funcionario;"; 
        mysqli_query($mysqli,$sql);
        echo "Funcionário excluído com sucesso!<br>";
        echo "<a href='gerenciar_funcionario.php'>Voltar para o início</a>";
    }
    else if($operacao == "exibir_administrador"){
        $sql = "SELECT * FROM administrador;"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $administrador = mysqli_fetch_array($res);
            echo "Nome: ".$administrador["nome"]."<br>";
            echo "E-mail: ".$administrador["email"]."<br>";
            echo "Data de nascimento: ".$administrador["nascimento"]."<br>";
            echo "CPF: ".$administrador["cpf"]."<br>";
            echo "Telefone: ".$administrador["telefone"]."<br>";
            echo "<a href='altera_administrador.php?id_administrador=".$administrador["id_administrador"]."'>
            Editar administrador</a><br>";
            echo "<a href='pagina_extra.php?operacao=excluir_administrador&id_administrador=".$administrador["id_administrador"]."'>
            Excluir administrador</a><br>";
            echo "---------------------<br>";
        }
    }
    else if($operacao == "buscar_administrador"){
        $nome = $_POST["nome"];
        $sql = "SELECT * FROM administrador WHERE nome like '%$nome%';"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $administrador = mysqli_fetch_array($res);
            echo "Nome: ".$administrador["nome"]."<br>";
            echo "E-mail: ".$administrador["email"]."<br>";
            echo "Data de nascimento: ".$administrador["nascimento"]."<br>";
            echo "CPF: ".$administrador["cpf"]."<br>";
            echo "Telefone: ".$administrador["telefone"]."<br>";
            echo "<a href='altera_administrador.php?id_administrador=".$administrador["id_administrador"]."'>
            Editar administrador</a><br>";
            echo "<a href='pagina_extra.php?operacao=excluir&id_administrador=".$administrador["id_administrador"]."'>
            Excluir administrador</a><br>";
            echo "---------------------<br>";
        }
    }
    else if($operacao == "editar_administrador"){
        $id_administrador = $_POST["id_administrador"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $nascimento = $_POST["nascimento"];

        $erro = 0;

        if(empty($nome) or strstr($nome, ' ') == false){
            echo "Por favor, preencha o nome completo.<br>";
            $erro = 1;
        }

        if(strstr ($cpf, '.','-') == false or strlen($cpf) != 14){
            echo "Por favor, digite o CPF corretamente.<br>";
            $erro = 1;
        }

        $sql = "SELECT * FROM administrador WHERE email = '$email' AND id_administrador != '$id_administrador';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.";
            echo "<a href='gerenciar_administradores.php'>Voltar para o início</a>"; 
            $erro = 1;
            }


        $sql = "SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.";
            echo "<a href='gerenciar_funcionarios.php'>Voltar para o início</a>"; 
            $erro = 1;
        }

        $sql = "SELECT * FROM funcionario WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
    
        //Testa se já existe o e-mail cadastrado
        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.";
            echo "<a href='gerenciar_funcionarios.php'>Voltar para o início</a>"; 
            $erro = 1;
        }

        if(strlen($email) < 10 or strstr($email, '@') == false){
            echo "Por favor, preencha o e-mail corretamente.<br>";
            $erro = 1;
        }

        if(empty($nascimento)){
            echo "Por favor, preencha a data.<br>";
            $erro = 1;
        }

        if($erro == 0){
            $sql = "UPDATE administrador SET nome = '$nome', cpf = '$cpf', email = '$email', 
            nascimento = '$nascimento', telefone = '$telefone'";
            $sql .= "WHERE id_administrador = $id_administrador;";  
            mysqli_query($mysqli,$sql);

            echo "Administrador atualizado com sucesso!<br>";
            echo "<a href='gerenciar_administradores.php'>Voltar para o início</a>"; 
        }
    }
    else if($operacao == "excluir_administrador"){
        $id_administrador = $_GET["id_administrador"];
        $sql = "DELETE FROM administrador WHERE id_administrador = $id_administrador;"; 
        mysqli_query($mysqli,$sql);
        echo "Administrador excluído com sucesso!<br>";
        echo "<a href='gerenciar_administradores.php'>Voltar para o início</a>";
    }    
?>
</div>

    </body>
</html>
<?php mysqli_close($mysqli); ?>