<?php
	//conectamos Con el servidor
	$conectar=mysqli_connect('127.0.0.1','root','','prueba');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}
	//recuperar las variables
	$Nombrecompleto=$_POST['Nombre completo'];
	$email=$_POST['email'];
	$password=$_POST['contraseña'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombrecompleto',
								   '$email',
								   '$password')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_db_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>