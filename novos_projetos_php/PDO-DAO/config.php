<?php 
///arquivo de configuração
spl_autoload_register(function($class_name){
    $file_name = "class". DIRECTORY_SEPARATOR .$class_name . "php"
    if(file_exists(($class_name . "php"))){
        require_once($file_name);
    }
});



?>