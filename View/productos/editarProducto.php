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
$url = "../../Controller/ProductoController.php";
$UpperCss = "style='text-transform:uppercase;'";
$UpperJs = "onkeyup='javascript:this.value=this.value.toUpperCase();'";
//Solo el contenido que cambiara ira aqui
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Modificar Producto
        <a href="Producto.php" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-hand-left"></span> Volver
        </a>
        </h1>
<!--     </div> -->
    <!-- /.col-lg-12 -->
</div>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Modifique el Producto
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form role="form" method="post" action="<?php echo $url?>">
                        <div class="form-group">
                            <label>Codigo de la Producto</label>
                            <input class="form-control"  value="<?php echo $_REQUEST['cod']?>" disabled="">
                            <input class="hidden-sm"type="text" name="cod" value="<?php echo $_REQUEST['cod']?>" class="form-control" hidden >
                            <input class="hidden-sm"type="text" value="Editar" class="form-control" hidden name="Op" >
                        </div>
                        <div class="form-group">
                            <label>Nombre del Producto</label>
                            <input class="form-control" <?php echo $UpperCss.' '.$UpperJs;?> name="nombres" value="<?php echo $_REQUEST['nom']?>" autofocus>

                            <label>Precio del Producto</label>
                            <input class="form-control" <?php echo $UpperCss.' '.$UpperJs;?> name="precio" value="<?php echo $_REQUEST['prec']?>" autofocus>

                            <label>Nombre del Producto</label>
                            <input class="form-control" <?php echo $UpperCss.' '.$UpperJs;?> name="descripcion" value="<?php echo $_REQUEST['desc']?>" autofocus>
                        </div>
                        <button type="submit" class="btn btn-success" onclick="return confirm('Estas Seguro?');return false;">Guardar</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//Llamamos al footer y se cierra la pagina
(new Layout)->footer();
?>
