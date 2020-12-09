<?php  
	include '../../../coneccion/coneccion.php';
    include '../../../Errores/mostrar_errores.php';

    $pieza= $_POST['pieza'];
	$descripcion = $_POST['descripcion_pieza'];
	$tipo_pieza = $_POST['tipo_pieza'];
	$cantidad = '0';
	
	
	$sql = pg_query("INSERT INTO inventario (nombre,descripcion,parte_de,cantidad) VALUES ('$pieza','$descripcion','$tipo_pieza','$cantidad')");

   if ($sql) {
		header('Location: ../../../dashboard.php?page=stock');//Se guardo
	}


 
?>  