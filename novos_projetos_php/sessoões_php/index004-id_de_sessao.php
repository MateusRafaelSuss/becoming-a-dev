<?php 
///ID de Sessão

require_once('index003-config.php');
echo session_id();

//Forçar o site a criar nova sessão

require_once('index003-config.php');
session_regenerate_id();
echo session_id();

//como recuperar uma sessão?

session_id('gv9ktdbuhoo18qeieolcre7ppr')
var_dump($_SESSION);

?>