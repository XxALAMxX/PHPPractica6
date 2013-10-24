<form action=Formulario.php method="POST">
<?php
session_start();
require_once('Conexion.php');
require_once('Contactos.php');
$Id=$_POST['Id'];
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
            $sql = "UPDATE  usuarios SET Nombre='$Nombre',Apellido_P='$Ap',Apellido_M='$Am',Telefono='$Telefono',Celular='$Celular',Domicilio='$Domicilio',Edad='$Edad' WHERE Id='$Id'";
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
?>