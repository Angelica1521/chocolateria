<!DOCTYPE html>
<html>
	<head>
		<title>Tabla</title>
		
		<link rel="shortcut icon" type="image/x-icon" href="img/A.ico">
		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="img/A.ico">	
		
	</head>
	<body background="img/a12.jpg">
		<center>
			<table border="3">
				<thead>
					<tr><br><br><br>
						<th colspan="1"><a href="cita.html">Nuevo</a></th>
						<th colspan="10">&nbsp;&nbsp;Su Registro de Citas es:</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<td>FECHA DE LA CITA</td>
						<td>HORA DE LA CITA</td>
						<td>SERVICIO</td>
					</tr>
			
					<?php
						require('conexion.php');
						$query="SELECT id_cita,fecha,hora,servicio FROM cita";
						$resultado=$mysqli->query($query);
						while($row=$resultado->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['fecha']; ?></td>
						<td><?php echo $row['hora']; ?></td>
						<td><?php echo $row['servicio']; ?></td>
						

					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</center>
	</body>
</html>
				
				