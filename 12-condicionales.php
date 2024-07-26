<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if($autenticado && $admin) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado, inicia sesion';
}

// If anidados...
$cliente = [
    'nombre' => 'Ivan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo '<br>';
if( !empty($cliente)) {
    echo 'El arreglo de cliente no esta vacio';

    if($cliente['saldo'] > 0){
        echo 'El cliente tiene saldo disponible';
    } else {
        echo 'No hay saldo';
    }
}

echo '<br>';
// else if
if($cliente['saldo'] > 0){
    echo 'El cliente tiene saldo';
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo 'El cliente es Premium';
} else {
    echo 'No hay cliente definido o no tiene saldo o no es premium';
}

echo '<br>';
// Switch.
$tecnologia = 'HTML';

switch($tecnologia) {
    case 'PHP':
        echo 'PHP, un excelente lenguaje';
        break;
    case 'JavaScript':
        echo 'Genial, el lenguaje de la web.';
        break;
    case 'HTML':
        echo 'Emmm...';
        break;

    default:
        echo 'Algun lenguaje que no se cual es';
        break;
}

include 'includes/footer.php';