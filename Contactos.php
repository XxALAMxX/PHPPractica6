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
                    echo "<td><a href=Editar.php?var1=".$contacto['Id']."><img src='1.jpg' width='30' height='30'/></a></td>";
                    echo "<td><a href=Borrar.php?var1=".$contacto['Id']."><img src='2.jpg' width='30' height='30'/></a></td>";
                    echo "<td><a href=VerDatos.php?var1=".$contacto['Id']."><img src='3.jpg' width='30' height='30'/></a></td>";
                echo '</tr>';
            }
        echo '<table>';
    }
    public function generaTablaEditar()
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
                echo '</tr>';
            }
        echo '<table>';
    }
}
?>