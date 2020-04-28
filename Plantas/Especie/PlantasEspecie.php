<?php
include("../clasedb.php");
extract($_REQUEST);

class PlantasEspecie
{
	public function index(){
		$db=new clasedb();
		$conex=$db->conectar();

		$sql="SELECT * FROM plantas";

		$res=mysqli_query($conex,$sql);
		$campos=mysqli_num_fields($res);
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();

		while($data=mysqli_fetch_array($res)){
			for ($j=0; $j < $campos; $j++){
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
		mysqli_close($conex);
			header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}
    	public function modificar(){
	        extract($_REQUEST);
	        $db=new clasedb();
	        $conex=$db->conectar();
	        $sql="SELECT * FROM plantas WHERE id=".$id_plantas."";
			$res=mysqli_query($conex,$sql);
	        $data=mysqli_fetch_array($res);
        
        header("Location: editar.php?data=".serialize($data));
    }

    	public function actualizar(){
	        extract($_REQUEST);
	        $db=new clasedb();
	        $conex=$db->conectar();

	        $sql="UPDATE plantas set 
	        nombres='$nombres',
	        apodos='$apodos',
	        especies='$especies',
	        sub_especie='$sub_especie',
	        origen='$origen'
	        WHERE id=$id_plantas";
	       	$res=mysqli_query($conex,$sql);
	        	if ($res) {
	        		?>
        		<script>
        			alert("PLANTA MODIFICADO");
        			window.location="PlantasEspecie.php?operacion=index";
        		</script>
        		<?php
        	}else{
        		?>
        		<script>
        			alert("ERROR AL MODIFICAR LA PLANTA");
        			window.location="PlantasEspecie.php?operacion=index";
        		</script>
        		<?php
        	}
        $this->index();
    }

    	public function eliminar(){

    	extract($_REQUEST);
    	$db=new clasedb();
    	$conex=$db->conectar();

    	$sql="DELETE FROM plantas WHERE id=".$id_plantas;

		$res=mysqli_query($conex,$sql);
		if ($res)
		 {
			?>
			<script type="text/javascript">
				alert("PLANTA ELIMINADA");
				window.location="PlantasEspecie.php?operacion=index";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("PLANTA NO ELIMINADA");
				window.location="PlantasEspecie.php?operacion=index";
			</script>
			<?php
			}
    }

    public function guardar()
    {
       	extract($_REQUEST);
	$db=new clasedb();
	$con=$db->conectar();
	$sql="INSERT INTO plantas VALUES(NULL,'".$nombres."','".$apodos."','".$especie."','".$sub_especie."','".$origen."')";

	$resultado=mysqli_query($con,$sql);
	 if ($resultado) { 

	?>
	<b>Planta Ingresada ---> <a href="index.php">Volver</a></b>
	<?php
	}else{
	?>
	<b>Planta no Ingresada ---> <a href="index.php">Volver</a></b>
	<?php
	}
        $this->index();
    }

	static function controlador($operacion){
		$plantas=new PlantasEspecie();
	switch ($operacion) {
		case 'index':
			$plantas->index();
			break;
		case 'modificar':
			$plantas->modificar();
			break;
		case 'actualizar':
			$plantas->actualizar();
			break;
		case 'eliminar':
			$plantas->eliminar();
			break;
		case 'guardar':
			$plantas->guardar();
			break;
		default:
			?>
				<script>
					alert("No existe la ruta");
					window.location="PlantasEspecie.php?operacion=index";
				</script>
			<?php
			break;
	}
}
}
PlantasEspecie::controlador($operacion);
?>


   