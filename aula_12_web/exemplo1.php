<html>
<head>
<title>exemplo1 php</title>
</head>
<body>

	<?php 

	$nome = "Pedro";
	$idade =17;
	 echo '<b> Isso esta sendo executado em php </b> ';
	 echo "<br>";
	 
	 if($idade <18){
	  
	     echo "menor de idade";
	     
	 }else{
	     echo "maior de idade";
	 }
	 
	 echo "<br>";
	 echo $nome;
	 echo "<br>";
	 echo $idade;
	 
	 echo "<br>";
	 $valor1 = 20;
	 $valor2 = 20;
	 
	 echo "a soma dos valores e " .($valor1 + $valor2);
	 

	?>

</body>
</html>