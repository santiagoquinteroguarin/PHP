<?php include 'includes/header.php';

// ? Comparaciones
$numberA = 10;
$numberB = 20;
$numberC = 20;
$numberD = 5;
$numberE = "50";
$numberF = 50;

var_dump($numberA < $numberB);

var_dump($numberB == $numberB);

var_dump($numberA > $numberD);

var_dump($numberB >= $numberA);

var_dump($numberD <= $numberA);

var_dump($numberE === $numberF);


// si este es mayor a otro imprime un 1
var_dump($numberA <=> $numberD);

// si este es menor a otro imprime un -1
var_dump($numberD <=> $numberA);

// si los dos son iguales imprime un 0
var_dump($numberB <=> $numberC);

include 'includes/footer.php';