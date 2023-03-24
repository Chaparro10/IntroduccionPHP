<?php include 'includes/header.php';

$carrito=["Tele","Telefono","Camion","Carro"];
//Ver el contenido de un array
echo "<pre>";
var_dump($carrito);
echo "<pre>";
echo "---------------";

//FOR EACH PARA RECORRER UN ARRAY
foreach ($carrito as $carritos)
    echo $carritos;

//ACCEDER A UN ELEMENTO DE UN ARRAY
echo $carrito[1];
//AÑADE UN ELEMENTO EN ALGUN INDICE DEL ARREGLO
$carrito[4]="Nuevo";
//AÑADIR UN ELEMENTO NUEVO AL FINAL
array_push($carrito, 'Nuevo1');
//AÑADIR UN ELEMENTO NUEVO AL INICIO
array_unshift($carrito,'Nuevo 33');


echo "<pre>";
var_dump($carrito);
echo "<pre>";

include 'includes/footer.php';