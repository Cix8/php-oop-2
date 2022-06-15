<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Accessories.php";
require_once __DIR__ . "/Parapharmacy.php";
require_once __DIR__ . "/User.php";

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="cart">
            <div class="icon-container">
                <i class="fas fa-shopping-cart">
                    <div class="cart-counter">
                        <span>1</span>
                    </div>
                </i>
            </div>
            <div class="cart-contents">
                <div class="cart-title">
                    <h3>CART:</h3>
                </div>
                <ul>
                    <li>
                        Nome_prodotto, prezzo
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <?php foreach ($main_data as $key => $single_obj) { ?>
            <div class="title">
                <h2><?php echo strtoupper($key); ?></h2>
            </div>
            <ul class="<?php echo $key; ?>">
                <?php foreach ($single_obj as $single_data) { ?>
                    <li class="list-contents">
                        <div class="brand">
                            <h5><?php echo $single_data->brand ?></h5>
                        </div>
                        <div class="name">
                            <h3><?php echo $single_data->name ?></h3>
                        </div>
                        <div class="price">
                            <span>Prezzo: </span>
                            <span>€ <?php echo $single_data->price ?></span>
                        </div>
                        <div class="rating">
                            <span>Rating: </span>
                            <span><?php echo $single_data->rating ?></span>
                        </div>
                        <?php if ($single_data->expiration) { ?>
                            <div class="expiration">
                                <span>Expiration: </span>
                                <span><?php echo $single_data->expiration ?></span>
                            </div>
                        <?php } elseif ($single_data->color) { ?>
                            <div class="color">
                                <span>Color: </span>
                                <span><?php echo $single_data->color ?></span>
                            </div>
                        <?php } else { ?>
                            <div class="dedicated_to">
                                <span>Dedicated to:</span>
                                <span><?php echo $single_data->dedicated_to ?></span>
                            </div>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </main>

</body>

</html>