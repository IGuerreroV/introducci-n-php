<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora']; // Arreglo
//$carrito = array(); // Arreglo

// Acceder a un elemento del array
echo $carrito[1];

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

// Añade un elemento nuevo al final
array_push($carrito, 'Audifonos');

// Añade un elemento nuevo al inicio
array_unshift($carrito, 'Smartwatch');

// Util para ver los contenidos de un Array
echo "<pre>";
var_dump($carrito);
echo '<pre>';


$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo '<pre>';

echo $clientes[1];


include 'includes/footer.php';