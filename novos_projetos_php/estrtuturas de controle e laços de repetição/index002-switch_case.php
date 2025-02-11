<?php 
 //Switch case

 $dia = date("w");
 switch($dia){
    
    case 0: 
        echo "Domingo";
        break;

    case 1 :
        echo "Segunda-Feira";
        break;
    case 2: 
        echo "Terça-Feira";
        break;
    case 3: 
        echo "Quarta-Feira";
        break;
    case 4:
        echo "Quinta-Feira";
        break;
    case 5: 
        echo "Sexta-Feira";
        break;
    case 6: 
        echo "Sábado";
        break;
    default:
    echo "data inválida"; //uma configuração padrão, não permite dados diferentes de 0 a 6

 }







?>