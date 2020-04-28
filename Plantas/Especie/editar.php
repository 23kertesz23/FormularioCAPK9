<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando Plantas</title>
</head>
<body>
		<form action="PlantasEspecie.php" method="post" name="Plantas">
			<table>
				<tr>
					<td>Nombres:</td><td><input type="text" name="nombres" id="nombres" placeholder="Ej: Lanzagisante" title="Ingrese sus Nombres" value="<?=$data[1]?>"></td>
				</tr>
				<tr>
					<td>Apodos:</td><td><input type="text" name="apodos" id="apodos" placeholder="Ej: Patataboom" title="Ingrese sus Apodos" value="<?=$data[2]?>"></td>
			</tr>
			<tr>
					<td>Especies:</td><td><input type="text" name="especies" id="especies" placeholder="Ej: Carnivora" title="Ingrese sus especies" value="<?=$data[3]?>"></td>
			</tr>
			<tr>
					<td>Sub Especies:</td><td><input type="text" name="sub_especie" id="sub_especie" placeholder="Ej: qwerty" title="Ingrese sus Sub especies" value="<?=$data[4]?>"></td>
			</tr>
			<tr>
					<td>Origen:</td><td><input type="text" name="origen" id="origen" placeholder="Ej: xdxddd" title="Ingrese sus origen" value="<?=$data[5]?>"></td>
			</tr>
			<tr>
					<td>
					<input type="hidden" name="sub_especie" value="<?=$data[0]?>">
					<input type="hidden" name="operacion" value="actualizar">
					<input type="submit" name="enviar" value="Modificar"></td>
			</tr>
			</table>
			
		</form>


</body>
</html>