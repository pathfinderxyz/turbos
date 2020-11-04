<?php  
	include '../../coneccion/coneccion.php';
 include '../../Errores/mostrar_errores.php';

    $nombre= $_POST['nombre'];
	$pass = $_POST['pass'];
	$perfil = $_POST['perfil'];
	$caracteristicas = $_POST['caracteristicas'];
	
	
  
	
	$sql = pg_query("INSERT INTO usuarios (usuario,password,rol,caracteristicas) VALUES ('$nombre','$pass','$perfil','$caracteristicas')");

   if ($sql) {
		header('Location: ../../dashboard.php?page=listusuario');//Se guardo
	}


 
?>  