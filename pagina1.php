<?php
session_start();
echo "Essa é a página 1 <br>";
$_SESSION["nome"] = "Roberto";
$_SESSION["sobrenome"] = "Carlos";
echo "Contador: ".$_SESSION["contador"];
echo "<br> <a href='pagina2.php'>Página 2</a>";
?>