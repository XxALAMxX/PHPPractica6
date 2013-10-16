<form action=Nuevo.php method="POST">
<?php
session_start();
require_once('Conexion.php');
require_once('Contactos.php');
class Contacto
{
    public function encontrarTodos()
    {
        try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT * FROM usuarios";
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                         $resultado[] = $row;
                     }
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        } 
    }
}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Ejemplo de PHP y MySQL</title>
    </head>
    <body>
        <h1>Mostrar los elementos</h1>
<?php
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
            if(!isset($_SESSION['txtNombre'])){
header('Location: Formulario.php');
}
echo "<table>";
echo "<tr><td>";
echo "Bienvenido usuario " .$_SESSION['txtNombre'];
echo "</td>";
echo "<td>";
echo  "<a href =\"Formulario.php\"> Cerrar Sesion </a>";
echo "</td>";
echo "</tr>";
echo "<tr><td></td><td>";
echo "<input type=submit name='Enviar' value='Nuevo'/>";
echo "</td></tr>";
/*</body>
</html>
$Nombre=$_POST['txtNombre'];
$Pass=$_POST['password'];
echo "<table>";
echo "<tr><td>";
if($Nombre=='100' && $Pass=='udg' || $Nombre=='110' && $Pass=='tonala' || $Nombre=='1' && $Pass=='root')
{
echo "Bienvenido usuario " .$Nombre;
echo "</td>";
echo "<td>";
echo  "<a href =\"Formulario.php\"> Cerrar Sesion </a>";
echo "</td>";
echo "</tr>";
echo "<tr><td></td><td>";
echo "<input type=submit name='Enviar' value='Nuevo'/>";
echo "</td></tr>";
}
else
{
	//100,udg 110,tonala 1,root
    if(!isset($Sesion))
echo "Error en usuario y/o Contraseña";
echo "<br>Redireccionando";
header('refresh:3; url=Formulario.php');
}*/
?>