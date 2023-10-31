<?php
    require_once '../util/Sesion.php';
    session_start();
    Session::eliminarSesion("user");
    Session::eliminarSesion("listaClases");
    header("location: login.php");
?>



