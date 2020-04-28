<?php
	include('clasedb.php');

	extract($_REQUEST);

	$db=new clasedb();
	$con=$db->conectar();
	$sql="INSERT INTO plantas VALUES(NULL,'".$nombres."','".$apodos."','".$especie."','".$sub_especie."','".$origen."')";
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
	<b>Planta Registrada ---> <a href="index.php">Volver</a></b>
	<?php
	}else{
	?>
	<b>Planta no Registrada  ---> <a href="index.php">Volver</a></b>
	<?php
	}
	?>
</body>
</html>