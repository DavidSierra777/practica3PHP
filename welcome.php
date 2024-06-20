<?php 
$nombre = $_POST["name"];
$edad = $_POST["edad"];

echo "Hola soy   " .$nombre . "   y tengo:   " .$edad. " Años";
if ($edad>=18)
    echo "<h1>Puede votar</h1>";
else
    echo "<h1>No puede votar</h1>";

?>
