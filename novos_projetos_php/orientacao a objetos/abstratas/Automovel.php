<?php 
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



?>