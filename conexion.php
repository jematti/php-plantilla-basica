<?php
// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos

	$user = 'postgres';
	$passwd = '123456';
	$db = 'db_factura';
	$port = 5432;
	$host = 'localhost';
	// Selección del a base de datos a utilizar
	
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	
	// establecer y realizar consulta. guardamos en variable.    
    
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());


	
	// creación de la conexión a la base de datos con mysql_connect()
	
?>