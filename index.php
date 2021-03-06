<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Accessories.php";
require_once __DIR__ . "/Parapharmacy.php";
require_once __DIR__ . "/User.php";

$milk = new Food("Whiskas", "Catmilk", 2, 8, "22/10/2022");
$dog_snaks = new Food("Happy Dog", "Soft Snack", 2.50, 7, "15/01/2023");
$cat_mousse = new Food("Matisse", "Cat Mousse", 4.20, 7.5, "18/02/2023");

$aquarium_rock = new Accessories("Amtra", "Decorative Rock for Aquarium", 0.90, 6.2, "Grey");
$pet_carrier = new Accessories("Trixie", "Pet Carrier Kennel Twister", 15.70, 7.6, "Blue");

$dog_defender = new Parapharmacy("Aurora Biofarma", "Legart Defender", 38.50, 8, "Dog");
$attracting_lotion = new Parapharmacy("Croci Gill's", "Attracting Lotion Puppy Trainer", 6.50, 0, "Cat");

$main_data = [
    "food" => [$milk, $dog_snaks, $cat_mousse],
    "accessories" => [$aquarium_rock, $pet_carrier],
    "parapharmacy" => [$dog_defender, $attracting_lotion]
];

$first_user = new User("5555-4444-3333-2222", "05/2022", "Giacomo", "Verdi", "giacomino@libero.it", true);
var_dump($first_user);

$first_user->addToCart($milk);
$first_user->addToCart($aquarium_rock);
$first_user->addToCart($dog_defender);
var_dump($first_user->cart);
echo "Il prezzo finale per " . $first_user->name. " è: € " . $first_user->getFinalPrice();

$first_user->buyItems();

$second_user = new User("1234-5678-8765-4321", "10/2022");
var_dump($second_user);

$second_user->addToCart($milk);
$second_user->addToCart($aquarium_rock);
$second_user->addToCart($dog_defender);
var_dump($second_user->cart);
echo "Il prezzo finale per " . $second_user->name. " è: € " . $second_user->getFinalPrice();

$second_user->buyItems();
?>

<h2>Carrello di <?php echo $first_user->name . " " . $first_user->lastname; ?>: </h2>
<ul>
    <?php foreach($first_user->cart as $single_item) { ?>
        <li>
            <span><?php echo $single_item->getInfo() ?></span>
        </li>
    <?php } ?>
</ul>
<h3>Totale da pagare: € <?php echo $first_user->getFinalPrice() ?></h3>
<h4>Esito Pagamento: <?php $first_user->buyItems() ?></h4>

<h2>Carrello di <?php echo $second_user->name . " " . $second_user->lastname; ?>: </h2>
<ul>
    <?php foreach($second_user->cart as $single_item) { ?>
        <li>
            <span><?php echo $single_item->getInfo() ?></span>
        </li>
    <?php } ?>
</ul>
<h3>Totale da pagare: € <?php echo $second_user->getFinalPrice() ?></h3>
<h4>Esito Pagamento: <?php $second_user->buyItems() ?></h4>