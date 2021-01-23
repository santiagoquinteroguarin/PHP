<!-- importar archivo de templates - sino encuentra el archivo la ejecución sigue en curso -->
<?php include 'includes/header.php';

// importar un archivo de logica - si no encuentra el archivo se detiene la ejecución
require 'funciones.php';

iniciarApp();

include 'includes/footer.php';