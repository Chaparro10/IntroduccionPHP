<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if ($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado";
}

echo "<br>";
//IF ANIDADOS
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if (!empty($cliente)) {
    echo "El arreglo del cliente no esta vacio";

    if ($cliente['saldo'] > 0) {
        echo "El saldo del cliente esta disponible" . $cliente['saldo'];
    } else {
        echo "No hay saldo";
    }
}

echo "<br>";
//else if

if ($cliente['saldo'] > 0) {
    echo "EL CLIENTE TIENE SALDO";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "Cliente Premium";
} else {
    echo "No tiene saldo";
}

echo "<br>";
//SWITCH

$tecnologia = 'PHP';
switch ($tecnologia) {
    case 'PHP':
        echo "Un buen lenguaje";
        break;
    case 'Html':
        echo "si soy";
        break;
    case 'JAVASCRIPT':
        echo "Un buen lenguaje";
        break;
    default:
        echo "Fuera de mi alcance";
        break;
}






include 'includes/footer.php';
