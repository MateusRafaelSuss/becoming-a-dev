<?php 
///Parametros por valor X por referencia


//Por valor
$a = 10;
function troca($a){
    $a = 11;
    return $a;

}
echo $a ," ";
echo troca($a);

/////////////////////////////////////////////////////////

//Por referencia
//basta por &$a, que a função irá referenciar a variavel externa

$pessoa = array('nome' => 'Mateus', 'Idade' => 16);
foreach ($pessoa as &$value){
    if(gettype($value) === 'integer')$value += 10;
    echo $value;
}
print_r($pessoa);

?>