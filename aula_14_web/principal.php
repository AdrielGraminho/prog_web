<?php
session_start();
if(isset($_SESSION["logado"]) && $_SESSION["logado"]= "true"){
echo "<h2> Bem vindo ao sistema</h2>";
}
else {
    echo "faça login";
}
?>