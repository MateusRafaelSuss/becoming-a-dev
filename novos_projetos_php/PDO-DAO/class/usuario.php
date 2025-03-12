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

public static function getList(){
    $sql = new Sql;
    return $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
}

public static function search($login){
    $sql = new Sql;
    return $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ? ORDER BY deslogin", array(
        'SEARCH'=> "%". $login ."%"
    ));

}

public function login($login, $password){
    $sql = new Sql;
        $result = $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN"=> $login,
            ":PASSWORD" => $password
        ));

        if (isset($result[0])){
            $row = $result[0];
            $this -> setIdusuario($row['idusuario']);
            $this -> setDessenha($row['dessenha']);
            $this -> setDtcadastro(new DateTime($row['dtcadastro']));
        } else {
            throw new Exception("Login ou senha invalidos ", 1);
        }

}

public function setData($data){
        $this -> setIdusuario($data['idusuario']);
        $this -> setDessenha($data['dessenha']);
        $this -> setDtcadastro(new DateTime($data['dtcadastro']));
}

public function insert(){
    $sql = new Sq();
    $results = $sql -> select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
        ':LOGIN' => $this -> getDeslogin(),
        ':PASSWORD' =: $this -> getDessenha()
    ));
}

public function __toString(){
    return json_encode(array(
        "idusuario" => $this -> getIdusuario,
        "desenha" => $this -> getDessenha,
        "dtcadastro" => $this -> getDessenha ->format("d/m/y H:i:s")
    ));
}




?>