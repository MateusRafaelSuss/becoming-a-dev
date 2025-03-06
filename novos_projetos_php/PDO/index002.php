<?php 
///inserindo dados 
$conn = new PDO("mysql:host=localhost;dbname= dbphp7", "root", "");
$stmt = $conn -> prepare("INSET INTO tb_usuarios(deslogin, dessenha) VALUES(: LOGIN, :PASSWORD)");

$login = "José";
$password = "2222@";

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);

$stmt -> execute();
echo "Dados inseridos!";

?>