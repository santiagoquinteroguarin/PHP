<?php include 'includes/header.php';

// ? arreglos asociativos

$cliente = [
    'name' => 'Santiago',
    'lastname' => 'Quintero Guarin',
    'data' => [
        'tipo' => 'premium',
        'dinero' => 200
    ],
];


echo($cliente['name']);

$cliente['age'] = 23;

echo '<pre>';
    var_dump($cliente);
echo '<pre>';


include 'includes/footer.php';