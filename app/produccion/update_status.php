<?php  
	include '../../coneccion/coneccion.php';


    $estado = $_POST['status'];
    $num_orden = $_POST['num_orden'];
    

   


	
	$sql = pg_query("UPDATE ordenes_trabajo Set status='$estado' Where n_orden='$num_orden'");
	
	

    if ($sql) {
		header('Location: ../../dashboard.php?page=produccion');//Se guardo
	}

 
?>    