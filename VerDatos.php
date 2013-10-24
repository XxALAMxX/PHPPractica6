<form action=GuardarCambios.php method="POST">
<?php
session_start();
require_once('Conexion.php');
require_once('Contactos.php');
$Id=$_GET['var1'];
class Contacto
{
    public function encontrarTodos()
    {
$Id=$_GET['var1'];
        try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT * FROM usuarios WHERE Id=$Id";
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

		 $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
foreach($contactos as $contacto){

echo "<fieldset>";
echo "<legend align='center'>Datos de Usuario</legend>";
echo "<input type=hidden name=Id value='$Id' />";
echo "<table>";
echo "<tr>";
echo "<td>Nombre:</td>";
echo "<td>".$contacto['Nombre']. "</td></tr>";
echo "<tr>";
echo "<td>Apellido Paterno:</td>";
echo "<td>".$contacto['Apellido_P']. "</td></tr>";
echo "<tr>";
echo "<td>Apellido Materno:</td>";
echo "<td>".$contacto['Apellido_M']. "</td></tr>";
echo "<tr>";
echo "<td>Telefono:</td>";
echo "<td>".$contacto['Telefono']. "</td></tr>";
echo "<tr>";
echo "<td>Celular:</td>";
echo "<td>".$contacto['Celular']. "</td></tr>";
echo "<tr>";
echo "<td>Edad:</td>";
echo "<td>".$contacto['Edad']. "</td></tr>";
echo "<tr>";
echo "<td>Direccion:</td>";
echo "<td>".$contacto['Domicilio']. "</td></tr>";
echo "<tr>";
echo "<td><input type=submit name='Enviar' value='Guardar'/></td>";
echo "<td><a href =\"Sesion.php\"> Regresar </a></td></tr>";
echo "</table>";
echo "</fieldset>";
}
?>
</body>
</html>