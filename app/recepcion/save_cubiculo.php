<?php  
	include '../../coneccion/coneccion.php';
 include '../../Errores/mostrar_errores.php';

    $nombre_cubi= $_POST['nombre_cubi'];
	$num_cubi = $_POST['num_cubi'];
	$asignacion = '';
	$estado = 'Disponible';
	
	
	$sql = pg_query("INSERT INTO cubiculos (numero,nombre,operario,estado) VALUES ('$num_cubi','$nombre_cubi','$asignacion','$estado')");

   if ($sql) {
		header('Location: ../../dashboard.php?page=cubiculos');//Se guardo
	}


 
?>  