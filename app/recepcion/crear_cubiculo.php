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
                            <h4 class="card-title" style="text-align: center;font-size: 22px;font-weight: 600;">Crear un nuevo cubiculo</h4><br>
                    
                            <h5 class="card-subtitle">Introduzca los datos del cubiculo a crear</h5>
                            <div class="row">
                                
                                <div class="col-sm-12 col-xs-12">
                                     <form  action="app/recepcion/save_cubiculo.php" method="post">
                                    
                                        <div class="form-group">
                                            <label for="exampleInputName2"> Numero</label>
                                            <input type="number" class="form-control" name="num_cubi"  required>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputName2"> Nombre del Cubiculo</label>
                                            <input type="text" class="form-control" name="nombre_cubi"  required>
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