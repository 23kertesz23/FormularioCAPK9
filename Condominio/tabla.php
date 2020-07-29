<?php
include("conedb.php");
extract($_REQUEST);
$db = new classdb();
$conex = $db->conectar();

$reg = 40; 
$estacionamiento = array('Si', 'No');$status = array('Ocupado', 'Desocupado', 'Mantenimiento');$tipo = array('Casa', 'Apartamento', 'Chalet', 'Quinta', 'Otro');$postal = array('6930', '7842', '4200', '6969');

$add = 0;
$error = array();
$agregados = array();
$e = 0;
for ($i=1; $i <= 60; $i++) { 
	$irand = rand(0,8000);$erand = rand(0, count($estacionamiento) - 2);$srand = rand(0, count($status) - 2);$trand = rand(0, count($tipo) - 2);$prand = rand(0, count($postal) - 2);

	$sql = "INSERT INTO inmuebles (idem, estacionamiento, status, tipo, cod_postal) VALUES 
	('".$irand."','".$estacionamiento[$erand]."', '".$status[$srand]."', '".$tipo[$trand]."', '".$postal[$prand]."')";

	if ($conex->query($sql)) {
		$agregados[$add] = $irand;
		$add++;
	}else {
		$error[$e] = $conex->error;
		$e++;
	}
}
echo "Ya registrados: $add <br/><br/>";
for ($i=0; $i < count($agregados); $i++) { 
	echo "$i: Apartamento ".$agregados[$i]."<br/>";
}
echo "No registrados: <br/> <br/>";
for ($i=0; $i < count($error); $i++) { 
	echo "$i: ".$error[$i]."<br/>";
}
?>