<?php

//$nome = $_POST ["nome"];
//$idade = $_POST ["idade"];


$servername = "localhost";
$database = "exerc_aula_16_web";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("erro na conexão com o banco de dados" . mysqli_connect_error());
}

echo "Conectado com sucesso no banco de dados. <br>";
/*
$sql = "insert into pessoa (id,nome,idade) values (null,'" .$nome . "'," .$idade. ")";

if (mysqli_query($con, $sql)){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($con);
*/


$sql = "select * from aluno";

$query = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($query)){
echo $row["id"] . " - " . $row["nome"] . " -" . $row["idade"] . "<br>";
}
mysqli_close($con);

?>