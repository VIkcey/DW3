<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 4</title>
</head>

<body>
    <?php

    $offer_list = [
        ["day" => "Monday", "offer" => "Buy 1, get 1 free!", "product" => "Croissant", "stock" => 10],
        ["day" => "Tuesday", "offer" => "Buy 2, get 1 free!", "product" => "Muffin", "stock" => 0],
        ["day" => "Wednesday", "offer" => "10% off!", "product" => "Cake", "stock" => 3],
        ["day" => "Thursday", "offer" => "2 for $10", "product" => "Sourdough bread", "stock" => 4],
    ];

    $today = $offer_list[2]['day'];

    switch ($today) {
        case 'Monday':
            $offer = $offer_list[0]['offer'];
            $product = $offer_list[0]['product'];
            $stock = $offer_list[0]['stock'];
            break;
        case 'Tuesday':
            $offer = $offer_list[1]['offer'];
            $product = $offer_list[1]['product'];
            $stock = $offer_list[1]['stock'];
            break;
        case 'Wednesday':
            $offer = $offer_list[2]['offer'];
            $product = $offer_list[2]['product'];
            $stock = $offer_list[2]['stock'];
            break;
        case 'Thursday':
            $offer = $offer_list[3]['offer'];
            $product = $offer_list[3]['product'];
            $stock = $offer_list[3]['stock'];
            break;
        default:
            $offer = "";
            $product = "";
            $stock = 0;
            break;
    }

    // Output the offer for today
    echo ($offer > 0) ? "Today's Offer: " . $offer : "No offers for today";

    ?>

    <h1>The Bakery</h1>
    <h2>Today is <?= $today ?></h2>

    <h2>
        Our special offer for <?= $product ?>
    </h2>
    <p>Available offers <?= $offer ?></p>

    <p>
        <?php
        echo ($stock > 0) ? $stock . " " . "left in stock" : "Out of stock!";
        ?>
    </p>

</body>

</html>