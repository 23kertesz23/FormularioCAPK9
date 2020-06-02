<?php

/**
 * 
 */
class planta
{
	public $nombre;
	public $especie;
	function __construct($nombre,$especie)
	{
		$this->nombre = $nombre;
		$this->especie = $especie;
		# code...
	}
	public function changename($newName) {
		$this->nombre = $newName;
		echo "cambiaste el nombre de la planta a $newName";
	}
}
?>
