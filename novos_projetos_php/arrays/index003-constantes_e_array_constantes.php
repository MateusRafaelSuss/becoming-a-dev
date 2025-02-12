<?php 
///Constantes e array constantes
//Constantes: comando "define", pode ser definida como case sensitive ou não

define("SERVIDOR", "127.0.0.1");
echo SERVIDOR;

///////////////////////////////////

define("BANCO_DE_DADOS", [
    "127.0.0.1",
    "root",
    "password",
    "test",
    true //permite chamar a constante com letras maiusculas ou minusculas
]);
print_r(BANCO_DE_DADOS);

////////////////////////////
///constantes já inclusas no php
echo PHP_VERSION;

echo DIRECTORY_SEPARATOR; //indica o tipo de barra que separa ou diretorio \/ por exemplo


?>