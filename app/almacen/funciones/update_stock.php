<?php  
	include '../../../coneccion/coneccion.php';
    include '../../../Errores/mostrar_errores.php';

    $partes= $_POST['partes'];
	$cantidad = $_POST['cantidad'];
	$pertenece_a = $_POST['pertenece_a'];
	$bodega = $_POST['bodega'];
	$fecha = date('d-m-y');
	
	
	$sql = pg_query("INSERT INTO entradas (fecha,parte,tipo_parte,cantidad,bodega) VALUES ('$fecha','$partes','$pertenece_a','$cantidad','$bodega')");

    $suma = pg_query("SELECT * FROM inventario Where nombre='$partes'");
    $isuma = pg_fetch_assoc($suma);
    $nueva_cantidad = $isuma['cantidad'] + $cantidad;

	$sql = pg_query("UPDATE inventario Set cantidad='$nueva_cantidad' Where nombre='$partes'");

   if ($sql) {
		header('Location: ../../../dashboard.php?page=entradas');//Se guardo
	}


 
?>  