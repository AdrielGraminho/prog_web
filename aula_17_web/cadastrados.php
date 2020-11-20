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

$sql = "select * from carro";

$query = mysqli_query($con, $sql);

echo "<table>";
echo "<tr> <td> id </td> ";
echo "<td> nome </td> ";
echo "<td> Ano de Fabricacao </td> </tr>";

while ($row = mysqli_fetch_array($query)) {
    echo "<tr> <td>" . $row["id"] . "  </td>";
    echo "<td>" . $row["nome"] . " </td>";
 
    echo "<td>" . $row["anoFabricacao"] . "</td> ";
    echo "<td><a href=removecarro.php?id_carro=". $row["id"] .">remover</a></td></tr>";
    
}    
echo "</table>";


mysqli_close($con);

?>
<br>
<a href="formulario.html"><button>Inicio</button></a>


</html>