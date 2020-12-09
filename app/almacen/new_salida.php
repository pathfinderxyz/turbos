<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <br><section id="wrapper">
        
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                    </div>
                     <div class="col-sm-8 col-xs-12">
                        <div class="card card-body">
                            <div class="row">
                               <div class="col-3">
                                    <img src="assets/images/logo-turbos.png"  class="dark-logo" style="width: 55px;" />
                               </div>
                               <div class="col-6">
                                   <h4 class="card-title" style="text-align: center;font-size: 22px;font-weight: 600;">
                                  Registro de salida de turbocargadores</h4>
                                </div>
                                <div class="col-3">
                                     <img src="assets/images/logo-ditsa.png"  class="dark-logo" style="width: 150px;" />
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-8">
                                  <div class="form-group  row">
                                        <label for="example-text-input" class="col-2 col-form-label">Ruta:</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                 </div>
                                  <div class="col-4">
                                 <div class="form-group  row">
                                        <label for="example-text-input" class="col-3 col-form-label">Fecha</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" value="<?php echo date('d-M-Y');?>" >
                                        </div>
                                    </div>
                                    </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-sm-12 col-xs-12">
                                     <form  action="app/almacen/funciones/update_stock.php" method="post">
                                    
                                         <div class="row">
                                          <div class="col-2">
                                            <label for="exampleInputName2">Cantidad</label>
                                            <input type="number" class="form-control" name="cantidad"  required>
                                          </div>
                                           <div class="col-3">
                                            <label for="exampleInputName2">Modelo</label>
                                            <input type="text" class="form-control" name="cantidad"  required>
                                          </div>
                                           <div class="col-3">
                                            <label for="exampleInputName2">Serie</label>
                                            <input type="text" class="form-control" name="cantidad"  required>
                                          </div>
                                           <div class="col-4">
                                            <label for="exampleInputName2">Observacion</label>
                                            <textarea type="number" class="form-control" name="cantidad"  required></textarea>
                                          </div>
                                        </div><br>
                                         <div class="row">
                                          <div class="col-4">
                                            <label for="exampleInputName2">Folio</label>
                                            <input type="text" class="form-control" name="cantidad"  required>
                                          </div>
                                           <div class="col-4">
                                            <label for="exampleInputName2">Gastos</label>
                                            <input type="text" class="form-control" name="cantidad"  required>
                                          </div>
                                           <div class="col-4">
                                            <label for="exampleInputName2">Notas foliadas</label>
                                            <input type="text" class="form-control" name="cantidad"  required>
                                          </div>
                                          
                                        </div><br>

                                         
                                        

                                               
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <a href="?page=entradas"><button type="button" class="btn btn-dark">Volver</button></a>

                                    </form>

                                </div>
                                 
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-2 col-xs-12">
                    </div>
                     
                </div>
       

    </section>

</body>