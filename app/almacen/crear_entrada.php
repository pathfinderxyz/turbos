<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <br><section id="wrapper">
        
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                    </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="card card-body">
                            <h4 class="card-title" style="text-align: center;font-size: 22px;font-weight: 600;">
                               Registro de Entrada de turbocargadores</h4><br>
                    
                            <h5 class="card-subtitle">Elija una parte y actualice el inventario</h5>
                            <div class="row">
                                
                                <div class="col-sm-12 col-xs-12">
                                     <form  action="app/almacen/funciones/update_stock.php" method="post">
                                    
                                         <div class="row">
                                            <div class="col-9">
                                             <label or="message-text" class="control-label">Partes</label>
                                             <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="partes">'; 
                                             
                                             <?php    
                                             echo '<option value=""></option>'; 
                                             $sql = pg_query("SELECT nombre from  inventario ");
                                              while($row = pg_fetch_assoc($sql)){
                                               echo '<option>'.$row["nombre"];
                                                }
                                             ?>
                                             </select>
                                             </div>

                                          <div class="col-3">
                                            <label for="exampleInputName2">Cantidad</label>
                                            <input type="number" class="form-control" name="cantidad"  required>
                                          </div>
                                        </div><br>

                                         
                                        <div class="form-group">
                                        <label for="rol">Pertenece a:</label>
                                        <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="pertenece_a"  required="">
                                                
                                               <option value=""></option>
                                               <option value="Turbo completo">Turbo completo</option>
                                               <option value="Cartucho">Cartucho</option>
                                            <option value="Kit de refaccionamiento">Kit de refaccionamiento</option>
                                               
                                        </select>
                                        </div>

                                        <div class="form-group">
                                             <label or="message-text" class="control-label">Bodega</label>
                                             <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="bodega">'; 
                                             
                                             <?php    
                                             echo '<option value=""></option>'; 
                                             $sql = pg_query("SELECT nombre from  bodegas ");
                                              while($row = pg_fetch_assoc($sql)){
                                               echo '<option>'.$row["nombre"];
                                                }
                                             ?>
                                             </select>
                                          </div>

                                               
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <a href="?page=entradas"><button type="button" class="btn btn-dark">Volver</button></a>

                                    </form>

                                </div>
                                 
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-3 col-xs-12">
                    </div>
                     
                </div>
       

    </section>

</body>