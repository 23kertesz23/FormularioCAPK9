<? php
public function actualizar () /* Iniciar la función publica llamada "actualizar"*/
{

	/*Extraer los datos obligatorios de la consulta por el metodo post de http*/

							extracto ($ _ POST);

	/*La clase que maneja las conexiones hacia la base de datos*/

							$ db = nuevo clasedb ();

	/*La creacion de una conexiopn a la base de datos. Se guarda esta conexion en una variable asi poder usalar durante la ejecucion de un guion*/

						$ conex = $ db-> conectar ();

	/*La estructura de la base de datos para verificar si la cedula y el id si ya estan regritados anteriormente.*/

				$ sql = "SELECCIONAR * DESDE datos_personales DONDE cedula =". $ cedula. "Y id <>". $ id_persona;

	/*El uso de la funcion "mysquli_query" es para ejecutar una consulta en el servidor y asi guarda el resulta en una variable.*/

					$ res = mysqli_query ($ conex, $ sql);

	/*El uso de la funcion "mysquli_query" para poder obtener una cantidad de filas encontradas de la consulta que esta realizada anteriomente.*/

					$ cant = mysqli_num_rows ($ res);

	/*Se verefica si se encuentra alguna fila que este cumpliendo con las condiciones en la consulta, asi sabremos que podra mostrar una notificacion, si es lo contrarion actualizara al usuario.*/

							if ($ cant> 0) {

		/*Se cierran las llaves PHP asi para poder escribir codigos en textos plano*/
		?>
		/*
		Etiqueta de JavaScript para poder escribir scripts en HTML
		*/
		<script type = "text / javascript">
			/ *
			Función de alerta para poder mostrar un mensaje en pantalla al usuario.
			* /
			alerta ("CEDULA YA REGISTRADA");
			/ *
			Uso de la ventana global variable para poder cambiar de localización al usuario.
			* /
			window.location = "PersonasControlador.php? operacion = index";
			/ * Guión de cierre de la etiqueta. * /
		</script>
		/ *
		Inicio de una llave PHP para poder escribir código en PHP.
		* /
		<? php

		/* En caso lo contario de la condicion*/

	} más {

		/*La estrucuta sql es para poder utilizar los datos del usuario que ya existe en el sistema*/

		$ sql = "ACTUALIZACIÓN datos_personales SET nombres = '". $ nombres. "', apellidos = '". $ apellidos. "' cedula = '". $ cedula. "WHERE id =". $ id_persona;

		/*El uso de la funcion "mysqli_query" esta hace ejecutar la una consulta en el servidor y se guarda el resultado de una variable*/

					$ res = mysqli_query ($ conex, $ sql);

		/*Se verifica si la respuestas en el servidor si es positiva o negativa*/

		if ($ res) {

		/*Se cierran las llaves PHP asi para poder escribir codigos en textos plano*/
		
			?>
			/ *
			Etiqueta de JavaScript para poder escribir scripts en HTML
			* /
			<script type = "text / javascript">
				/ *
				Función de alerta para poder mostrar un mensaje en pantalla al usuario.
				* /
				alerta ("REGISTRO MODIFICADO");
				/ *
				Uso de la ventana global variable para poder cambiar de localización al usuario.
				* /
				window.location = "PersonasControlador.php? operaion = index";
				/ * Guión de cierre de la etiqueta. * /
			</script>
			/ *
			Inicio de una llave PHP para poder escribir código en PHP.
			* /
			<? php
			/* Caso contrario de la condición. */
		} más {
			/*
			Cierre de las llaves PHP para poder escribir código en texto plano.
			*/
			?>
			/ *
			Etiqueta de JavaScript para poder escribir scripts en HTML
			* /
			<script type = "text / javascript">
				/ *
				Función de alerta para poder mostrar un mensaje en pantalla al usuario.
				* /
				alerta ("ERROR AL MODOFICAR EL REGISTRO");
				/ *
				Uso de la ventana global variable para poder cambiar de localización al usuario.
				* /
				window.location = "PersonasControlador.php? operaion = index";
				/ * Guión de cierre de la etiqueta. * /
			</script>
			/ *
			Inicio de una llave PHP para poder escribir código en PHP.
			* /
			<? php
			/* En caso lo contario de la condicion*/
		}
	}
}
?>