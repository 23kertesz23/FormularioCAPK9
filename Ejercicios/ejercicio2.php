<?php
echo 'Mostrar solo los últimos 10 caracteres de la cadena<br/>';
$string="un calcidoscopio de luna :)";
$stringSub=substr($string, -10);

echo "String Original: $string <br/>";
echo "String Substraido: $stringSub";
?>