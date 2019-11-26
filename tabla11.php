<!DOCTYPE html>
<html>
	<head>
		<title>Tabla</title>
		
	<link rel="shortcut icon" type="image/x-icon" href="img/A.ico">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="img/A.ico">	
		
	</head>
		<body background="img/s.jpg">
		<center>
			<table border="3">
				<thead>
					<tr><br><br><br>
						<th colspan="1"><a href="index11.html">Nuevo</a></th>
						<th colspan="10">&nbsp;&nbsp;REGISTRO DEL EMPLEADO</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>NOMBRE</td>
						<td>HORA DE ENTRADA</td>
						<td>HORA DE SALIDA</td>
						
						
					</tr>
					
					<?php
						require('conexion.php');
						$query="SELECT ID_EM,nombre,HORA_ENTRADA,hora_salida FROM empleado";
						$resultado=$mysqli->query($query);
						while($row=$resultado->fetch_assoc()){
					?>
					<tr>
						
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['HORA_ENTRADA']; ?></td>
						<td><?php echo $row['hora_salida']; ?></td>
							
					
						
					


					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</center>
	</body>
</html>
				
				