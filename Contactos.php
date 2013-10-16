<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
             echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nombre</th>';
                echo '<th>Apellido Paterno</th>';
                echo '<th>Apellido Materno</th>';
                echo '<th>Telefono</th>';
                echo '<th>Opciones</th>';
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td>'.$contacto['Id']. '</td>';
                    echo '<td>'.$contacto['Nombre'].'</td>';
                    echo '<td>'.$contacto['Apellido_P'].'</td>';
                    echo '<td>'.$contacto['Apellido_M'].'</td>';
                    echo '<td>'.$contacto['Telefono'].'</td>';
                    echo "<td><input type=submit name='Enviar' value='Editar'/></td>";
                    echo "<td><input type=submit name='Enviar' value='Eliminar'/></td>";
                    echo "<td><input type=submit name='Enviar' value='Ver'/></td>";
                echo '</tr>';
            }
        echo '<table>';
    }
}
?>