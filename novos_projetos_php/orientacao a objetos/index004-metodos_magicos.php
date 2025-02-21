<?php 
///Métodos mágicos///
//O metodo construtor é executado automaticamente quando o objeto é instanciado
//Um método magico pode ser reconhecido pela __construct

class Endereco{

    private $logradouro;
    private $numero; 
    private $cidade;

    public function __construct($log, $num, $cid)
    {
        $this ->logradouro = $log;
        $this -> numero = $num;
        $this -> cidade = $cid;
    }   //o método construtor ajuda a substituir os getters e setters

    public function __destruct()
    {
        var_dump("DESTRUIR");
    }   //Quando o objeto é destruido, removido da memória

    public function __toString()
    {
        return $this ->logradouro. ", " .$this->numero. ", " .$this->cidade;
    }

}


$endereco = new Endereco("Rua Luis Ernestro Fleck", 441, "Marechal Cândido Rondon");
var_dump($endereco);
unset($endereco); //fala que quer retirar o objeto da memória
echo $endereco;

?>