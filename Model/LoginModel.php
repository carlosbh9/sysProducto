<?php
require_once '../BD/AccesoDB.php';

class LoginModel{
    
    private $IdUsuario;
    private $Email;
    private $Password;
    private $Tipo;
    private $Habilitado;
    private $FechaRegistro;

    function getId(){ return $this->IdUsuario; }
    function setId($id){
        $this->IdUsuario = $id;
    }
    
    function getEmail(){ return $this->Email; }
    function setEmail($email){
        $this->Email = $email;
    }
    
    function getPass(){ return $this->Password; }
    function setPass($pass){
        $this->Password = $pass;
    }
    
    function getTipo(){ return $this->Tipo; }
    function setTipo($tipo){
        $this->Tipo = $tipo;
    }
    
    function getHabilitado(){ return $this->Habilitado; }
    function setHabilitado($habilitado){
        $this->Habilitado = $habilitado;
    }
    
    function getFecha(){ return $this->FechaRegistro; }
    function setFecha($fecha){
        $this->FechaRegistro = $fecha;
    }

    // Consulta los datos de un usuario por su nombre de usuario
    public function consultarPorUsuario(){
        try {
            $user = self::getEmail();
            $pass = self::getPass();
            
            $query = "select * from TUsuario where email = '$user' and password = '$pass' and habilitado = 1";
//            $query = "call spu_recuperarUsuario('$usuario')";
            $db = new AccesoDB();
            $lista = $db->executeQuery($query);
            $rec = null;
            if( count($lista) == 1 ){
                $rec = $lista[0];
            }   
            return $rec;
        } catch (Exception $e) {
            throw $rec;
        }
    }

}
?>

