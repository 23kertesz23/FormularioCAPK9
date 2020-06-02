<?php
/**
 * 
 */
class piscina
{
	public $nombre;
	public $fechadeElaboracion;
	
	function __construct($nombre,fechadeElaboracion)
	{
		$this->nombre = $nombre;
		$this->fechadeElaboracion = $fechadeElaboracion; 
		# code...
	}
	protected function ShowInfo()
	{
		foreach ($this as $key) {echo $key."<br/>";
			# code...
		}
	}
	public function getInfo()
	{
		$this->ShowInfo();
	}
}
$pis = new piscina("gran piscina",15);
$pis->getInfo();
?>