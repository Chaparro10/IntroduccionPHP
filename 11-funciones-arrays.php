<?php include 'includes/header.php';

$carrito=['tablet','computadora','telefono'];

//in-array -Buscar un elemento en el array
var_dump(in_array('tablet',$carrito));

//ORDENAR LOS ELEMENTOS DE UN ARREGLO
$numeros=array(1,2,2,3,4,5);
sort($numeros);//de menor a mayor
rsort($numeros);//de mayor a menor


echo "<pre>";
var_dump($numeros);
echo "<pre>";


include 'includes/footer.php';