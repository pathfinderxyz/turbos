<?php  
	include '../../coneccion/coneccion.php';
	//include "../../Errores/mostrar_errores.php";


    $id_orden = $_POST['ido'];
	$desmontajeo = $_POST['desmontajeo'];
	$inspecciono = $_POST['inspecciono'];
	$platoe= $_POST['platoe'];
	$separadore = $_POST['separadore'];
	$desarmadoo = $_POST['desarmadoo'];
	$armadoo = $_POST['armadoo'];
	$cuerpoe = $_POST['cuerpoe'];
	$separadorradiale = $_POST['separadorradiale'];
	$lavadoo = $_POST['lavadoo'];
	$montajeo = $_POST['montajeo'];
	$turbinae = $_POST['turbinae'];
	$segurose = $_POST['segurose'];
	$clasificadoo = $_POST['clasificadoo'];
	$maquinadoo = $_POST['maquinadoo'];
	$compresore = $_POST['compresore'];
	$anilloe= $_POST['anilloe'];
	$pinturao = $_POST['pinturao'];
	$soldaro = $_POST['soldaro'];
	$cajaescapee = $_POST['cajaescapee'];
	$anillosadmisione = $_POST['anillosadmisione'];
	$cajaadmisione = $_POST['cajaadmisione'];
	$segurosexte = $_POST['segurosexte'];
	$protectore = $_POST['protectore'];
	$tornillose = $_POST['tornillose'];
	$abrazaderase = $_POST['abrazaderase'];
	$deflectoraceiteax = $_POST['deflectoraceiteax'];
	$platoac = $_POST['platoac'];
	$platoobs = $_POST['platoobs'];
	$cojineteradiale = $_POST['cojineteradiale'];
	$deflectoraceitee = $_POST['deflectoraceitee'];
	$cuerpoac = $_POST['cuerpoac'];
	$cuerpoobs = $_POST['cuerpoobs'];
	$cojineteaxiale = $_POST['cojineteaxiale'];
	$oringse = $_POST['oringse'];
	$turbinaac = $_POST['turbinaac'];
	$turbinaobs = $_POST['turbinaobs'];
	$portanilloe = $_POST['portanilloe'];
	$valvulareguladorae = $_POST['valvulareguladorae'];
	$compresorac = $_POST['compresorac'];
	$compresorobs = $_POST['compresorobs'];
	$collaraxiale = $_POST['collaraxiale'];
	$geometriae = $_POST['geometriae'];
	$cajaescapeac = $_POST['cajaescapeac'];
	$cajaescapeobs = $_POST['cajaescapeobs'];
	$retenese = $_POST['retenese'];
	$cajaadmisionac = $_POST['cajaadmisionac'];
	$cajaadmisionobs = $_POST['cajaadmisionobs'];
	$protectorcalorac = $_POST['protectorcalorac'];
	$protectorcalorobs = $_POST['protectorcalorobs'];
	$abrazaderasac = $_POST['abrazaderasac'];
	$abrazaderasobs = $_POST['abrazaderasobs'];
	$retenesac = $_POST['retenesac'];
	$retenesobs = $_POST['retenesobs'];
	$geometriaac = $_POST['geometriaac'];
	$geometriaobs = $_POST['geometriaobs'];
	$cojinetecond = $_POST['cojinetecond'];
	$segurosextecond = $_POST['segurosextecond'];
	$cojineteaxialcond = $_POST['cojineteaxialcond'];
	$tornilloscond = $_POST['tornilloscond'];
	$portaanillocond = $_POST['portaanillocond'];
	$defleceitecond = $_POST['defleceitecond'];
	$collaraxialcond = $_POST['collaraxialcond'];
	$defleceitecojicond = $_POST['defleceitecojicond'];
	$separadoraxialcond = $_POST['separadoraxialcond'];
	$oringscond = $_POST['oringscond'];
	$separadorradialcond = $_POST['separadorradialcond'];
	$valvularegcond = $_POST['valvularegcond'];
	$segurosinternoscond = $_POST['segurosinternoscond'];
	$otroscond = $_POST['otroscond'];
	$anillosescapecond = $_POST['anillosescapecond'];
	$anillosadmincond = $_POST['anillosadmincond'];
	$balerochicomode = $_POST['balerochicomode'];
	$engranesmode = $_POST['engranesmode'];
	$baleromedianomode = $_POST['baleromedianomode'];
	$basebalerosmode = $_POST['basebalerosmode'];
	$balerograndemode = $_POST['balerograndemode'];
	
	
	
	$fecha = date ("d-m-y");
	

	
  
	
	$sql = pg_query("INSERT INTO ordenesfni
		(num_orden,		
desmontajeo,
  inspecciono,
  platoe,
  separadore,
  desarmadoo,
  armadoo,
  cuerpoe,
  separadorradiale,
  lavadoo,
  montajeo,
  turbinae,
  segurose,
  clasificadoo,
  maquinadoo,
  compresore,
  anilloe,
  pinturao,
  soldaro,
  cajaescapee,
  anillosadmisione,
  cajaadmisione,
  segurosexte,
  protectore,
  tornillose,
  abrazaderase,
  deflectoraceiteax,
  platoac,
  platoobs,
  cojineteradiale,
  deflectoraceitee,
  cuerpoac,
  cuerpoobs,
  cojineteaxiale,
  oringse,
  turbinaac,
  turbinaobs,
  portanilloe,
  valvulareguladorae,
  compresorac,
  compresorobs,
  collaraxiale,
  geometriae,
  cajaescapeac,
  cajaescapeobs,
  retenese,
  cajaadmisionac,
  cajaadmisionobs,
  protectorcalorac,
  protectorcalorobs,
  abrazaderasac,
  abrazaderasobs,
  retenesac,
  retenesobs,
  geometriaac,
  geometriaobs,
  cojinetecond,
  segurosextecond,
  cojineteaxialcond,
  tornilloscond,
  portaanillocond,
  defleceitecond,
  collaraxialcond,
  defleceitecojicond,
  separadoraxialcond,
  oringscond,
  separadorradialcond,
  valvularegcond,
  segurosinternoscond,
  otroscond,
  anillosescapecond,
  anillosadmincond,
  balerochicomode,
  engranesmode,
  baleromedianomode,
  basebalerosmode,
  balerograndemode,
  fecha) 
		VALUES (
'$id_orden',
'$desmontajeo',
'$inspecciono',
'$platoe',
'$separadore',
'$desarmadoo',
'$armadoo',
'$cuerpoe',
'$separadorradiale',
'$lavadoo',
'$montajeo',
'$turbinae',
'$segurose',
'$clasificadoo',
'$maquinadoo',
'$compresore',
'$anilloe',
'$pinturao',
'$soldaro',
'$cajaescapee',
'$anillosadmisione',
'$cajaadmisione',
'$segurosexte',
'$protectore',
'$tornillose',
'$abrazaderase',
'$deflectoraceiteax',
'$platoac',
'$platoobs',
'$cojineteradiale',
'$deflectoraceitee',
'$cuerpoac',
'$cuerpoobs',
'$cojineteaxiale',
'$oringse',
'$turbinaac',
'$turbinaobs',
'$portanilloe',
'$valvulareguladorae',
'$compresorac',
'$compresorobs',
'$collaraxiale',
'$geometriae',
'$cajaescapeac',
'$cajaescapeobs',
'$retenese',
'$cajaadmisionac',
'$cajaadmisionobs',
'$protectorcalorac',
'$protectorcalorobs',
'$abrazaderasac',
'$abrazaderasobs',
'$retenesac',
'$retenesobs',
'$geometriaac',
'$geometriaobs',
'$cojinetecond',
'$segurosextecond',
'$cojineteaxialcond',
'$tornilloscond',
'$portaanillocond',
'$defleceitecond',
'$collaraxialcond',
'$defleceitecojicond',
'$separadoraxialcond',
'$oringscond',
'$separadorradialcond',
'$valvularegcond',
'$segurosinternoscond',
'$otroscond',
'$anillosescapecond',
'$anillosadmincond',
'$balerochicomode',
'$engranesmode',
'$baleromedianomode',
'$basebalerosmode',
'$balerograndemode',
'$fecha')");

   if ($sql) {
		header('Location: ../../dashboard.php?page=ordenes_ent');//Se guardo
	}else {
		echo 'Ups a ocurrido un error';
	}
?>          
