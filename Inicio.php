<html>
<head>
</head>
<body>
<form action=Sesion.php method="POST">
<?php
session_start();
$Nombre=$_POST['txtNombre'];
$Pass=$_POST['password'];
$_SESSION['txtNombre']=$_POST['txtNombre'];
if($Nombre=='100' && $Pass=='udg' || $Nombre=='110' && $Pass=='tonala' || $Nombre=='1' && $Pass=='root')
{
	header('Location: Sesion.php');
}
else
{
echo "Error en usuario y/o Contraseña";
echo "<br>Redireccionando";
header('refresh:1; url=Formulario.php');
}
?>
</body>
</html>