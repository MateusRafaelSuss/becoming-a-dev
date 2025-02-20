<?php 
///Atributos e métodos
class Carro{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this -> modelo;
    }
    
    public function setModelo($modeloCarro){
        $this -> modelo = $modeloCarro;
    }
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
    }
}

$gol = new Carro();
//$gol->modelo = "Gol GT"; // Não é possivel acessar uma propriedade privada dessa forma 
$gol->setModelo("Gol GTI");
$gol->setMotor("AP 1.6");
$gol-> setAno(1998);

print_r($gol->completeCar());

?>