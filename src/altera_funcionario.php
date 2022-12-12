<?php 
    include "conecta_mysql.inc";
    include "autentica.php";
    $id_funcionario = $_GET["id_funcionario"];
    $sql = "SELECT * FROM funcionario WHERE id_funcionario = $id_funcionario;"; 
    $res = mysqli_query($mysqli,$sql);
    $funcionario = mysqli_fetch_array($res);
?>
<html>
    <head>
    <link rel="stylesheet" href="_css/custom.css">
    <link rel="stylesheet" href="_css/background.css">
    <link rel="stylesheet" href="_css/sla.css">
        <link rel="stylesheet" href="_css/login.css">
        <title>Edição de Usuário</title>
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
    <div class="hero">
    <div class="login">
        <h1>Edição de Usuário</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="editar_funcionario">
            <input type="hidden" name="id_funcionario" value="<?php echo $id_funcionario?>">
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
            <p><input type="submit" value="Enviar"></p>
        </form>
    </div>
</div>
    </body>
</html>