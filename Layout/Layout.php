<?php
/**
 * Description of Layout
 *
 * @author BILLPAZ
 */
class Layout {

    function menu($jsm = "", $Usuario) {
        ?>
        <!DOCTYPE html>
        <html lang="en">

            <head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">

                <title>Sistema de control de productos </title>

                <!-- Bootstrap Core CSS -->
                <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" href="../../css/select2.css">
                <link rel="stylesheet" href="../../css/select2-bootstrap.css">
                <link rel="stylesheet" href="../../css/gh-pages.css">


                <!-- MetisMenu CSS -->
                <link href="../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

                <!-- Timeline CSS -->
                <!--<link href="../../dist/css/timeline.css" rel="stylesheet">-->

                <!-- Custom CSS -->
                <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

                <?php echo $jsm; ?>
                <!-- Morris Charts CSS -->
                <!--<link href="../../bower_components/morrisjs/morris.css" rel="stylesheet">-->

                <!-- Custom Fonts -->
                <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->




                <!-- jQuery -->
                <script src="../../bower_components/jquery/dist/jquery.min.js"></script>


                <!-- Bootstrap Core JavaScript -->
                <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

                <!-- Metis Menu Plugin JavaScript -->
                <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>



            </head>

            <body>

                <div id="wrapper">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="../../View/admin/dashboard.php">SysEjemplo  V-1.0 Bienvenido:
                            <?php echo $Usuario['email'].' ----> '.$Usuario['tipo']; ?>
                            </a>
                        </div>
                        <!-- /.navbar-header -->

                        <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li>
                                        <a href="#">
                                            <div>
                                                <strong>John Smith</strong>
                                                <span class="pull-right text-muted">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <strong>John Smith</strong>
                                                <span class="pull-right text-muted">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <strong>John Smith</strong>
                                                <span class="pull-right text-muted">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="text-center" href="#">
                                            <strong>Read All Messages</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-messages -->
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Mi Perfil</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuracion del sistema </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="../salir.php"><i class="fa fa-sign-out fa-fw"></i> Salir </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <!-- /.dropdown -->
                        </ul>
                        <!-- /.navbar-top-links -->

                        <div class="navbar-default sidebar" role="navigation">
                            <div class="sidebar-nav navbar-collapse">
                                <ul class="nav" id="side-menu">
                                    <li class="sidebar-search">
                                        <div class="input-group custom-search-form">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <!-- /input-group -->
                                    </li>
                                    <li>
                                        <a href="../../View/admin/dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Mantenimiento<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">

                                            <li>
                                                <a href="../../Controller/ProductoController.php?Op=Listar">Productos</a>
                                            </li>
                                            <li>
                                                <a href="../../Controller/ClienteController.php?Op=Listar">Cliente</a>
                                            </li>
                                            <li>
                                                <a href="../../Controller/VentaController.php?Op=Listar">Ventas</a>
                                            </li>

                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>



                                    <li>
                                        <a href="#"><i class="fa fa-wrench fa-fw"></i> OTROS <span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">


                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                    <li>
                                        <a href="../salir.php">Salir</a>
                                    </li>


                                </ul>
                            </div>
                            <!-- /.sidebar-collapse -->
                        </div>
                        <!-- /.navbar-static-side -->
                    </nav>

                    <div id="page-wrapper"> <!-- Begin page-wrapper -->

                        <?php
                    }

function footer($jsf = "") {
    ?>
                    </div>
                    <!-- /END #page-wrapper -->

                </div>
                <!-- /#wrapper -->

                <!-- jQuery -->
                <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
                   <!-- script for new select2 Combobox  -->
                 <script src="../../js/select2.js"></script>
                   <!-- new select2 for Combobox  -->
                <script>
                    $( ".select2" ).select2( { placeholder: "Seleccionar una especie", maximumSelectionSize: 6 } );
                </script>

                <!-- Bootstrap Core JavaScript -->
                <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

                <!-- Metis Menu Plugin JavaScript -->
                <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

                <!-- Morris Charts JavaScript -->
<!--                <script src="../../bower_components/raphael/raphael-min.js"></script>
                <script src="../../bower_components/morrisjs/morris.min.js"></script>
                <script src="../../js/morris-data.js"></script>-->
                <?php echo $jsf; ?>
                <!-- Custom Theme JavaScript -->
                <script src="../../dist/js/sb-admin-2.js"></script>
                <!-- Agregado Recientemente para el Data Table -->
                <script>
                $(document).ready(function() {
                    $('#dataTables-example').DataTable({
                            responsive: true
                    });
                });
                </script>

            </body>
        </html>
        <?php
    }
}
?>
