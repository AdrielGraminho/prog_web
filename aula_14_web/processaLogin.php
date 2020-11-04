<?php
$login = $_POST["login"];
$senha = $_POST["senha"];

if($login == "teste" && $senha == "123"){
    echo "Seja bem vindo usuário: " . $login;
    echo "<br> <a  href='principal.php'>Entrar no sistema</a>";
	
    session_start();
    $_SESSION["logado"]= "true";

    }else{
		echo "Usuário ou senha invalido";
    } 
?>