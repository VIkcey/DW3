<?php
include "includes/header.php";
?>


<?php
$appendixA = [
    ['Monday', 'Buy 1, get 1 free!', 'Croissant', 10, 3.50],
    ['Tuesday', 'Buy 2, get 1 free!', 'Muffin', 0, 4.25],
    ['Wednesday', '10% off!', 'Cake', 3, 25],
    ['Thursday', '2 for $10', 'Sourdough bread', 4, 6],
];


// $today = "Friday";
$today = "Wednesday";

$today_offer = "";
$offer_product = "";
$offer_stock = "";
foreach ($appendixA as $item) {

    if ($item[0] == $today) {
        $today_offer = $item[1];
        $offer_product = $item[2];
        $offer_stock = $item[3];
    }
}

?>

<table width="30%">
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Price</th>
    </tr>
    <?php foreach ($appendixA as $key => $item) { ?>
        <tr>
            <td><?= $item[2] ?></td>
            <td><?= $item[3] ?></td>
            <td><?= "$" . $item[4] ?></td>
        </tr>
    <?php } ?>
</table>

<?php if ($today_offer) { ?>
    <p><?= $offer_product ?></p>
    <p><?= $today_offer ?></p>
    <p>
        <?php
        if ($offer_stock >= 10) {
            echo "All stock must go - come get yours!";
        } elseif ($offer_stock > 0 && $offer_stock < 10) {
            echo "Hurry! Our stock is running fast!";
        } else {
            echo "Unfortunately, our stock has run out :(";
        }
        ?>
    </p>
<?php } else { ?>
    <p>We don't have any offers today, but our baked goods are just as delicious!</p>
<?php } ?>

<?php include "includes/footer.php"; ?>