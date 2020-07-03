<? php
función pública modificar () 

	/*Iniciar una funcion publica que se llame "modificar"*/
{

	/*Extraer los datos que se envian en la consulta de la url*/

					extracto ($ _ SOLICITUD);

	/*Solicitud a la clase al cual se maneja las conexiones a la base de datos*/				
					$ db = nuevo clasedb ();

	/*Se realiza una conexion hacia a la base de datos y se guarda el resultado en una variable*/				
					$ conex = $ db-> conectar ();

	/*Una estrucuta para la consulta a realizar en la base de datos asi para obtneer al usuario en el servidor*/
	
	$ sql = "SELECCIONAR * DESDE datos_personales DONDE id =". $ id_persona. "";

	/*Se usa la funcion "mysqli_query" para hacer ejecutar la consulta en el servidor asi guardando el resultado de la variable*/

				$ res = mysqli_query ($ conex, $ sql);

	/*El uso de la funcion "mysqli_fetch_array" hace extraer todos los datos recuperados de una consulta y regresando con formato de una matriz,
	guardando el resultado en una variable para poder usar los datos.*/

				$ datos = mysqli_fetch_array ($ res);


	/*El uso de la funcion "encabezado" es para poder redireccionar el usuario a otro sitio del programa llevando los datos recibidos de la consulta serializada, y tal vez se puede cambiar al metodo get.*/
				
			header ("Ubicación: editar.php? data =". serialize ($ data));
}
?>