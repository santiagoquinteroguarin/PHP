<!-- Formas de imprimir en php -->
<?php 
// incluir un archivo externo
include('../Introduccion-PHP/includes/header.php');

// ? echo: es la forma más común para imprimir un mensaje
echo 'Hola mundo';

// ? var_dump: imprime el mensaje pero además nos da mas información como cuantos caracteres hay en esa cadena y el tipo de dato de la variable
var_dump('Hola Mundo!');

// ? print: imprime el texto
print('Hola Mundo!');

// ? print_r: es muy utilizado en arreglos para imprimir  
print_r('Hola mundo');

include('../Introduccion-PHP/includes/footer.php');