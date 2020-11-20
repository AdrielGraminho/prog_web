<!DOCTYPE html>
<html class=pagina>
<head>
<meta charset="ISO-8859-1">
<title>Cadastro Pessoa</title>
<link href="estilo.css" rel="stylesheet">

</head>
<body>

<?php

$id = $_GET["id_carro"];
$servername = "localhost";
$database = "exercicio_aula_17";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);
if (! $con) {
    die("erro na conexão com o banco de dados" . mysqli_connect_error());
}

echo "Conectado com sucesso no banco de dados. <br>";

$sql = "DELETE FROM carro WHERE carro .id  = " .$id;
if (mysqli_query($con, $sql)){
    echo "Removido " . $id . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>
<a href="formulario.html"><button>Inicio</button></a>
<a href="cadastrados.php"><button>cadastrados</button></a>

</html>