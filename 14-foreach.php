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

foreach($productos as $producto):
echo "<pre>";
echo var_dump($producto);
echo "<pre>";
endforeach;



include 'includes/footer.php';
