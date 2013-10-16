<form action=Formulario.php method="POST">
<?php
session_start();
require_once('Conexion.php');
require_once('Contactos.php');
$Nombre = $_POST['txtNombre'];
$Ap = $_POST['txtAp'];
$Am=$_POST['txtAm'];
$Telefono=$_POST['txtTelefono'];
$Celular=$_POST['txtCelular'];
$Edad = $_POST['txtEdad'];
$Domicilio=$_POST['txtDomicilio'];
		try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "INSERT INTO usuarios (Nombre, Apellido_P, Apellido_M, Telefono, Celular, Domicilio, Edad)"."VALUES". "('$Nombre','$Ap','$Am','$Telefono','$Celular','$Domicilio','$Edad')";
         	$resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
        }
        catch(Exception $e)
        {
        	echo $e;
        }
           echo "Datos Ingresados con exito";
           echo "<br>";
           echo "<td><a href =\"Sesion.php\"> Regresar </a></td></tr>";
/*echo "<table>";
echo "<tr><input type=submit name='Enviar' value='Cerrar Sesion'/></tr>"
echo "<tr>";
echo "<td>Nombre:</td>";
echo "<td>  $Nombre </td></tr>";
echo "<tr>";
echo "<td>Telefono:</td>";
echo "<td>  $Telefono </td></tr>";
echo "<tr>";
echo "<td>Celular:</td>";
echo "<td>  $Celular </td></tr>";
echo "<tr>";
echo "<td>Direccion:</td>";
echo "<td> $Domicilio </td></tr>";
echo "<td></td>";
echo  "<a href =\"Formulario.php\"> Volver </a>";
echo "</table>";
*/
?>