<?
$correo=$_POST['correo'];
$contra=$_POST['contra'];

$conexion=mysqli_connect("localhost","root","socrates","estetica");
$consulta="SELECT * FROM usuario WHERE correo='$correo' and contra='$contra'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
header("location:cita.html");
}
else{
echo "error solamente tiene 3 intentos,sino se bloqueara el sistema";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
