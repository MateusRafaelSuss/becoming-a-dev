<?php 
///Atributos e métodos
class Carro{ //cria a classe carro
    private $modelo; 
    private $motor;
    private $ano;
    //os atributos foram definidos como privados
    public function getModelo(){
        return $this -> modelo;
    } //a função usa o metodo get para pegar o modelo e retornar o modelo como objeto
    
    public function setModelo($modeloCarro){
        $this -> modelo = $modeloCarro;
    } //a função usa o metodo set para definir o modelo do carro

    public function getMotor(){
        return $this -> motor;
    }

    public function setMotor($motorCarro){
        $this -> motor = $motorCarro;
    }

    public function getAno(){
        return $this -> ano;
    }

    public function setAno($anoCarro){
        $this -> ano = $anoCarro;
    }

    public function completeCar(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(), 
            "ano"=>$this->getAno()
        );
    } //um array é criado, as chaves "modelo", "motor" e "ano" são associadas a um valor dentro do array, neste caso, estão associados ao valor retornado por $this->getModelo() e os outros metodos get.
}

$gol = new Carro();
//$gol->modelo = "Gol GT"; // Não é possivel acessar uma propriedade privada dessa forma 

$gol->setModelo("Gol GTI");
$gol->setMotor("AP 1.6");
$gol-> setAno(1998);

print_r($gol->completeCar());

///////////////////////////////////////////////////////////////////////////

$jetta = new Carro();

$jetta ->setModelo("Jetta TSI");
$jetta -> setMotor("VW 2.0");
$jetta -> setAno("2019");

print_r($jetta->completeCar());
//nas linhas $jetta = new carro, o comando cria um novo objeto dentro da classe Carro e armazena na variavel $jetta. Agora, $jetta é um objeto que possui todas as propriedades e metodos definidos na classe carro.
?>