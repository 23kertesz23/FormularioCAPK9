<?php
echo 'Ver solo los 10 caracteres restantes después de quitarle los primeros 5 de la cadena<br/>';
$string="un calcidoscopio de luna :)";
$stringSub=substr($string, 5);
$stringSub=substr($stringSub, -10);

echo "String Original: $string <br/>";
echo "String Substraido: $stringSub";
?>