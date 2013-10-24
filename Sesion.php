<form action=Nuevo.php method="POST">
<?php
session_start();
require_once('Conexion.php');
require_once('Contactos.php');
require_once('Contacto.php');
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
?>