<?php 
///Sessões- session
//variaveis de sessão são semelhantes a superglobais
//quando o usuario acessa o site na internet, uma sessão entre usuario e servoidor é criada

session_start();
$_SESSION["nome"] = 'Mateus';


?>