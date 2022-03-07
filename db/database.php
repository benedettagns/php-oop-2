<?php 

include __DIR__ . "/../classi/prodotti.php";
include __DIR__ . "/../classi/food.php";

$food = [
    new Food("Libra", "Alimenti Secchi", "23,50€", "adult", "pollo", "12kg"), 
    new Food("Gemon", "Alimenti Secchi", "26,80€", "adult", "manzo", "15kg"),
    new Food("Monge", "Alimenti Umidi", "12,99€", "adult", "maiale", "100 gr"),
];

?>