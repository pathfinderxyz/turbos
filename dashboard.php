<?php 
    session_start();

    $id=$_GET['id'];
        
    error_reporting(0);
        
    include "login/seguridad.php";
    //include "Errores/mostrar_errores.php";
    include "coneccion/coneccion.php"; 

    $sql = pg_query("select * from usuarios where id='$id'");
    $row = pg_num_rows($sql);
    if ($row) {
        $info = pg_fetch_assoc($sql);
        $_SESSION['usuario'] = $info['usuario'];
        $_SESSION['rol'] = $info['rol'];
        $_SESSION['id']=$info['id'];
        $_SESSION['nombre']=$info['nombre'];
        $_SESSION['apellido']=$info['apellido'];
        $_SESSION['fecha']=$info['fecha'];
        $_SESSION['correo']=$info['correo'];
        $_SESSION['telefono']=$info['telefono'];
        $_SESSION['pais']=$info['pais'];
         $_SESSION['patrocinador']=$info['patrocinador'];
         $_SESSION['id_refer_padre']=$info['id_refer_padre'];
        
    }
    
    $file = "";//Vista a cargar
    $m_menu = "";
    
    //Control peticiones por rol
    if ($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == 'referido' ) { //lo que hace aqui es preguntar :
          // si el usuario es tu, da o su entonces si lo que se devolvio por parametros get fue page = xxxxxx entonces llevalo alla 
        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'registrar') {
                $file = 'registrar/registro.php';                
            }elseif ($_GET['page'] == 'opciones') {
                $file = 'biennacional/opciones.php';   
            }elseif ($_GET['page'] == 'home') {
                $file = 'home.php';   
            }elseif ($_GET['page'] == 'recepcion') {
                $file = 'recepcion/recepcion.php';   
            }elseif ($_GET['page'] == 'recepcion') {
                $file = 'recepcion/recepcion.php';   
            }elseif ($_GET['page'] == 'almacen') {
                $file = 'almacen/almacen.php';   
            }elseif ($_GET['page'] == 'produccion') {
                $file = 'produccion/produccion.php';   
            }elseif ($_GET['page'] == 'trabajo') {
                $file = 'trabajo/trabajo.php';   
            }elseif ($_GET['page'] == 'reportes') {
                $file = 'reportes/reportes.php';   
            }elseif ($_GET['page'] == 'usuario') {
                $file = 'usuario/crear_usuario.php';   
            }elseif ($_GET['page'] == 'listusuario') {
                $file = 'usuario/listado_usuario.php';   
            }
        }else{
            $file = 'inicio.php';  
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icon.png">
    <title>Dashboard | Turbos</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"href="assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <!-- Custom CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style type="text/css">
.topbar .navbar-collapse {
    padding: 0;
    background: #000733 !important;
}
</style>
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Cargando</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="?page=home">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-turbos.png" alt="homepage" class="dark-logo" style="width: 40px;"/>
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-ditsa.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-ditsa.png" alt="homepage" class="dark-logo" style="width: 120px;margin-left: 10px;
"/>
                         <!-- Light Logo text -->    
                         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>
                     </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                     <div><h6><span style="color: #fff !important;"> <?php  echo $_SESSION['nombre'];?><span> <h6></div> 
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-settings"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Configuraciones</div>
                                    </li>
                                    <li>
                                        <div class="message-center ">
                                            <!-- Message -->
                                            <a href="?page=usuario">
                                                <i class="icon-plus"></i>
                                                <div class="mail-contnet ">
                                                    <h6>Crear usuario</h6>  </div>
                                            </a>
                                             <a href="?page=listusuario">
                                                <i class="icon-menu"></i>
                                                <div class="mail-contnet">
                                                    <h6>Listado de usuario</h6>  </div>
                                            </a>
                                            <!-- Message -->
                                             <a href="javascript:void(0)">
                                                <i class="icon-user"></i>
                                                <div class="mail-contnet">
                                                    <h6>Crear perfil de usuario</h6>  </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="icon-people"></i>
                                                <div class="mail-contnet">
                                                    <h6>Perfiles de usuarios</h6>  </div>
                                            </a>
                                           
                                           <a href="javascript:void(0)">
                                                <i class="icon-reload"></i>
                                                <div class="mail-contnet">
                                                    <h6>Cambiar Privilegios</h6>  </div>
                                            </a>
                                             
                                            <!-- Message -->
                                           
                                            <!-- Message -->
                                          
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                          <li>
                            <a  href="?page=home" aria-expanded="false">
                                <i class="icon-home"></i>
                                <span class="hide-menu">Inicio
                                   
                                </span>
                            </a>
                          
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="?page=recepcion" aria-expanded="false">
                                <i class="icon-note"></i>
                                <span class="hide-menu">Recepcion
                                    <!--<span class="badge badge-pill badge-cyan ml-auto">4</span>-->
                                </span>
                            </a>
                             <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="#">Añadir orden</a>
                                </li>
                                <li>
                                    <a href="#">Buscar orden</a>
                                </li>
                                <li>
                                    <a href="#">Configuracion</a>
                                </li>
                              
                            </ul>
                           
                        </li>
                                           
                       
                        
                          <li>
                            <a class="has-arrow waves-effect waves-dark" href="?page=almacen" aria-expanded="false">
                                <i class="icon-layers"></i>
                                <span class="hide-menu">Almacen</span>
                            </a>
                             <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="#">Stock</a>
                                </li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Configuracion</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="javascript:void(0)">Minimos</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Alertas</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Bodegas</a>
                                        </li>
                                        
                                    </ul>
                                 
                              
                            </ul>
                           
                        </li>
                         <li>
                            <a class="has-arrow waves-effect waves-dark"  href="?page=produccion" aria-expanded="false">
                                <i class="icon-chart"></i>
                                <span class="hide-menu">Produccion</span>
                            </a>
                              <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="#">Ordenes</a>
                                </li>
                                <li>
                                    <a href="#">Turbos</a>
                                </li>
                                <li>
                                    <a href="#">Configuracion</a>
                                </li>
                              
                            </ul>
                             
                        </li>
                         <li>
                            <a class="has-arrow waves-effect waves-dark"  href="?page=trabajo" aria-expanded="false">
                                <i class="icon-docs"></i>
                                <span class="hide-menu">Seguimiento</span>
                            </a>
                               <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="#">Status ordenes</a>
                                </li>
                                <li>
                                    <a href="#">Turbos Stock</a>
                                </li>
                                <li>
                                    <a href="#">Listado de turbos</a>
                                </li>
                              
                            </ul>
                            
                        </li>
                          <li>
                            <a class="has-arrow waves-effect waves-dark"  href="?page=reportes" aria-expanded="false">
                                <i class="icon-printer"></i>
                                <span class="hide-menu">Reportes</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="#">Material solicitado</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="index.php" aria-expanded="false">
                                <i class="icon-logout"></i>
                                <span class="hide-menu">Salir</span>
                            </a>
                        </li>
                  
                     
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
                 <?php  
                  include 'app/'.$file;
                 ?>

               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2020 Turbos
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Datatable -->
    <script src="assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
  
    <!-- Chart JS -->
    <script src="dist/js/dashboard1.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

    </script>
    
</body>

</html>