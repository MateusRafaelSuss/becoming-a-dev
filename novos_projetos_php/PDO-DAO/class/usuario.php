<?php 
class usuario{
    private $idusuario;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario(){
        return $this -> idusuario;
    }

    public function setIdusuario($user){
        $this -> idusuario = $user;

    }
    //////////////////////////////////////////////////

    public function getDessenha(){
        return $this -> dessenha;
    }

    public function setDessenha($senha){
        $this -> dessenha = $senha;
    }
    /////////////////////////////////////////////////////

    public function getDtcadastro(){
        return $this -> dtcadastro;
    }

    public function setDtcadastro($dt){
        $this -> dtcadastro = $dt;
    }
    //////////////////////////////////////////////////////////

    public function loadByid($id){
        $sql = new Sql;
        $result = $sql -> select("SELECT * FROM tb_usuarios WHERE idusuarios = :ID", array(
            ":ID"=> $id
        ));

        if (isset($result[0])){
            $row = $result[0];
            $this -> setIdusuario($row['idusuario']);
            $this -> setDessenha($row['dessenha']);
            $this -> setDtcadastro(new DateTime($row['dtcadastro']));
        }

    }

}

public function __toString(){
    return json_encode(array(
        "idusuario" => $this -> getIdusuario,
        "desenha" => $this -> getDessenha,
        "dtcadastro" => $this -> getDessenha ->format("d/m/y H:i:s")
    ));
}




?>