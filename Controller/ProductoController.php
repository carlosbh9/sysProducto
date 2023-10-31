<?php
session_start();
require_once '../Model/ProductoModel.php';
require_once '../util/Sesion.php';
try {
    //recuperamos la operacion
    $Op = $_REQUEST["Op"];
    $model = new ProductoModel();
    switch ($Op) {
    case 'Listar':
        $Lista = $model->listar();
        Session::setSesion("lista", $Lista);
        $target = "../View/Producto/Producto.php";
        break;
    case 'Guardar':
        $model->setNombreProducto($_REQUEST["nombre"]);
        $model->setPrecioProducto($_REQUEST["precio"]);
        $model->setDescripcionProducto($_REQUEST["descripcion"]);
        echo $Op;
        $msg = $model->insertar();

        Session::setSesion("mensaje", $msg);
         $target = "ProductoController.php?Op=Listar";
        break;
    case 'Ver':
        $id = $_REQUEST["id"];
        $Consulta=$model->recuperarUnProducto($id);
        $Cod = $Consulta['id'];
        $Nombre = $Consulta['nombre'];
        $Precio = $Consulta['precio'];
        $Descripcion = $Consulta['descripcion'];
        $target = "../View/Producto/verProducto.php?cod=".$Cod."&nom=".$Nombre."&prec=".$Precio."&desc=".$Descripcion;
        break;
    case 'Recuperar':
        $id = $_REQUEST["id"];
        $Consulta=$model->recuperarUnProducto($id);
        $Cod = $Consulta['id'];
        $Nombre = $Consulta['nombre'];
        $Precio = $Consulta['precio'];
        $Descripcion = $Consulta['descripcion'];
        $target = "../View/Producto/editarProducto.php?cod=".$Cod."&nom=".$Nombre."&prec=".$Precio."&desc=".$Descripcion;
        break;
    case 'Editar':
        $model->setId($_REQUEST["cod"]);
        $model->setNombreProducto($_REQUEST["nombres"]);

        $model->setPrecioProducto($_REQUEST["precio"]);
        $model->setDescripcionProducto($_REQUEST["descripcion"]);
  
        $msg = $model->editar();
        Session::setSesion("mensaje", $msg);
        $target = "ProductoController.php?Op=Listar";
        break;
    case 'Eliminar':

        $model->setId($_REQUEST["id"]);
        $msg = $model->eliminar();
        Session::setSesion("mensaje", $msg);
        $target = "ProductoController.php?Op=Listar";
        break;
    }
} catch (Exception $e) {
    Session::setSesion("mensajeErr", $e->getMessage());
}
//Redireccionamos
header("location: $target");
