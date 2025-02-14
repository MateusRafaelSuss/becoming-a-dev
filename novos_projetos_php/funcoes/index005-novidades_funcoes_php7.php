<?php 
///Novidades com funções no php 7

function soma(int ...$valores):string{ 
    return array_sum($valores); //soma de array
}
echo soma(2,3,6,3958,33,4,22,4);



?>