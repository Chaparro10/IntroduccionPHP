<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => '200',
        'disponible' => true
    ],
    [
        'nombre' => 'Platano',
        'precio' => '20',
        'disponible' => true
    ],
    [
        'nombre' => 'Manzana',
        'precio' => '50',
        'disponible' => true
    ]
];


echo "<pre>";

var_dump($productos);
$json=json_encode($productos);//convierte arreglo en string
var_dump($json);

$json_array =json_decode($json);//convierte string en arreglo
var_dump($json_array);
echo "<pre>";




include 'includes/footer.php';