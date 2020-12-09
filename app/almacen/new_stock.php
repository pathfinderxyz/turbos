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
                                Crear un nueva parte</h4><br>
                    
                            <h5 class="card-subtitle">Introduzca los datos de la nueva parte a crear en el inventario</h5>
                            <div class="row">
                                
                                <div class="col-sm-12 col-xs-12">
                                     <form  action="app/almacen/funciones/save_stock.php" method="post">
                                    
                                         <div class="form-group">
                                            <label for="exampleInputName2"> Nombre de la pieza</label>
                                            <input type="text" class="form-control" name="pieza"  required>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputName2"> Descripcion</label>
                                            <textarea type="text" class="form-control" name="descripcion_pieza"  required></textarea>
                                        </div>

                                        <div class="form-group">
                                        <label for="rol">Pertenece a:</label>
                                        <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="tipo_pieza"  required="">
                                                
                                               <option value="">Seleccione</option>
                                               <option value="Turbo completo">Turbo completo</option>
                                               <option value="Cartucho">Cartucho</option>
                                            <option value="Kit de refaccionamiento">Kit de refaccionamiento</option>
                                               
                                        </select>
                                        </div>
                                       
                                       
                                               
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        
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