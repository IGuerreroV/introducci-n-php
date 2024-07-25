<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Ivan',
    'saldo' => 200,
    'informacion' => [
        'tipo'=> 'Premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo '<pre>';

// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 123456567;

echo "<pre>";
var_dump($cliente);
echo '<pre>';

include 'includes/footer.php';