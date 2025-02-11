<?php 
//chamando a função criada no index008.php

include "index008-include_and_require.php"; //inclui o arquivo do index008.php. tenta funcionar mesmo que o arquivo não exista ou esteja com problemas 
require "index008-include_and_require.php"; //ele requer que o arquivo exista e esteja funcionando corretamente

$resultado = soma(10 , 20);
echo($resultado); 

?>