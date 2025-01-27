<?php
include "includes/header.php";

$user_name = "Alice";
$greetings = ($user_name) ? "Welcome back $user_name" : "Hello";

$product = "Cake";
$cost = 13;


$discounts = array();

for ($packs = 1; $packs <= 10; $packs++) {
    $discount = $packs * 4;
    $discounts[$packs] = $discount;
}

// echo "<pre>";
// print_r($discounts);
?>
<p><?= $greetings ?></p>

<h2><?= $product ?></h2>

<table>
    <tr>
        <th>Packs</th>
        <th>Price</th>
    </tr>
    <?php
    foreach ($discounts as $packs => $discount) {

        $priceAfterDiscount = $cost * $packs * (1 - $discount / 100);
        $packLabel = ($packs == 1) ? "pack" : "packs";
        $formattedPrice = number_format($priceAfterDiscount, 2);
        ?>

        <tr>
            <td>
                <?= $packs . " " . $packLabel ?>
            </td>
            <td>
                <?= "$$formattedPrice" ?>
            </td>
        </tr>

    <?php } ?>
</table>

<?php include "includes/footer.php"; ?>