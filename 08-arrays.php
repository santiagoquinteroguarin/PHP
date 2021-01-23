<?php include 'includes/header.php';

// ? Arrays

$carrito = ['tablet','phone','laptop','tv'];

// * pre --> util para ver los contenidos de un array
echo '<pre>';
    var_dump($carrito);
echo '<pre>';

// * añadir un nuevo item al final de array
array_push($carrito, 'smartwatch');

// * añadir un nuevo item al inicio del array
array_unshift($carrito, 'playstation');

echo '<pre>';
    var_dump($carrito);
echo '<pre>';

include 'includes/footer.php';