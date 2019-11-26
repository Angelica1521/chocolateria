<?php
	require('conexion.php');
	
	$id=$_POST["id_user"];
	$nombre= $_POST["nombre"];
	$correo=$_POST["correo"];
	$contra=$_POST["contra"];
	
	$query="INSERT INTO usuario(id_user,nombre,correo,contra) VALUES ('$id','$nombre','$correo','$contra')";
		
	$resultado= $mysqli->query($query);
	
	if($resultado){
		header("Location:index6.html");
		
	}
	else{
		echo "Insercion no exitosa";
	}
?>
	
	
	