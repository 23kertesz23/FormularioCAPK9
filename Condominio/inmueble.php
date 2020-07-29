<?php
include("cone.db.php");
extract($_REQUEST);
$db = new classdb();
$conex = $db->conectar();
?>
<h1>Adquirir los inmuebles</h1>
<table>
	<thead>
		<th>ID</th><th>IDEM</th><th>Estacionamiento</th><th>Estado</th><th>Tipo</th><th>Código postal</th>
	</thead>
	<tbody>
<?
$sql = "SELECT * FROM inmuebles";
$result = $conex->query($sql);

while ($row = $result->fetch_array()) {
	echo "<tr style='text-align: center'>";echo "<td>". $row[1]. "</td>";echo "<td>". $row[2]. "</td>";echo "<td>". $row[3]. "</td>";echo "<td>". $row[4]. "</td>";echo "<td>". $row[5]. "</td>";echo "<td>". $row[6]. "</td>";echo "</tr>";
}
?>
	</tbody>
</table>


<h1>Adquirir los inmuebles con estacionamiento e desocupados</h1>
<table>
	<thead>
		<th>ID</th><th>IDEM</th><th>Estacionamiento</th><th>Estado</th><th>Tipo</th><th>Código postal</th>
	</thead>
	<tbody>
<?
$sql = "SELECT * FROM inmuebles WHERE estacionamiento='Si' AND status='Desocupado'";
$result = $conex->query($sql);

while ($row = $result->fetch_array()) {
	echo "<tr style='text-align: center'>";echo "<td>". $row[1]. "</td>";echo "<td>". $row[2]. "</td>";echo "<td>". $row[3]. "</td>";echo "<td>". $row[4]. "</td>";echo "<td>". $row[5]. "</td>";echo "<td>". $row[6]. "</td>";echo "</tr>";
}

?>
	</tbody>
</table>

<h1>Numerados inmuebles</h1>
<table>
	<thead>
		<th>Con estacionamiento</th><th>Sin estacionamiento</th><th>Ocupados</th><th>Desocupados</th>
	</thead>
	<tbody>
<?
$sql = "SELECT 
count(case when estacionamiento='Si' then 2 end),count(case when estacionamiento='No' then 2 end),count(case when status='Ocupado' then 2 end),count(case when status='Desocupado' then 2 end)
FROM inmuebles";

$result = $conex->query($sql);

$row = $result->fetch_array();
echo "<tr style='text-align: center'>";echo "<td>". $row[1]. "</td>";echo "<td>". $row[2]. "</td>";echo "<td>". $row[3]. "</td>";echo "<td>". $row[4]. "</td>";echo "</tr>";
?>
 </tbody>
</table>