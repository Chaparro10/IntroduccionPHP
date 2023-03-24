<?php include 'includes/header.php';

//while
$incremento = 0;

while ($incremento < 10) {
    echo $incremento . "<br>";

    $incremento++;
}

echo "DO WHILE" . "<br>";
//do-while
$incremento = 0;
do {
    echo $incremento . "<br>";
    $incremento++;
} while ($incremento < 10);



echo "For Loop" . "<br>";
/**Ejercicio Ejemplo
 * DIVISIBLES
 * 3 Imprimir Fizz
 * 5 Imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */
//FOR Loop
for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 === 0 && $i % 5 == 0) {
        echo $i . "-FIZZ BUZZ <br>";
    } else if ($i % 3 === 0) {
        echo $i . "-Fizz <br>";
    } else if ($i % 5 === 0) {
        echo $i . "-Buzz <br>";
    }else{
        echo $i."<br>";
    }
}

//For each
$clientes = array('pedro','juan','federico');

foreach($clientes as $cliente)
echo $cliente."<br>";
//endforeach;

$cliente=[
    'nombre'=>'juan',
    'saldo'=>300,
    'tipo'=>'Premium'
];

foreach($cliente as $key =>$valor){
    echo $key."-".$valor."<br>";
}


include 'includes/footer.php';
