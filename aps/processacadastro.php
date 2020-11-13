<?php
echo "<link rel=”stylesheet” type=”text/css” href=”estilo.css” />";

session_start();

error_reporting(0);
ini_set(“display_errors”, 0 );

if (empty($_SESSION["cadastrado"])) {

$_SESSION['produto_preco'] = array();

$_SESSION["cadastrado"] = "true";
 
 }
 $produto = $_POST['produto'];
 $preco = $_POST['preco'];
 
 array_push($_SESSION['produto_preco'], $produto, $preco);
       
 foreach ($_SESSION['produto_preco'] as $i) {
     
     echo $i . "<br>";
 }
 
 
?>