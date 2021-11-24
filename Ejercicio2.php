<!-- EJERCICIO 2: Crear un codigo que pasado un numero por parametro nos diga si es par o impar -->
<?php
if (!isset ($_GET["num"])){
    echo "Error, no has seteado ningún número"; //Así comprobamos que está seteada y si no tiramos este error por texto.
};
$num = $_GET["num"];
if ($num % 2 == 0){
    //Comprobamos que el resto es 0 y si es así nos devuelve un string u otro si no se cumple la condición.
    echo "num  es par";
} else{
    echo "num  es impar";
}
?>