<?php

$lista = ["cachorro", "gato", "coelho"];
$j=0;

$animal= $_POST ['animal'] ;

foreach ($lista as $i){
    if ($i === $animal ){
        echo "item encontrado\n";
        $j=1;
    }   
   
}

if($j==0){
    echo "nao encontrado";
}

?>