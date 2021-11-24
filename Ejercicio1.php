<!-- EJERCICIO 1: Crear un fichero php que reciba el titulo como parametro GET y en base a eso añada el contenido obtenido dentro de la etiqueta
 <h1></h1> en un documento html -->


<?php
$title = $_GET [
"titulo"
];
echo "<h1>$title</h1>"

?>