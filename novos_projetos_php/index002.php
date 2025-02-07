<?php 
///basico
 $nome = "Mateus";
 $ano = 1990;
 $salario = 1500.44;
 $bloqueado = false;

 ///composto

 $frutas = array("abacaxi", "laranja", "manga");
 echo $frutas[2];

 ///objeto

 $nascimento = new DateTime();

 ///especiais

 //resource
 $arquivo = fopen("index.php", "r");
 var_dump($arquivo);
 
?>