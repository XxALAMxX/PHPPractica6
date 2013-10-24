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
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
foreach($contactos as $contacto){
    echo "<fieldset style='width:200px'>";
    echo "<legend align=center>Datos de Usuario</legend>";
    echo "<input type=hidden name=Id value='$Id' />";
    echo "<table>";
    echo "<tr>";
    echo "<td>Nombre:</td>";
    echo "<td><input type=text size=10 maxlength=10 value=".$contacto['Nombre']. " name='txtNombre' /></td></tr>"; 
    echo "<tr>";
    echo "<td>Apellido Paterno:</td>";
    echo "<td><input type=text size=10 maxlength=10 value=".$contacto['Apellido_P']. " name='txtAp' /></td></tr>";
    echo "<tr>";
    echo "<td>Apellido Materno:</td>";
    echo "<td><input type=text size=10 maxlength=10 value=".$contacto['Apellido_M']. " name='txtAm' /></td></tr>";
    echo "<tr>";
    echo "<td>Telefono:</td>";
    echo "<td><input type=text size=10 maxlength=10 value=".$contacto['Telefono']. " name='txtTelefono' /></td></tr>";
    echo "<tr>";
    echo "<td>Celular:</td>";
    echo "<td><input type=text size=10 maxlength=10 value=".$contacto['Celular']. " name='txtCelular' /></td></tr>";
    echo "<tr>";
    echo "<td>Edad:</td>";
    echo "<td><input type=text size=10 maxlength=10 value=".$contacto['Edad']. " name='txtEdad' /></td></tr>";
    echo "<tr>";
    echo "<td>Direccion:</td>";
    echo "<td><input type=text size=10 maxlength=10 value=".$contacto['Domicilio']. " name='txtDomicilio' /></td></tr>";
    echo "<tr>";
    echo "<td><input type=submit name='Enviar' value='Guardar'/></td>";
    echo "<td><a href =\"Sesion.php\"> Regresar </a></td></tr>";
    echo "</table>";
    echo "</fieldset>";
}
?>
</body>
</html>