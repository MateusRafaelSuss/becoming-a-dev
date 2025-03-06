<?php 
///PDO
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");//tipo do banco, nome do banco, servidor; usuario e senha 


$stmt = $conn -> prepare("SELECT * FROM tb_usuarios");
$stmt -> execute();
$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){
    foreach($row as $key => $value){
        echo "". $key;
    }
}

var_dump($results); 



?> 