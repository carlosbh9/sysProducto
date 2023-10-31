<?php
require_once '../BD/AccesoDB.php';
class ProductoModel {
     //atributos
    private $id;
    private $nombreProducto;
    private $precioProducto;
    private $descripcionProducto;
    //propiedades
    function getId(){ return $this->id; }
    function setId($cod){
        $this->id = $cod;
    }
    function getNombreProducto(){ return $this->nombreProducto; }
    function setNombreProducto($nombres){
        $this->nombreProducto = $nombres;
    }

    function getPrecioProducto(){ return $this->precioProducto; }
    function setPrecioProducto($precio){
        $this->precioProducto = $precio;
    }

    function getDescripcionProducto(){ return $this->descripcionProducto; }
    function setDescripcionProducto($descripcion){
        $this->descripcionProducto = $descripcion;
    }
    //----metodos----------------
    function listar(){
        try {
            $query="call spu_listarProducto();";
            $db = AccesoDB::getInstancia();
            $lista = $db->executeQuery($query);
            return $lista;
        }catch (Exception $e) {
            throw $e;
        }
    }

    function insertar(){
        try {
            $nombre = $this->getNombreProducto();
            $precio = $this->getPrecioProducto();
            $descripcion = $this->getDescripcionProducto();

            echo $nombre;
            $query="call spu_agregarProducto('$nombre',$precio,'$descripcion');";
            echo $query;
            $db = AccesoDB::getInstancia();
            $lista = $db->executeQuery($query);
            $rec = $lista[0];
            return $rec;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function recuperarUnProducto($id){
        try {
            $query = "call spu_recuperarUnProducto('$id');";
            echo $query.'<br>';
            $db = AccesoDB::getInstancia();
            $lista = $db->executeQuery($query);
            $rec = $lista[0];
            return $rec;
        }catch (Exception $e){
            throw $e;
        }

    }

    //Edita una Categoria
    public function editar(){
        try {
            $id = self::getId();
            $nombres = self::getNombreProducto();
            $precio = self::getPrecioProducto();
            $descripcion = self::getDescripcionProducto();
            $query="call spu_modificarProducto('$id','$nombres','$precio','$descripcion');";
            $db = AccesoDB::getInstancia();
            $lista = $db->executeQuery($query);
            $rec = $lista[0];
            return $rec;
        }catch (Exception $e) {
            throw $e;
        }
    }

    function eliminar(){
        try {
            $id = self::getId();
            $query="call spu_eliminarProducto('$id');";
            //echo $query;
            $db = AccesoDB::getInstancia();
            $lista = $db->executeQuery($query);
            $rec = $lista[0];
            return $rec;
        }catch (Exception $e) {
            throw $e;
        }
    }
}
