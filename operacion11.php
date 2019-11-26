<?php
	require('conexion.php');
	
	$id=$_POST["id_em"];
	$nombre= $_POST["nombre"];
	$hora_entrada=$_POST["hora_entrada"];
	$hora_salida=$_POST["hora_salida"];
	
	
	$query="INSERT INTO empleado(id_em,nombre,hora_entrada,hora_salida) VALUES ('$id','$nombre','$hora_entrada','$hora_salida')";
		
	$resultado= $mysqli->query($query);
	
	if($resultado){
		header("Location:tabla11.php");
		
	}
	else{
		echo "Insercion no exitosa";
	}
?>
	
	
