<?php include 'includes/header.php';

$clientes =[];
$clientes2= array();
$clientes3=array("pedro","juan");
$cliente = [
    'nombre' => 'Juan',
    'saldo'=>200
];

//Empty --Revisa si el arreglo esta vacio
var_dump(empty($clientes));
var_dump(empty($clientes3));

//Isset --Revisa si el arreglo esta creado o una propiedad definida

echo "<br>";
var_dump(isset($cliente4));
var_dump(isset($clientes));


var_dump(isset($cliente['nombre']));



include 'includes/footer.php';