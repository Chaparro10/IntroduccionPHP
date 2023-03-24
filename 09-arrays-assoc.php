<?php include 'includes/header.php';

$cliente=[
    'nombre'=>'Juan',
    'saldo'=>100,
    'informacion'=>[
        'tipo'=>'premium'
        
    ]

];
echo "<pre>";
var_dump($cliente);
echo "<pre>";



include 'includes/footer.php';