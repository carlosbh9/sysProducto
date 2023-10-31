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
$url = "../../Controller/ProductoController.php?Op=Guardar";
$UpperCss = "style='text-transform:uppercase;'";
$UpperJs = "onkeyup='javascript:this.value=this.value.toUpperCase();'";
//Solo el contenido que cambiara ira aqui
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Nuevo Producto</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Ingrese un nuevo Producto
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form role="form" method="post" action="<?php echo $url?>">
                        <div class="form-group">
                            <label>Nombre del Producto</label>
                            <input class="form-control" <?php echo $UpperCss.' '.$UpperJs;?> name="nombre" autofocus>
                            <label>Precio del Producto</label>
                            <input class="form-control" <?php echo $UpperCss.' '.$UpperJs;?> name="precio" autofocus>
                            <label>Descripcion del Producto</label>
                            <input class="form-control" <?php echo $UpperCss.' '.$UpperJs;?> name="descripcion" autofocus>
                            <p class="help-block">Ejemplo: ---- rellenar con ordenes aqui , etc.</p>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <button type="reset" class="btn btn-warning">Resetear</button>
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
