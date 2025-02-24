<?php 
///interface
//organizar o código
//quem implementar a interface, precisa ter metodos, parametros e tipo de declaração que deve ser contida na aplicação

interface Veiculo{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function marcha($marcha);

}

class Civic implements Veiculo{

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

$carro = new civic();
$carro -> acelerar(285);
$carro -> marcha(6);
?>