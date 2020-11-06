<?php

if(isset($_SESSION["produto"]) && isset($_SESSION["preco"])== "false"){

$produto= $_POST ['produto'] ;
$preco= $_POST ['preco'];
$produto_preco = array ($produto, $preco);

foreach ($produto_preco as $i){
    
    echo $i;
    
}
}
else{

$produto= $_POST ['produto'] ;
$preco= $_POST ['preco'];

array_push($produto_preco, $produto, $preco);

foreach ($produto_preco as $i){
    
    echo $i;
    
}
   
}

?>