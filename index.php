<?php 
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Accessories.php";
require_once __DIR__ . "/Parapharmacy.php";

$milk = new Food("Granarolo", "Milk", 2, 8, "22/10/2022");
$dog_snaks = new Food("Happy Dog", "Soft Snack", 2.5, 7, "15/01/2023");
$cat_mousse = new Food("Matisse", "Cat Mousse", 4.15, 7.5, "18/02/2023");
var_dump($milk, $dog_snaks, $cat_mousse);

$aquarium_rock = new Accessories("Amtra", "Decorative Rock for Aquarium", 0.99, 6.2, "Grey");
$pet_carrier = new Accessories("Trixie", "Trasportino Kennel Twister", 15.69, 7.6, "Blue");
var_dump($aquarium_rock, $pet_carrier);

$dog_defender = new Parapharmacy("Aurora Biofarma", "Legart Defender", 38.5, 8, "Dog");
$attracting_lotion = new Parapharmacy("Croci Gill's", "Attracting Lotion Puppy Trainer", 6.49, 0, "Cat");
var_dump($dog_defender, $attracting_lotion);
?>