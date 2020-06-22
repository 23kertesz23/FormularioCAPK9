<?php

class Plantas
{
	public function MakePlanta()
	{
		echo 'Plantas Construidos'
	}
}

$plant = new Plantas();
$plant->MakePLanta(); 


/**
 * Private
 */
class Plantas
{
	private $totalPLantasRegistrados = 765;
	public function MakePlanta()
	{
		echo 'Planta Construidos'
	}

	public function SeeTotalPlanta()
	{
		return $this->totalPlantasRegistrados;
	}
}

$plant = new Plantas();
$plant->SeeTotalPlanta();

/**
 * Protect
 */
class Plantas
{
	private $totalPlantaRegistrados = 765;

	public function MakePlanta()
	{
		echo 'Planta'
	}

	public function SeeTotalPlanta()
	{
		return $this->totalPlantaRegistrados;
	}
}

class Borradores extends Plantas
{
	public function MakeBorradores()
	{
		return $this->MakePlanta();
	}
}

$borradores = new Borradores();
$borradores->MakeBorradores();

/**
 * Final
 */
class PLantas
{
	private $totalPlantaRegistrados = 765;

	final public function MakePlanta()
	{
		echo 'PLanta'
	}

	public function SeeTotalPlanta()
	{
		return $this->totalPlantaRegistrados;
	}
}

class Borradores extends Plantas
{
	public function MakePlanta()
	{
		echo "Borradores construidos";
	}
}

$borradores= new Borradores();
$borradores->MakePLanta();

/**
 * Abstract
 */
abstract class ElectroAbs
{
	public $nombre;
	public $origen;
	public $especie;
	

	public function SetName($name)
	{
		$this->nombre = $name;
	}

	public function SetOrigen($origen)
	{
		$this->origen = $origen;
	}	
	public function SetEspecie($especie)
	{
		$this->especie = $especie;
	}
}

class Rosas extends PlantaAbs
{
	public $sub_especie;

	public function setSub_especie($sub_especie)
	{
		$this->sub_especie = $sub_especie;
	}

	public function SeeInfo()
	{
		$nombre = $this->nombre;
		$origen = $this->origen;
		$especie = $this->sub_especie;

		echo "**Flores**":
		echo "Nombre de la flor: $nombre </br>";
		echo "origen: $origen </br>";
		echo "sub_especie: $".$especie."</br>";
	}
}

$flor = new Flores();
$flor->SetName('Corylus Avellana');
$flor->SetOrigen('Eurasia');
$flor->SetEspecie(Medicinal);
$flor->SeeInfo();
?>