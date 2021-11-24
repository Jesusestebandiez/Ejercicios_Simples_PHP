<html>
    <head>
        <title>Saludo</title>
    </head>
    <body>
        <form method="get">
            <label>Escrime tu nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <label>Elige un idioma:</label>
            <select id ="idioma" name="idioma">
                <option value="esp">Español</option>
                <option value="ing">Inglés</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php
if (isset($_GET['nombre']) and isset($_GET['idioma']))
{
    $nombre = $_GET['nombre'];
}
?>