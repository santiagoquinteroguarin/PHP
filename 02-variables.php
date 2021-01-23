<?php include 'includes/header.php';

// ? Variables en PHP

// * $variables: esta funciona como un let en js tienen la misma funcionalidad, se puede reasignar un valor etc...
$name = 'Santiago';

var_dump($name);
echo($name);


// * crear una variable constante en php y para mostrarla no se necesita agregar el signo de dolar
define('constante','Soy una variable constante');

echo constante;

// ? otra forma de crear una constante pero no muy utilizada en php es como en js
const lastName = 'Quintero Guarin';

echo lastName;

include 'includes/footer.php';