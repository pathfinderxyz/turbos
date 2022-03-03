<?php  
	$user = 'imrvkduzdqqegk';
	$passwd = '66495dac1f7055eff857a3bac9b16537aeb089a19d1bfde2d66f0d51c4d9e61f';
	$db = 'd68h4ketfbl3vb';
	$port = 5432;
	$host = 'ec2-34-206-245-175.compute-1.amazonaws.com';
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());

?>