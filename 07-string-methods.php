<?php include 'includes/header.php';

$nombreCliente = 'Ivan Guerrero';

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertir a mayusculas
echo strtoupper($nombreCliente);

// Convertir en minusculas
echo strtolower($nombreCliente);

$mail1 = 'correo@corre.com';
$mail2 = 'Correo@corre.com';

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Ivan', 'I', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Ivan');

$tipoCliente = 'Premium';

echo '<br/>';
// Concatenacion
echo 'El cliente ' . $nombreCliente . ' es ' . $tipoCliente;

echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';