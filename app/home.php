 <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                       <strong><h4 class="text-themecolor">Inicio </h4></strong> 
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            
                            <?php  
                                  if ($_SESSION['rol'] == 'admin') {
                                     echo '<button type="button" class="btn btn-danger d-none d-lg-block m-l-15"><i class="icon-plus"></i> Añadir Orden de entrada</button>';
                                         }
                                 ?>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <!-- Column -->
                    
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Ordenes de trabajo</h5>
                                <div class="steamline m-t-40">
                                    <div class="sl-item">
                                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Operador 1<span class="sl-date"> 6pm</span></div>
                                            <div class="desc">con jorge perez </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left bg-dark"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Operador 2<span class="sl-date"> 6pm</span></div>
                                            <div class="desc">con jorge perez </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left bg-info"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Operador 3 <span class="sl-date"> 6pm</span></div>
                                            <div class="desc">con jorge perez </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-6">
                        <div class="card">
                         
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Noviembre 2020</h3>
                                        <h5 class="font-light m-t-0">Reporte del mes</h5></div>
                                    <div class="col-6 align-self-center display-6 text-right">
                                        <h2 class="text-success">2 Recepciones</h2></div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center"># Orden</th>
                                            <th>clientes</th>
                                            <th>Tipo de reparacion</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                            <td>321</td>
                                            <td>Jose Carvajal</td>
                                            <td>Reparacion mayor</td>
                                        </tr>
                                        <tr>
                                            <td>324</td>
                                            <td>Rafael Mendoza</td>
                                            <td>Intermedia</td>
                                        </tr>  
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>