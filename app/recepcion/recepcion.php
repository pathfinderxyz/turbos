  <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Nueva orden de entrada</h4>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-danger">
                                <h4 class="m-b-0 text-white">Orden de trabajo</h4>
                            </div>
                            <div class="card-body">
                                <form action="app/recepcion/guardarorden.php" method="post">
                                    <div class="form-body">
                                        <h4 class="card-title">Fecha: <?php echo date('d-m-Y') ;?> </h4>
                                         
                             <?php
                                 if ($_GET["registro"]=="fallido"){
                             ?>
                                 <div class="alert"><strong style="color: #ffffff;background-color: #B71C1C;padding: 8px;border-radius: 3px;"> Error no se pudo crear la orden</strong></div>
                           <?php  
                               }elseif ($_GET["registro"]=="exitoso") {
                                ?>
                                  <div class="alert"><strong style="color: #ffffff;background-color: #2eab1f;padding: 8px;border-radius: 3px;"> Orden creada con exito <a href="?page=ordenes_ent" style="color: #000;">Ver Ordenes</a></strong></div>
                            <?php 
                                 }  
                             ?>
                                        
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Cliente</label>
                                                    <input type="text" name="cliente" class="form-control" placeholder="Nombre del cliente">
                                                </div>
                                            </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Direccion</label>
                                                    <input type="text" name="direccion" class="form-control" placeholder="Direccion del cliente">
                                                 </div>
                                            </div>
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Ciudad</label>
                                                    <input type="text" name="ciudad" class="form-control" placeholder="Ciudad del cliente">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">RFC</label>
                                                    <input type="text" name="rfc" class="form-control" >
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Telefono</label>
                                                    <input type="text" name="telefono" class="form-control">
                                                </div>
                                            </div>
                                        </div>


                                    
                                       
                                        <hr>
                                        <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Modelo Turbocargador</label>
                                                    <select name="modelo_turbo" class="form-control custom-select">
                                                        <option>--Seleccione el modelo del turbo--</option>
                                                        <option value="modelo 1">Modelo 1</option>
                                                        <option value="modelo 2">Modelo 2</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Bomba de inyeccion</label>
                                                    <input type="text" name="bomba_iny" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                     <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tipo de reparacion</label>
                                                    <select name="tipo_rep" class="form-control custom-select">
                                                        <option>--Seleccione la reparacion--</option>
                                                        <option value="Reparacion Mayor">Reparacion Mayor</option>
                                                        <option value="Reparacion Intermedia">Reparacion Intermedia</option>
                                                        <option value="Reparacion Menor">Reparacion Menor</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                            <div class="row">
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Importe</label>
                                                    <input type="text" name="importe" class="form-control">
                                                </div>
                                            </div>
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>A cuenta</label>
                                                    <input type="text" name="a_cuenta" class="form-control">
                                                </div>
                                            </div>
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Restan</label>
                                                    <input type="text" name="restan" class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Fecha de entrega</label>
                                                    <input type="date" name="fecha_entrega" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                               <div class="form-group">
                                                    <label>Observaciones</label>
                                                    <input type="text" name="observaciones" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                  
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="icon-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>