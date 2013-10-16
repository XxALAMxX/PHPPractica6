<html>
<head>
</head>
<body>
<form action=Inicio.php method="POST">
<?php
session_start();
session_destroy();
//Hacer un formulario con codigo=100 y password = udg y enviarlo a //sesion.php, desde sesion pueden regresar a formulario
echo "<table>";
echo "<tr>";
echo "<td>Codigo</td>";
echo "<td><input type=text size=10 maxlength=10 id='txtNombre' name='txtNombre' /></td>";
echo "</tr>";
echo "<br>";
echo "<tr>";
echo "<td>Password</td>";
echo "<td><input type=password name='password' id='password' size=10 maxlength=10/></td></tr>";
echo "<tr><td><input type=submit name='Enviar' value='Enviar'/></td></tr>";
?>
</body>
</html>