<?php include 'includes/header.php';

// While
$i = 0; // Inicializador

while($i < 10):
    echo $i . '<br>';

    $i++; // Incremento
endwhile;

echo '<br>';
// Do While
$i = 100;

do {
    echo $i . '<br>';

    $i++;
} while($i < 10);

/*
* 3 imprimir Fizz
* 5 imprimir Buzz
* 3 y 5 Imprimir FIZZ BUZZ
 */

// For Loop
// for($i = 1; $i < 100; $i++) {
//     if($i %  3 === 0 && $i % 5 === 0){
//         echo $i . ' - FIZZ BUZZ <br>';
//     } else if($i % 3 === 0) {
//         echo $i . ' - Fizz <br>';
//     } else if($i % 5 === 0) {
//         echo $i . ' - Buzz <br>';
//     } else {
//         echo $i . '<br>';
//     }
// }

// For Each
$clientes = ['Pedro', 'Juan', 'Karen'];

foreach($clientes as $cliente){
    echo $cliente . '<br>';
}

$cliente = [
    'nombre' => 'Ivan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach($cliente as $key => $valor){
    echo $key . ' - ' . $valor . '<br>';
}

include 'includes/footer.php';