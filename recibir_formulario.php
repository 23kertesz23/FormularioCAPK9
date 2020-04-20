<?php
	include('clasedb.php');

	extract($_REQUEST);

	$db=new clasedb();
	$con=$db->conectar();
	$sql="INSERT INTO datos_personales VALUES(NULL,'".$nombres."','".$apellidos."','".$cedula."')";
	$resultado=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if ($resultado) { 
	?>
	<b>Registro Ingresado ---> <a href="index.php">Volver</a></b>
	<?php
	}else{
	?>
	<b>Registro no Ingresado ---> <a href="index.php">Volver</a></b>
	<?php
	}
	?>
</body>
</html>