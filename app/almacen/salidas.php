<?php 
     
    include '../../coneccion/coneccion.php';
    $id = $_GET['id']; 

     
    $sql = pg_query("SELECT * FROM salidas");
    
    $row = pg_num_rows($sql);
    
?>
  <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Salidas</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                           
                            <a href="?page=crear_salida"><button type="button" class="btn btn-cyan d-none d-lg-block m-l-15">
                                <i class="icon-plus"></i> Realizar nueva salida</button></a>
                        </div>
                    </div>
                  
                </div>
               
                <div class="row">
                    <div class="col-12">
                        
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Historial de Salidas</h4>
                                <h6 class="card-subtitle">Ultimas salidas realizadas.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                                
                                               
                                                <th>Fecha</th>
                                                <th>Ruta</th>
                                                <th>Modelo turbo</th>
                                                <th>Serie</th>
                                                <th>Cantidad</th>
                                                <th>Observaciones</th>
                                                <th>Folio</th>
                                                <th>Gastos</th>
                                                <th>Notas foliadas</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($row) {
                                                while ($info = pg_fetch_assoc($sql)) {
                                            echo '<tr>
                                                
                                             
                                                <td>'.$info['id'].'</td>
                                                <td>'.$info['usuario'].'</td>
                                                <td>'.$info['cubiculo'].'</td>
                                                <td>'.$info['estado'].'</td>
                                                <td>'.$info['estado'].'</td>
                                                <td>'.$info['estado'].'</td>
                                                <td>'.$info['estado'].'</td>
                                                <td>'.$info['estado'].'</td>
                                                <td>'.$info['estado'].'</td>

                                                
                                               
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
      
           
 