<?php
session_start();
echo "Essa é a página 2 <br>";
echo $_SESSION["nome"]. "<br>";
echo $_SESSION["sobrenome"]. "<br>";
echo "Contador: ".$_SESSION["contador"];
echo "<br> <a href='pagina1.php'>Página 1</a>";
?>