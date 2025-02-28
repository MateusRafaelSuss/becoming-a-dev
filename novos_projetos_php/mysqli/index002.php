<?php 
///fazer um comando diretamente no banco de dados

//conexão
$conn = new mysqli("localhost", "root", "", "dbphp7");
if($conn -> connect_error){
    echo "Error". $conn -> connect_error;
}
///

//consulta direta 
$result = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$data = array();
while($row = $result->fetch_array()){
    array_push($data, $row);
  
}
echo json_encode($data);
?>