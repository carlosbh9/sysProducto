<?php
session_start();
require_once '../Model/LoginModel.php';
require_once '../util/Sesion.php';

//echo $_REQUEST["email"].$_REQUEST["pass"].$_REQUEST["Op"];
try {
    //recuperamos la operacion
    $Op = $_REQUEST["Op"];
    $model = new LoginModel();
    switch ($Op) {
    
        case 'Autenticar':  
            
        $model->setEmail($_REQUEST["email"]);
        $model->setPass($_REQUEST["pass"]);
        $recUser = $model->consultarPorUsuario();
        if(($recUser == null) || ($recUser["password"] != $_REQUEST["pass"])){
            //throw new Exception("Usuario o Clave incorrecta!!!!");
            Session::setSesion("error", "Usuario o Clave incorrecta!!!!");
            $target = "../View/login.php";
        }
        else{
            Session::setSesion("user", $recUser);
            $target = "../View/admin/dashboard.php";
        } 
        break; 
    }
    
} catch (Exception $e) {
    Session::setSesion("mensajeErr", $e->getMessage());
    echo 'error!!!!';
}
//Redireccionamos 
header("location: $target");

//print_r($recUser);


