<?php 
///Orientação a objetos
 //Class
 class Pessoa {
    public $nome; //public=encapsulamento $nome= atributo
    public function falar(){ //metodo
        return "Meu nome é: " .$this->nome; //$this= objeto, variavel interna do php, serve para referenciar atributos e metodos
    }
 }
$Mateus = new Pessoa();
$Mateus->nome = "Mateus";
echo $Mateus->falar();


?>