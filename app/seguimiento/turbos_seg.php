<?php 
     
    include '../../coneccion/coneccion.php';
    $id = $_GET['id']; 

     
    $sql = pg_query("SELECT * FROM ");
    
    $row = pg_num_rows($sql);
    
?>
  <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Stock Turbos</h4>
                    </div>
                    
                </div>
               
                <div class="row">
                    <div class="col-12">
                        
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Turbos</h4>
                                <h6 class="card-subtitle">Aqui puede buscar los modelos de los turbos y su disponibilidad</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                                
                                                <th># Codigo</th>
                                                <th>Turbos</th>
                                                <th>Partes</th>
                                                <th>Estado</th>
                                                <th>Incompleto</th>
                                                <th>Orden de Trabajo</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($row) {
                                                while ($info = pg_fetch_assoc($sql)) {
                                            echo '<tr>
                                                
                                            
                                                <td>'.$info['numero'].'</td>
                                                <td>'.$info['nombre'].'</td>
                                                <td>'.$info['operario'].'</td>
                                                <td>'.$info['estado'].'</td>
                                                <td>'.$info['operario'].'</td>
                                                <td>'.$info['estado'].'</td>
                                                </tr>
                                             

                                                ';
                                             }
                                               }else{

                                                }
                                             ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>
                         
                        
                    </div>
                </div>
                
     </div>
