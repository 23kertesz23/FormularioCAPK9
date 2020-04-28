<?php
extract($_REQUEST);
$data=unserialize($data);
?><!DOCTYPE html>
<html>
<head>
	<title>Lista de PLantas</title>
<script type="text/javascript">
	function eliminar(id) {
		if (confirm("Seguro desea eliminar la planta?")) {
			window.location="PlantasEspecie.php?operacion=eliminar&id_plantas="+id;
		}
	}
</script>
</head>
<body>
	<table align="center">
		<a href="../index.php">Inicio</a>
		<center><a href="PlantasEspecie.php?operacion=registrar">Registrar</a></center>
		<tr>
			<th>ID</th>
			<th>Nombres</th>
			<th>Apodos</th>
			<th>Especies</th>
			<th>Sub Especies</th>
			<th>Origen</th>
		</tr>
			
		<?php $num=1;
		for ($i=0; $i< $filas;$i++) {
			echo "<tr>";
			?>
		<td><?=$num?></td>
		<?php for ($j=1;$j <$campos; $j++) { ?>
		<td><?=$data[$i][$j]?></td>
		<?php } ?>
		<td>
		<a href="PlantasEspecie.php?operacion=modificar&id_plantas=<?=$data[$i][0]?>">Modificar</a>
		<a href="javascript:eliminar(<?=$data[$i][0]?>)">Eliminar</a>
		</td>
		<?php
		$num++;
		}	?>

</table>
</body>
</html>	