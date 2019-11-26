<?php
	require('conexion.php');
	
	$id= $_POST["id_cita"];
	$fecha= $_POST["fecha"];
	$hora=$_POST["hora"];
	$servicio= $_POST["servicio"];

	
	$query="INSERT INTO cita(id_cita,fecha,hora,servicio) VALUES ('$id','$fecha','$hora','$servicio')";
		
	$resultado= $mysqli->query($query);
	
	if($resultado){
		header("Location:tabla1.php");
		
	}
	else{
		echo "Insercion no exitosa";
	}
?>
	
	