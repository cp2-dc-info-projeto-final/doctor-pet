<?php include "autentica.php";?>

<html>
    <head>
    <link rel="stylesheet" href="_css/sla.css">
    <link rel="stylesheet" href="_css/login.css">
    <link rel="stylesheet" href="_css/background.css">
        <title>Cadastro de Usuário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
    body{
    background-color: rgb(0,255,255, 0.30);
    }
</style>
<script>
    function mascara_cpf(i){
   
        var v = i.value;
        
        if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length-1);
            return;
        }
        
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";

        }
        const handlePhone = (event) => {
  let input = event.target
  input.value = phoneMask(input.value)
}

const phoneMask = (value) => {
  if (!value) return ""
  value = value.replace(/\D/g,'')
  value = value.replace(/(\d{2})(\d)/,"($1) $2")
  value = value.replace(/(\d)(\d{4})$/,"$1-$2")
  return value
}
</script>
    </head>
    <body>
        <?php include "nav.php";?>
    <?php 
    if ($_SESSION["tipo"] == "administrador") {
    ?>
    <div class="hero">
        <div class="login">
        <h1>Cadastro de Usuário</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="inserir">
            <p>Nome: <input type="text" name="nome"></p>
            <p>CPF: <input oninput="mascara_cpf(this)" type="text" name="cpf"
                maxlength='14'
                placeholder="xxx.xxx.xxx-xx"></p>
            <p>E-mail: <input type="email" name="email"
                placeholder="exemplo@gmail.com"
                pattern=".+@gmail.com"></p>
            <p>Telefone: <input type="tel" name="telefone" onkeyup="handlePhone(event)"
                maxlength='15'
                placeholder="(xx) xxxxx-xxxx"
                pattern="[(]{1}[0-9]{2}[)]{1}[ ]{1}[0-9]{5}-[0-9]{4}"></p>
            <p>Data de Nascimento: <input type="date" name="nascimento"></p>
            <p>Senha: <input type="password" name="senha"></p>
            <p>Confirmar senha: <input type="password" name="senha_rep"></p>
            <p>Tipo de usuário: 
                <select name="tipo_usuario">
                    <option value="">Defina o tipo de usuário:</option>
                    <option value="cliente">Cliente</option>
                    <option value="funcionario">Funcionário</option>
                    <option value="administrador">Administrador</option>
                </select>
            </p>       
            <p><input type="submit" value="Enviar"></p>
        </form>

        <h1>Buscar clientes</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="buscar_cliente">
            <p>Nome: <input type="text" name="nome" size="10"></p>
            <p><input type="submit" value="Buscar"></p>
        </form>
        <h1>Mostrar clientes</h1>
        <p>Clique no botão abaixo para mostrar os clientes cadastrados</p>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="exibir_cliente">
            <p><input type="submit" value="Mostrar clientes"></p>
        </form>

        <h1>Buscar funcionários</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="buscar_funcionario">
            <p>Nome: <input type="text" name="nome" size="10"></p>
            <p><input type="submit" value="Buscar"></p>
        </form>
        <h1>Mostrar funcionários</h1>
        <p>Clique no botão abaixo para mostrar os funcionários cadastrados</p>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="exibir_funcionario">
            <p><input type="submit" value="Mostrar funcionários"></p>
        </form>

        <h1>Buscar administradores</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="buscar_administrador">
            <p>Nome: <input type="text" name="nome" size="10"></p>
            <p><input type="submit" value="Buscar"></p>
        </form>
        <h1>Mostrar administradores</h1>
        <p>Clique no botão abaixo para mostrar os administradores cadastrados</p>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="exibir_administrador">
            <p><input type="submit" value="Mostrar administradores"></p>
        </form>

        <h1><a href='servicos/editar_servicos.php'>Gerenciar serviços</a></h1>
    </div>
    </div>
        <?php
        }
        ?>
    </body>
</html>