<?php
echo 'Mostrar una cadena mayor a 20 carácteres, quitarle los 3 primeros carácteres y los últimos 5<br/>';
$string="un calcidoscopio de luna :)";
$stringSub=substr($string, 3, -5);

echo "String Original: $string <br/>";
echo "String Substraido: $stringSub";
?>