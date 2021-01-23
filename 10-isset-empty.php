<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = ['juan','jim'];

// Validar si un array esta vacio
echo( empty($clientes) );
echo( empty($clientes3) );
echo( empty($clientes2) );

// validar si un arreglo esta definido o si exista alguna propiedad
$cliente = [
    'nombre' => 'santiago',
    'lastname' => 'quinter',
];

echo( isset( $cliente5) );
echo( isset( $cliente) );
echo( isset( $cliente['nombre']) );

include 'includes/footer.php';