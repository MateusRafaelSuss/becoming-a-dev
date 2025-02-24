<?php 
///classes abstratas
//parece com interface
//objeto nunca instancia a classe
//criar uma segunda classe que extenda dessa classe abstrata para que possa ser utilizada

interface Veiculo{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function marcha($marcha);

}

abstract class Automovel  implements Veiculo{

    public function acelerar($velocidade){
        echo "O veiculo acelerou até ". $velocidade . "KM/H ";
    }
    public function freiar($velocidade)
    {
        echo "O veiculo frenou até ". $velocidade ."KM/H ";
    }
    public function marcha($marcha)
    {
        echo "O veiculo engatou a marcha " . $marcha;
    }

}

class DelRey extends Automovel{

    public function empurrar(){

    }

}

$carro = new DelRey;
$carro -> acelerar(210);

?> 