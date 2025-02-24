<?php 
///Polimorfismo
//Ter muitas formas
//métodos com mesmo nome em classes diferentes tem comportamentos diferentes 

abstract class Animal{

    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }
}
class Cachorro extends Animal{
    public function falar()
    {
        return "Late";
    }

}
$scooby = new Cachorro();
echo $scooby -> falar(). " ";
echo $scooby -> mover(). " ";

class Gato extends Animal{
    public function falar()
    {
        return "Mia";
    }
}

$gato = new Gato();
echo $gato -> falar(). " ";
echo $gato -> mover(). " ";

class Passaro extends Animal{
    public function falar(){
        return "Pia ";
    }
    public function mover()
    {
        return "Voa e " .parent ::mover(); //chama a ação da classe pai. :: acessa estatocamente aquele objeto
    }
}

$passaro = new Passaro();
echo $passaro -> falar();
echo $passaro -> mover();
 
?>