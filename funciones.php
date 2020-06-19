<?php
   function eliminar_autor($autor_id){
		require('conexion.php');
	
		
		$sql="DELETE FROM `autor` where id_autor='".$autor_id."'";
        mysqli_query($conexion,$sql);
        

    }

    function disponible($copia)
	{
		require('conexion.php');

		$verifica="SELECT * FROM `copia` WHERE id_copia='".$copia."' and nro_copias>0  " ;
		$resultado = mysqli_query( $conexion, $verifica );
		if((mysqli_num_rows($resultado)) == 0){ 
			return false;
		} else {
		return true;
		}
    }

    function verificausuario($ru)
	{
		require('conexion.php');

		$verifica="SELECT * FROM `usuario` WHERE ru='".$ru."'  " ;
		$resultado = mysqli_query( $conexion, $verifica );
		if((mysqli_num_rows($resultado)) == 0){ 
			return false;
		} else {
		return true;
		}
	}
	
	function copias($id_libro)
	{
	require('conexion.php');
	//busca el libro que se presto
	$busca="SELECT  nro_copias FROM `copia` WHERE id_libro='$id_libro'";
	$sql_busca=mysqli_query( $conexion, $busca ) or die ("Error buscar");
	//saca el primer atributo
	$fila = mysqli_fetch_array($sql_busca);
	$nro_copias=$fila['nro_copias'];
	return $nro_copias;
		
	}
	
	function busca_categoria($id_cat)
	{
		require('conexion.php');
		//busca el libro que se presto
		$busca="SELECT `nombre_cat` FROM `categoria` WHERE `id_cat`='$id_cat'  ";
		$sql_busca=mysqli_query( $conexion, $busca ) or die ("Error buscar");
		//saca el primer atributo
		$fila = mysqli_fetch_array($sql_busca);
		$categoria=$fila['nombre_cat'];
		return $categoria;
		
		
	}
	
	function busca_editorial($id_edit)
	{
	require('conexion.php');
	//busca el libro que se presto
	$busca="SELECT `nombre_edit` FROM `editorial` WHERE `id_edit`='$id_edit' ";
	$sql_busca=mysqli_query( $conexion, $busca ) or die ("Error buscar");
	//saca el primer atributo
	$fila = mysqli_fetch_array($sql_busca);
	$editorial=$fila['nombre_edit'];
	return $editorial;
		
    }
    
   
    
?>