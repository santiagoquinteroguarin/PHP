<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet', 
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"', 
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo', 
        'precio' => 400,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);

// convertir a JSON y conversión para caracteres especiales
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

// convertir un string a un array
$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo "</pre>";




include 'includes/footer.php';