<?php
session_start();
require_once '../../util/Sesion.php';
require_once '../../Layout/Layout.php';
if(Session::NoExisteSesion("user") ) {
    header("location: ../login.php");
    return;
}
//En el caso de actualizar la pagina web entonces llamaremos nuevamente
//al Controlador para de esta manera tener actualizada la lista
//y que no me genere ningun error de carga de datos
if(Session::NoExisteSesion("lista") ) {
    header("location: ../../Controller/ProductoController.php?Op=Listar");
    return;
}
$Lista= Session::getSesion("lista");
Session::eliminarSesion("lista");
$Usuario = Session::getSesion("user");
//estas variables se definen en una sola linea
$jsm = "<link href='../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css' rel='stylesheet'>";
$jsm.= "<link href='../../bower_components/datatables-responsive/css/dataTables.responsive.css' rel='stylesheet'>";
//Llamamos al menu
(new Layout)->menu($jsm, $Usuario);
$print = "../../Controller/ProductoController.php?Op=";
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Producto
            <a href="<?php echo "../../View/Producto/nuevoProducto.php";?>" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-plus"></span> Agregar
            </a>

        </h1>
        <?php
        if (Session::existeSesion("mensaje")){
            $mensaje = Session::eliminarSesion("mensaje");
            if ($mensaje['error'] == 0){
            ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo "NRO DE ERRORES: ".$mensaje['error'].",   MENSAJE: ".$mensaje['mensaje']?>
                </div>
            <?php
            }
            else{
        ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo "NRO DE ERRORES: ".$mensaje['error'].",   MENSAJE: ".$mensaje['mensaje']?>
            </div>
        <?php
            }
        }
        ?>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Relacion de Productos
            </div>
            <!-- /.panel-heading -->

            <div class="panel-body">
                <div class="dataTable_wrapper">
                                        <h2>Busqueda</h2>
                    <p>Ingrese alguna descripcion del producto a buscar    </p>
                     <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
                     <br>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id Producto</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descripcion</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php
                            $url = "../../Controller/ProductoController.php?id=";
                            foreach ($Lista as $row ) {
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['precio']?></td>
                                <td><?php echo $row['descripcion']?></td>

                                <td class="center">
                                    <ul class="nav nav-pills">
                                        <li>
                                            <a href="<?php echo $url . $row['id'] ?>&Op=Ver" title="Ver">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url . $row['id'] ?>&Op=Recuperar" title="Editar">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url . $row['id'] ?>&Op=Eliminar" title="Eliminar"
                                               onclick="return confirm('Se eliminara este registro, ¿Estas Seguro?');">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <script>
                    $(document).ready(function(){
                    $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
                });
                </script>
                <!-- /.table-responsive -->
            </div>

            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?php
//Llamamos al footer y se cierra la pagina
$jsf = "<script src='../../bower_components/DataTables/media/js/jquery.dataTables.min.js'></script>";
$jsf.="<script src='../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js'></script>";
(new Layout)->footer($jsf);
?>
