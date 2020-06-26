<?php
class Controlador
{

	/*La funcion definida como publica mejorando la accesibilidad del codigo.*/
							public function Index()
							{

		/*El codigo "classdb" es el contiene toda la lógica para la conexión de una base de datos.*/

							$db=new classdb();

		/*Realiza una conexión con la base de datos*/
							$conex=$db->conectar();

		/*La estrucuta de la consulta SQL pretende enviar a la base de datos, se debe seleccionar todos los datos de la tabla "datos_personales"*/			

					$sql="SELECT * FROM datos_personales"

		/*Se guarda en una variable la ejecucion de la funcion "mysqli_query" para que pueda funcionar la conexion y la colsulta en la base de datos*/

						$res=mysqli_query($conex, $sql);

		/*La consulta anterior "mysqli_num_fields" accede obtener un numero de campo en la tabla, pasando la consulta ejecutada*/

						$campos=mysqli_num_fields($res);

		/*El codigo "mysqli_num_rows", permite obtener los numeros de las filas anteriores por el servidor*/

						$filas=mysqli_num_rows($res);

		/*Se inicia un contador para todos los campos de las filas*/
									$i=0;

		/*Inicia una variable que es $datos para poder guardar todos los campos obtenidos en la parte de consulta y poder lo manejarlo a su gusto*/
							$datos[]=array();

		/*
		El codigo "mysqli_fetch_array" el mismo hace un recorrido en todas las filas  obtenidas de la consulta y asigna los
		campos de cada fila en un array.

		 Puede ser que haga el recorrido del bucle "while" de cada fila hasta "$data" y que sea "false", debido a que la variable "$data" que puede poseer algun dato, esta valdra "true"*/

					while($data=mysqli_fetch_array($res)){

			/*Se debe crear un bucle "for" para hacer un recorrido en cada diferente campos en cada fila, dando un limite de cantidad de maxima en campos existentes en sus tablas el serivdor utilizando la variables "$campos"*/

						for ($j=0; $j < $campos; $j++) {

				//Se guardan los datos de cada campo en una matriz de dos niveles.

						$datos[$i][$j]=$datos[$j]; 
						}

			//Aumenta el contador del bucle "while"

								$i++;
									}

		/*En la conexion se cierra la clase creada que es "classdb" para evitar fugas en la seguridad del programa */							
							mysqli_close($conex);

		/*Se utiliza la funcion "header" para que el usuario se pueda mover en otra direccion, trasladando los datos recopilado como:cantidad de filas recopilado, cantidad de campos recopilado, y los datos de cada campo. Estos campos necesitan ser necesariamente se debe ser serializados para que puedan ser enviados entre las URL, para esto se usa la función "serialize".*/

				header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos))
	}
}
?>