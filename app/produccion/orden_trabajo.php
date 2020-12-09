<?php 
     
    include '../../coneccion/coneccion.php';
    $id = $_GET['id']; 

     
    $sql = pg_query("SELECT * FROM ordenes_trabajo");
    
    $row = pg_num_rows($sql);
    
?>
  <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Ordenes de Trabajo</h4>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-12">
                        
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ordenes de trabajo Asignadas</h4>
                                <h6 class="card-subtitle">Estas son las ordenes de trabajo que tienes asignadas</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                                <th>Acciones</th>
                                                <th># Orden</th>
                                                <th>Fecha Recepcion</th>
                                                <th>Cliente</th>
                                                <th>Modelo de Turbo</th>
                                                <th>Tipo de Reparacion</th>
                                                <th>Fecha entrega</th>
                                                <th>Area de trabajo</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($row) {
                                                while ($info = pg_fetch_assoc($sql)) {
                                            echo '<tr>
                                                   <td>
                                             
                                                  <div class="btn-group">
                                                     <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="ti-settings"></i>
                                                     </button>
                                                     <div class="dropdown-menu animated flipInX">
                                                      
                                                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"  aria-haspopup="true" onClick="cargamodal ('.$info['n_orden'].')" >Cambiar Status </a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"  aria-haspopup="true" onClick="# ('.$info['n_orden'].')" >Requisicion de material</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"  aria-haspopup="true" onClick="# ('.$info['n_orden'].')" >Actualizar Formato NI</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"  aria-haspopup="true" onClick="imprimir ('.$info['n_orden'].')" > Imprimir </a>
                                                        
                                                    </div>
                                                    </div>
                                                 </td>
                                                <td>'.$info['n_orden'].'</td>
                                                <td>'.$info['fecha_rec'].'</td>
                                                <td>'.$info['cliente'].'</td>
                                                <td>'.$info['modelo_turbo'].'</td>
                                                <td>'.$info['tipo_rep'].'</td>
                                                <td>'.$info['fecha_entrega'].'</td>
                                                <td>'.$info['cubiculo'].'</td>
                                                <td>'.$info['status'].'</td>

                                               </tr>
                                                <div>
                                                     <div class="modal bs-example-modal-lg" id="modalpeso" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                         <div class="modal-dialog modal-xl">
                                                             <div class="modal-content">
                                                                 <div class="modal-header">
                                                                     <h4 class="modal-title" >Imprimir orden</h4>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                 </div>
                                                                 <div class="modal-body">
                                                                      <div id="conte-modal3"></div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 <div>


                                                 <div>
                                                    <div class="modal" id="modalclientes" tabindex="-1" role="">
                                                     <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                     <div class="modal-header">
                                                         <h4 class="modal-title" >Cambiar Status</h4>
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                      </div>
                                                     <div class="modal-body">
                                                         <div id="conte-modal"></div>
                                                     </div>
                                                     </div>
                                                     </div>
                                                 </div>

                                                    <div>
                                                     <div class="modal" id="modaleliminar" tabindex="-1" role="">
                                                     <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                     <div class="modal-header">
                                                          <h4 class="modal-title" >Quitar cubiculo</h4>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                     </div>
                                                     <div class="modal-body">
                                                         <div id="conte-modal2"></div>
                                                     </div>
                                                     </div>
                                                     </div>
                                                 <div>
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
<script>

    function imprimir(modal){
    var options = {
            modal: true,
            height:300,
            width:600
        };
    $('#conte-modal3').load('app/recepcion/imprimir_orden.php?orden='+modal, function() {
        $('#modalpeso').modal({show:true});
    });    
    } 

   
    function cargamodal(modal){
    var options = {
            modal: true,
            height:300,
            width:600
        };
    $('#conte-modal').load('app/produccion/modal_status.php?orden='+modal, function() {
        $('#modalclientes').modal({show:true});
    });    
    } 

    function cargamodaldelete(modal){
    var options = {
            modal: true,
            height:300,
            width:600
        };
    $('#conte-modal2').load('app/recepcion/liberar_orden.php?orden='+modal, function() {
        $('#modaleliminar').modal({show:true});
    });    
    } 
    

   
    
</script> 
 