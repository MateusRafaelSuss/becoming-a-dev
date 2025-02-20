<?php 
///Teste programação orientada a objetos

 class Computador{
    private $cpu;
    private $gpu;
    private $ram;
    private $hdd;
    private $fonte;
    private $motheboard;

    public function getCpu(){
        return $this -> cpu; 
    }
    public function setCpu($cpu){
        $this -> cpu = $cpu;
    }

    public function getGpu(){
        return $this -> gpu;
    }
    public function setGpu($gpu){
        $this -> gpu = $gpu;
    }

    public function getRam(){
        return $this -> ram;
    }
    public function setRam($ram){
        $this -> ram = $ram;
    }

    public function getHdd(){
        return $this -> hdd;
    }
    public function setHdd($hdd){
        $this ->hdd = $hdd;
    }

    public function getFonte(){
        return $this -> fonte;
    }
    public function setFonte($fonte){
        $this -> fonte = $fonte; 
    }

    public function getMotherboard(){
        return $this -> motheboard;
    }
    public function setMotherboard($motheboard){
        $this -> motheboard = $motheboard;
    }

    public function retornaPC(){
        return array(
            "Processador"=> $this -> getCpu(),
            "Placa de Vídeo" => $this -> getGpu(),
            "Memória ram"=> $this -> getRam(),
            "Hdd"=> $this -> getHdd(),
            "Fonte" => $this -> getFonte(),
            "Placa-mãe"=> $this -> getMotherboard()
        );
    }
 }

 $pc = new Computador;

 $pc -> setCpu("Amd Ryzen 5 5600gt");
 $pc -> setGpu("Nvidia Rtx 2060");
 $pc -> setRam("Risemode 2x8 3200mHz");
 $pc -> setHdd("Ssd segate 1TB");
 $pc -> setFonte("Corsair Cx750");
 $pc -> setMotherboard("Asus Tuf Gaming A520-M AM4");

print_r($pc -> retornaPC());

?>