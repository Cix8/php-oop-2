<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Accessories.php";
require_once __DIR__ . "/Parapharmacy.php";
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/Registered_user.php";

$milk = new Food("Whiskas", "Catmilk", 2, 8, "22/10/2022");
$dog_snaks = new Food("Happy Dog", "Soft Snack", 2.5, 7, "15/01/2023");
$cat_mousse = new Food("Matisse", "Cat Mousse", 4.15, 7.5, "18/02/2023");

$aquarium_rock = new Accessories("Amtra", "Decorative Rock for Aquarium", 0.99, 6.2, "Grey");
$pet_carrier = new Accessories("Trixie", "Pet Carrier Kennel Twister", 15.69, 7.6, "Blue");

$dog_defender = new Parapharmacy("Aurora Biofarma", "Legart Defender", 38.5, 8, "Dog");
$attracting_lotion = new Parapharmacy("Croci Gill's", "Attracting Lotion Puppy Trainer", 6.49, 0, "Cat");

$main_data = [
    "food" => [$milk, $dog_snaks, $cat_mousse],
    "accessories" => [$aquarium_rock, $pet_carrier],
    "parapharmacy" => [$dog_defender, $attracting_lotion]
];

$first_user = new Registered_user("Giacomo", "Verdi", "giacomino@libero.it", "5555-4444-3333-2222", "03/2025");
$second_user = new User("Franco", "Rossi", "franchino@libero.it", "1234-5678-8765-4321", "10/2023");

var_dump($first_user, $second_user);

$first_user->addToCart($milk);
$first_user->addToCart($aquarium_rock);
$first_user->addToCart($dog_defender);
var_dump($first_user->cart);
echo "Il prezzo finale è: € " . $first_user->getFinalPrice();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>