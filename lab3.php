<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 3</title>
</head>

<body>
    <?php

    $user = "Sally";
    $message = "Hello" . " " . $user . "!";

    $offer = [
        ["key" => "Product", "value" => "Croissant"],
        ["key" => "Quantity", "value" => 2],
        ["key" => "Usual price (per unit)", "value" => 4],
        ["key" => "Discounted price (per unit)", "value" => 3],
    ];

    $total_price = $offer[2]['value'] + $offer[2]['value'];
    $total_discounted_price = $total_price - ($offer[3]['value'] + $offer[3]['value']);
    $saving = ($total_discounted_price - $total_price);

    ?>

    <h1>The Bakery</h1>
    <h2>Multi-buy Offer</h2>

    <p><?= $message ?></p>
    <p>You save: <?= $saving ?></p>
    <p>
        Buy <?= $offer[1]['value'] . " " . "packs of" . " " . $offer[0]['value'] ?> for $<?= $total_discounted_price ?>
        (usual price $<?= $total_price ?>)
    </p>
</body>

</html>