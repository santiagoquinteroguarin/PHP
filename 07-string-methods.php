<?php include 'includes/header.php';

// string methods

// * cantidad de caracteres y sumando los espacios
echo strlen('hola Mundo!');

// * trim --> quita los espacios del inicio y el final de una cadena de texto
$text = trim(' Santiago Quintero Guarin  ');
var_dump($text);

// * convertir a mayusculas
echo(strtoupper($text));

// * convertir a minusculas
echo(strtolower($text));

// * Replace --> 3 parametro, el 1 es la palabra a buscar, el segundo es la palabra a reemplazar y el tercero es la variable
echo(str_replace('Santiago','S',$text));

// * Revisa si un string existe o no -- si la palabra existe devuelve la posicion sino existe no muestra nada
$name = 'santiago quintero guarin';
echo(strpos($name, 'quintero'));

// * concatenar
$tipoCliente = 'premiun';
echo('El cliente ' . $name . ' es un cliente ' . $tipoCliente);


include 'includes/footer.php';