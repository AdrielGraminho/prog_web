<!DOCTYPE html>
<html class=pagina>
<head>
<meta charset="ISO-8859-1">
<title>Cadastro Pessoa</title>
<link href="estilo.css" rel="stylesheet">

</head>
<body>

<?php
$servername = "localhost";
$database = "exercicio_aula_17";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);
if (! $con) {
    die("erro na conexão com o banco de dados" . mysqli_connect_error());
}

echo "Conectado com sucesso no banco de dados. <br>";

if (isset($_GET["metodo"])) {
    $nome = $_POST["nome"];
    $anoFabricacao = $_POST["anoFabricacao"];
    $sql = "insert into carro (id,nome,anoFabricacao) values (null,'" . $nome . "'," . $anoFabricacao . ")";

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
mysqli_close($con);

?>
<br>
	<a href="formulario.html"><button>Inicio</button></a>
	<a href="cadastrados.php"><button>cadastrados</button></a>

</html>