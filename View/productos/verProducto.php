<?php
session_start();
require_once '../../util/Sesion.php';
require_once '../../Layout/Layout.php';
if(Session::NoExisteSesion("user") ) {
    header("location: ../login.php");
    return;
}
$Usuario = Session::getSesion("user");
//Llamamos al menu
(new Layout)->menu("", $Usuario);
$url = "Producto.php";
//Solo el contenido que cambiara ira aqui
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Ver Orden
        <a href="<?php echo $url;?>" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-hand-left"></span> Volver
        </a>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Solo se viasualiza el Producto
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form role="form" method="" action="">
                        <div class="form-group">
                            <label>Cod del Producto</label>
                            <input class="form-control" disabled="" value="<?php echo $_REQUEST['cod']?>">
                        </div>
                        <div class="form-group">
                            <label>Nombre del Producto</label>
                            <input class="form-control" disabled="" value="<?php echo $_REQUEST['nom']?>">
                        </div>
                        <div class="form-group">
                            <label>Precio del Producto</label>
                            <input class="form-control" disabled="" value="<?php echo $_REQUEST['prec']?>">
                        </div>
                        <div class="form-group">
                            <label>Descripcion del Producto</label>
                            <input class="form-control" disabled="" value="<?php echo $_REQUEST['desc']?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php (new Layout)->footer(); ?>
