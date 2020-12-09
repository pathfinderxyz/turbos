 <?php 
     
    include '../../coneccion/coneccion.php';
    $num_orden = $_GET['orden']; 

     
    $sql = pg_query("SELECT * FROM ordenes_trabajo where n_orden='$num_orden'");
    $info = pg_fetch_assoc($sql)
    
?>
<style type="text/css">
.clasetd {
   padding: 4px !important;
}
</style>

<div class="col-12">
     <div class="card card-body printableArea">
              
                        <div class="card">
                            <div class="card-body">
                                 <div class="row">
                                <div class="col-md-6">
                                  <h4><b>Fecha</b> <span class="pull-right"><?php echo $info['fecha_rec']; ?></span></h4>
                                </div>
                                <div class="col-md-6 text-right">
                                  <h4><b>Orden</b> <span class="pull-right">#<?php echo $info['n_orden']; ?></span></h4>
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                       
                                        <tbody>
                                            <tr>
                                                <td class="clasetd" colspan="3"><strong>Cliente:</strong> <?php echo $info['cliente']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="clasetd" colspan="3"><strong>Direccion:</strong> <?php echo $info['direccion']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="clasetd"><strong>Ciudad:</strong> <?php echo $info['ciudad']; ?></td>
                                                <td class="clasetd"><strong>RFC:</strong> <?php echo $info['rfc']; ?></td>
                                                <td class="clasetd"><strong>Telefono:</strong> <?php echo $info['telefono']; ?></td>
                                               
                                            </tr>
                                           <tr>
                                                <td class="clasetd" colspan="3"><strong>Modelo Turbocargador:</strong> <?php echo $info['modelo_turbo']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="clasetd" colspan="3"><strong>Bomba de inyeccion:</strong> <?php echo $info['bomba_iny']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="clasetd" colspan="3"><strong>Reparacion:</strong> <?php echo $info['tipo_rep']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="clasetd" ><strong>Importe:</strong> <?php echo $info['importe']; ?></td>
                                                <td class="clasetd" ><strong>A cuenta:</strong> <?php echo $info['a_cuenta']; ?></td>
                                                <td class="clasetd" ><strong>Restan:</strong> <?php echo $info['restan']; ?></td>
                                               
                                            </tr>
                                            <tr>
                                                <td class="clasetd" colspan="3"><strong>Fecha de entrega:</strong> <?php echo $info['fecha_entrega']; ?></td>
                                            </tr>
                                            <tr>
                                                <td  class="clasetd" colspan="3"><strong>Observaciones:</strong> <?php echo $info['observaciones']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     <div class="col-md-12">
                                    
                                    <div class="text-right">
                                        <button id="print" class="btn btn-warning btn-outline" type="button"> <span><i class="icon-printer"></i> Imprimir</span> </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>