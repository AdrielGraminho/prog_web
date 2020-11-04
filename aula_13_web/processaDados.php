<?php
$nome = $_POST ["nome"];
echo "<br> nome: " .$nome;

$sobrenome = $_POST ["sobrenome"];
echo "<br> sobrenome: " .$sobrenome;

$email = $_POST ["email"];
echo "<br> email: " .$email;

$sexo = $_POST ["sexo"];
if ($sexo == 1)
    echo "<br> Sexo: Masculino";
if ($sexo == 2)
    echo "<br> Sexo: feminino";


?>