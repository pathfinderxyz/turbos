<?php  
	include '../../coneccion/coneccion.php';
    include '../../Errores/mostrar_errores.php';

    $cliente= $_POST['cliente'];
    $fecha_rec= date('Y-m-d');
	$direccion = $_POST['direccion'];
	$ciudad= $_POST['ciudad'];
	$rfc = $_POST['rfc'];
	$telefono= $_POST['telefono'];
	$modelo_turbo = $_POST['modelo_turbo'];
	$bomba_iny = $_POST['bomba_iny'];
	$tipo_rep= $_POST['tipo_rep'];
	$importe = $_POST['importe'];
	$a_cuenta = $_POST['a_cuenta'];
	$restan= $_POST['restan'];
	$fecha_entrega = $_POST['fecha_entrega'];
	$observaciones = $_POST['observaciones'];
	$status = 'por aceptar';

  
	
	$sql = pg_query("INSERT INTO ordenes_trabajo (fecha_rec,cliente,direccion,ciudad,rfc,telefono,modelo_turbo,bomba_iny,tipo_rep,importe,a_cuenta,restan,fecha_entrega,observaciones,status)
	 VALUES ('$fecha_rec','$cliente','$direccion','$ciudad','$rfc','$telefono','$modelo_turbo','$bomba_iny','$tipo_rep','$importe','$a_cuenta','$restan','$fecha_entrega','$observaciones','$status')");

  if ($sql) {
		header('Location: ../../dashboard.php?page=recepcion&registro=exitoso');//Se guardo
	}else {
		header('Location: ../../dashboard.php?page=recepcion&registro=fallido');//No se guardo el correo o el pasaporte ya existe !
	}


 
?>  