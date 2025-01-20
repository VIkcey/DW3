<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy</title>
</head>

<body>
    <?php
    $candy = [
        ['candy' => 'Caramel', 'price' => 5],
        ['candy' => 'Cotton candy', 'price' => 3],
        ['candy' => 'Licorice', 'price' => 4],
    ]
        ?>

    <h1>The Candy Store</h1>
    <h2>Offers</h2>

    <p><?= $candy[0]['candy'] . " - " . $candy[0]['price'] . "$" ?></p>
    <p><?= $candy[1]['candy'] . " - " . $candy[1]['price'] . "$" ?></p>
    <p><?= $candy[2]['candy'] . " - " . $candy[2]['price'] . "$" ?></p>
</body>

</html>