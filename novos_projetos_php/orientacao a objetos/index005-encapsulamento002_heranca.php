<?php 
///Encapsulamento///
//controle sobre quem pode acessar e o que pode acessar um atributo ou método
class Pessoa{

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "RSLF123";

    public function dados(){
        echo $this->nome. ", ";
        echo $this->idade. ", ";
        echo $this -> senha;
    }

}

class Programador extends Pessoa{

    public function dados(){
        echo get_class($this);
        echo $this-> nome. ", ";
        echo $this-> idade. ", ";
        echo $this -> senha;
    }

}

$objeto = new Programador();
$objeto -> dados();

?>