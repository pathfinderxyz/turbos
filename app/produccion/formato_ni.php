 
 <?php

  include '../../coneccion/coneccion.php';
  $ido = $_GET['idorden']; 

 ?>
 <style type="text/css">
   .table-bordered td, .table-bordered th {
    border: 1px solid #aeb0b3 !important;
    padding: 2px !important;
    }

 </style>

 <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Formato NI</h4>
                    </div>
                </div>
               
                <div class="row">

<div class="col-12">
     <div class="card card-body printableArea">
              
                        <div class="card">
                            <div class="card-body">
                                 <div class="row">
                                <div class="col-md-6">
                                  <h4><b>Fecha</b> <span class="pull-right"><?php echo $info['fecha_rec']; ?></span></h4>
                                </div>
                                <div class="col-md-6 text-right">
                                  <h4><b>Orden</b> <span class="pull-right">#<?php echo $ido; ?></span></h4>
                                </div>
                            </div>
                            <form  action="app/produccion/guardar_fni.php" method="post">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                       
                                        <tbody>
                                            <tr>
                                                <td class="clasetd text-center" colspan="4" style="background: #cbcfe0;"><strong>Proceso</strong></td>
                                                 <td class="clasetd text-center" colspan="4" style="background: #cbcfe0;"><strong>Descripcion</strong></td>
                                            </tr>
                                             <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd" ><strong>Proceso</strong></td>
                                                 <td class="clasetd" ><strong>Nombre Operario</strong></td>
                                                  <td class="clasetd" ><strong>Proceso</strong></td>
                                                   <td class="clasetd" ><strong>Nombre Operario</strong></td>
                                                    <td class="clasetd" ><strong>Descripcion</strong></td>
                                                     <td class="clasetd" ><strong>Estado</strong></td>
                                                      <td class="clasetd" ><strong>Descripcion</strong></td>
                                                       <td class="clasetd" ><strong>Estado</strong></td>
                                            </tr>
                                             <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd" ><strong>Desmontaje</strong></td>
                                                <td class="clasetd" ><strong>
                                                <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="desmontajeo">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Inspeccion de calidad</strong></td>
                                                 <td class="clasetd" ><strong>
                                                <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="inspecciono">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Plato</strong></td>
                                                <td class="clasetd" ><strong>
                                                <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="platoe">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Separador axial</strong></td>
                                                <td class="clasetd" ><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="separadore" >
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                            </tr>
                                             <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd" ><strong>Desarmado</strong></td>
                                                <td class="clasetd" ><strong>
                                                <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="desarmadoo">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Armado</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="armadoo">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Cuerpo</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cuerpoe">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Separador radial</strong></td>
                                                <td class="clasetd" ><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="separadorradiale">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                  </select>

                                                </strong></td>
                                            </tr>
                                             <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd" ><strong>Lavado</strong></td>
                                                <td class="clasetd" ><strong>
                                                <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="lavadoo">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Montaje</strong></td>
                                                <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="montajeo">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Turbina</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="turbinae" >
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Seguros internos</strong></td>
                                                <td class="clasetd" ><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="segurose" >
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                            </tr>
                                             <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd" ><strong>Clasificado</strong></td>
                                                <td class="clasetd" ><strong>
                                               <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="clasificadoo">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Maquinado</strong></td>
                                                <td class="clasetd" ><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="maquinadoo">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Compresor</strong></td>
                                                <td class="clasetd" ><strong>
                                                <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="compresore">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Anillos de escape</strong></td>
                                                <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="anilloe">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                            </tr>
                                             <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd" ><strong>Pintura</strong></td>
                                                <td class="clasetd" ><strong>
                                               <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="pinturao">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Soldar</strong></td>
                                                <td class="clasetd" ><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category"  name="soldaro">'; 
                                                   <?php    
                                                    echo '<option value="ninguno"></option>'; 
                                                    $sql = pg_query("SELECT * from usuarios where rol='operario' and estado='Disponible'");
                                                    while($row = pg_fetch_assoc($sql)){
                                                    echo '<option>'.$row["usuario"];
                                                        }
                                                     ?>
                                                 </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Caja de escape</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cajaescapee" >
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Anillos de admision</strong></td>
                                                <td class="clasetd" ><strong>
                                                     <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="anillosadmisione" >
                                                  <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                            </tr>
                                             <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd text-center" colspan="4" style="background: #cbcfe0;"><strong>Nivel de Reparacion ()</strong></td>
                                                <td class="clasetd" ><strong>Caja de admision</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cajaadmisione">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Seguros externos</strong></td>
                                                <td class="clasetd" ><strong>
                                                     <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="segurosexte">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td class="clasetd text-center" colspan="4" style="background: #cbcfe0;"><strong>Clasificado de partes de turbocargador</strong></td>
                                                <td class="clasetd"  ><strong>Protector de calor</strong></td>
                                                <td class="clasetd" ><strong>
                                                <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="protectore">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>tornillos</strong></td>
                                                <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="tornillose">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong>
                                                </td>
                                                </tr>

                                                <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Piezas</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>Acciones correctivas</strong></td>
                                                <td class="clasetd">Observaciones<strong>
                                                   
                                                </strong></td>
                                                <td class="clasetd" ><strong>Abrazaderas</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="abrazaderase">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                   
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Deflector aceite AX</strong></td>
                                                <td class="clasetd" ><strong>
                                                     <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="deflectoraceiteax">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                            </tr>
                                          
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Plato</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="platoac" >
                                                   <option value=""></option>
                                                    <option value="Sello">Sello</option>
                                                    <option value="Ins baquela">Ins baquela</option>
                                                    <option value="Otro">Otro</option>
                                                  </select>

                                                </strong></td>
                                                <td class="clasetd"><strong>
                                                  <input type="text" name="platoobs" class="form-control">
                                                </strong></td>
                                                <td class="clasetd" ><strong>Cojinete radial</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cojineteradiale" >
                                                  <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Deflector aceite COJ</strong></td>
                                                <td class="clasetd" ><strong>
                                                     <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="deflectoraceitee" >
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                            </tr>
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Cuerpo</strong></td>
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cuerpoac">
                                                    <option value=""></option>
                                                    <option value="Sello">Sello</option>
                                                    <option value="Rectificar">Rectificar</option>
                                                    <option value="Renurara">Renurara</option>
                                                    <option value="soldar">soldar</option>
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd"><strong>
                                                     <input type="text" name="cuerpoobs" class="form-control">
                                                </strong></td>
                                                <td class="clasetd" ><strong>Cojinete axial</strong></td>
                                                <td class="clasetd" >
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cojineteaxiale">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select><strong>
                                                  
                                                </strong></td>
                                                <td class="clasetd" ><strong>Orings</strong></td>
                                                <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="oringse">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                            </tr>
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Turbina</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="turbinaac">
                                                    <option value=""></option>
                                                    <option value="Alabes">Alabes</option>
                                                    <option value="Ranura">Ranura</option>
                                                    <option value="Rectificar">Rectificar</option>
                                                    <option value="Ali-Bal">Ali-Bal</option>
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd"><strong>
                                                   <input type="text" name="turbinaobs" class="form-control">
                                                </strong></td>
                                                <td class="clasetd" ><strong>Porta anillo</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="portanilloe">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>valvula reguladora</strong></td>
                                                <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="valvulareguladorae" >
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                            </tr>
                                            
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Compresor</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="compresorac">
                                                    <option value=""></option>
                                                    <option value="Ajustar">Ajustar</option>
                                                    <option value="Soldar">Soldar</option>
                                                    <option value="de acientos">de acientos</option>
                                                    <option value="Otro">Otro</option>
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd"><strong>
                                                    <input type="text" name="compresorobs" class="form-control">
                                                </strong></td>
                                                <td class="clasetd" ><strong>Collar axial</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="collaraxiale">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                <td class="clasetd" ><strong>Geometria</strong></td>
                                                <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="geometriae">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                            </tr>
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Caja escape</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cajaescapeac">
                                                    <option value=""></option>
                                                    <option value="Barrenar">Barrenar</option>
                                                    <option value="Refres roscas">Refres roscas</option>
                                                    <option value="ajustar">ajustar</option>
                                                    <option value="Otro">Otro</option>
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd"><strong>
                                                   <input type="text" name="cajaescapeobs" class="form-control">
                                                </strong></td>
                                                <td class="clasetd" ><strong>Retenes</strong></td>
                                                <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="retenese">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                
                                            </tr>
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>caja admision</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cajaadmisionac">
                                                   <option value=""></option>
                                                    <option value="Barrenar">Barrenar</option>
                                                    <option value="soldar boca">soldar boca</option>
                                                    <option value="Refres rosca">Refres rosca</option>
                                                    <option value="ajustar">ajustar</option>
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd"><strong>
                                                   <input type="text" name="cajaadmisionobs" class="form-control">
                                                </strong></td>
                                                
                                            </tr>
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Protector calor</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="protectorcalorac">
                                                   <option value=""></option>
                                                    <option value="soldar">soldar</option>
                                                    <option value="ajustar">ajustar</option>
                                                    <option value="otro">otro</option>
                                                  </select></strong></td>
                                                <td class="clasetd"><strong>
                                                   <input type="text" name="protectorcalorobs" class="form-control">
                                                </strong></td>
                                                
                                            </tr>
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Abrazaderas</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="abrazaderasac">
                                                   <option value=""></option>
                                                    <option value="Cambio tornillo">Cambio tornillo</option>
                                                    <option value="soldar">soldar</option>
                                                    <option value="cambio de tuercas">cambio de tuercas</option>
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd"><strong>
                                                   <input type="text" name="abrazaderasobs" class="form-control">
                                                </strong></td>
                                                
                                            </tr>
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Retenes</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="retenesac">
                                                   <option value=""></option>
                                                    <option value="otro">otro</option>
                                                    
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd"><strong>
                                                  <input type="text" name="retenesobs" class="form-control">
                                                </strong></td>
                                                
                                            </tr>
                                            <!-- //////////////////////////////////////////////////////////////////////-->
                                                 <tr>
                                                <td class="clasetd" ><strong>Geometria</strong></td>
                                               
                                                <td class="clasetd  text-center " colspan="2"><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="geometriaac">
                                                   <option value=""></option>
                                                    <option value="Otro">Otro</option>
                                                    
                                                  </select>
                                                </strong></td>
                                                <td class="clasetd"><strong>
                                                  <input type="text" name="geometriaobs" class="form-control">
                                                </strong></td>
                                                
                                            </tr>
                                          <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd text-center" colspan="4" style="background: #cbcfe0;"><strong>Refaccion</strong></td>
                                             </tr> 
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd text-center"><strong>Refaccion</strong></td>
                                                <td class="clasetd  text-center "><strong>Condicion</strong></td>
                                                  <td class="clasetd  text-center "><strong>Refaccion</strong></td>
                                                    <td class="clasetd  text-center "><strong>Condicion</strong></td>
                                              
                                             </tr>     
                                                 <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>Cojinete radial</strong></td>
                                                <td class="clasetd" ><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cojinetecond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                                  <td class="clasetd  "><strong>Seguros externos</strong></td>
                                                 <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="segurosextecond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>
                                                </strong></td>
                                              
                                             </tr>    
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>Cojinete axial</strong></td>
                                                <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="cojineteaxialcond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                                  <td class="clasetd  "><strong>Tornillos</strong></td>
                                                 <td class="clasetd" ><strong>
                                                 <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="tornilloscond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                              
                                             </tr>    
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>Porta anillo</strong></td>
                                                <td class="clasetd" ><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="portaanillocond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                                  <td class="clasetd  "><strong>Deflec aceite axial</strong></td>
                                                 <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="defleceitecond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                              
                                             </tr>    
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>Collar axial</strong></td>
                                                <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="collaraxialcond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                                  <td class="clasetd  "><strong>Deflec aceite coji</strong></td>
                                                 <td class="clasetd" ><strong>
                                                  <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="defleceitecojicond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                              
                                             </tr>    
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>Separador axial</strong></td>
                                                <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="separadoraxialcond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                                  <td class="clasetd  "><strong>orings</strong></td>
                                                 <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="oringscond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>
                                                </strong></td>
                                              
                                             </tr>    
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>separador radial</strong></td>
                                                <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="separadorradialcond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>
                                                </strong></td>
                                                  <td class="clasetd  "><strong>valvula reguladora</strong></td>
                                                 <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="valvularegcond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                              
                                             </tr>    
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>Seguros internos </strong></td>
                                                <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="segurosinternoscond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                                  <td class="clasetd  "><strong>otros</strong></td>
                                                 <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="otroscond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                              
                                             </tr>    
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>anillos de escape</strong></td>
                                                <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="anillosescapecond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                                  <td class="clasetd  "><strong>anillos de admision</strong></td>
                                                 <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="anillosadmincond">
                                                   <option value=""></option>
                                                    <option value="B">B</option>
                                                    <option value="M">M</option>
                                                </select>

                                                </strong></td>
                                              
                                             </tr>   
                                             <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd text-center" colspan="4" style="background: #cbcfe0;"><strong>Modulo</strong></td>
                                             </tr> 
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd text-center"><strong>Descripcion</strong></td>
                                                <td class="clasetd  text-center "><strong>Estado</strong></td>
                                                  <td class="clasetd  text-center "><strong>Descripcion</strong></td>
                                                    <td class="clasetd  text-center "><strong>Estado</strong></td>
                                              
                                             </tr>     
                                                 <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>balero chico</strong></td>
                                                <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="balerochicomode">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                                  <td class="clasetd  "><strong>engranes</strong></td>
                                                 <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="engranesmode">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                              
                                             </tr>    
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>balero mediano</strong></td>
                                                <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="baleromedianomode">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>
                                                </strong></td>
                                                  <td class="clasetd  "><strong>Base de baleros</strong></td>
                                                 <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="basebalerosmode">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                              
                                             </tr>    
                                              <!-- //////////////////////////////////////////////////////////////////////-->
                                            <tr>
                                                <td class="clasetd "><strong>Balero grande</strong></td>
                                                <td class="clasetd" ><strong>
                                                   <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="balerograndemode">
                                                    <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                                  <td class="clasetd  "><strong>Arnes</strong></td>
                                                 <td class="clasetd" ><strong>
                                                    <select  class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="arnesmode">
                                                   <option value=""></option>
                                                    <option value="N">N</option>
                                                    <option value="U">U</option>
                                                </select>

                                                </strong></td>
                                              
                                             </tr>    
                                             

                                          
                                        </tbody>
                                    </table>
                                    <input type="hidden" name="ido" value="<?php echo $ido;?>"> 
                                     <div class="col-md-12">
                                         <div class="text-left">
                                             <button class="btn btn-success btn-outline" type="submit"> <span><i class="icon-check"></i> GUARDAR</span> </button>
                                         </div>
                                     </div>
                                </div>
                             </form>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>