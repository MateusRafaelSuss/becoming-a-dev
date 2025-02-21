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
$objeto = new Pessoa();
echo $objeto -> nome.", "; //publico todos podem ter acesso
echo $idade -> idade.", "; //não da pra acessar um objeto protegido. Só acessa quem está nessa clase ou quem herda dessa classe
echo $senha -> senha. ", "; //é mais protegido que o protected. Nem mesmo os que herdam dela tem acesso, somente a sua classe

$objeto -> Dados(); //Com a função dados definida como pública, é possivel acessar os objetos encapsulados mesmo com private e protected



?>