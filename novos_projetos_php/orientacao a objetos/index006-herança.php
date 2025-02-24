<?php 
///Herança
//A herança consiste em uma classe que herda atributos e métodos de uma classe pai
class Documentos{

    private $numero;
    
    public function getNumero(){
        $this -> numero;
    }
    public function setNumero($n){
        $this -> numero = $n;
    }
}

class CPF extends Documentos{

    public function validacaoCpf():bool{
        $numeroCPF = $this -> getNumero();
        return true;
    }

}
$doc = new CPF();
$doc -> setNumero("098765079-31");
$doc -> validacaoCpf();

var_dump($doc -> validacaoCpf());
echo $doc -> getNumero();


?>

