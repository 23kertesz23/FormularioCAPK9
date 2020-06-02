<?php
/**
 * 
 */
class nadador
{
	public $nombre;
	public $edad;
	private $nadadasTotales = 0;
	private $diasSinNadar = 0;
	
	function __construct($nombre, $edad)
	{
		$this->nombre = $nombre;
		$this->edad = $edad;
		# code...
	}
	public function addnadadas()
	{
		$this->nadadasTotales +=47;
	}
	public function addDiaSin()
	{
		$this->diasSinadar +=1;
	}
	public function showStats()
	{
		$nadador = $this->nombre;
		$nadadas = $this->nadadasTotales;
		$dias = $this->diasSinNadar;
		echo "Estadisticas del nadador $nadador <br/>";
		echo "Nadadas dada: $nadadas <br/>";
		echo "Dias sin nadar: $dias";
	}
}
?>