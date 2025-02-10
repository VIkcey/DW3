<?php
declare(strict_types=1);

include "includes/header.php";
?>


<?php


$candy_data = array(
    "Toffee" => array(
        "price" => 3,
        "stock" => 12
    ),
    "Mints" => array(
        "price" => 2,
        "stock" => 26
    ),
    "Fudge" => array(
        "price" => 4,
        "stock" => 8
    ),
);

$tax_rate = 20;


function get_reorder_message($stock)
{

    $res = "No";
    if ($stock < 10) {
        $res = "Yes";
    }

    return $res;
}

function get_total_value($price, $qty)
{
    return ($price * $qty);
}

function get_tax_due($price, $quantity, $tax_rate = 0)
{
    $new_pri = ($price * $quantity);
    $tax = $new_pri * $tax_rate / 100;
    $total = $new_pri + $tax;

    return "$" . $total;
}

echo "<pre>";
print_r($candy_data);

?>

<h1>The Candy Store</h1>
<h2>Stock Control</h2>

<table width="30%">
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total value</th>
        <th>Tax due</th>
    </tr>
    <?php foreach ($candy_data as $key => $item) { ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $item['stock'] ?></td>
            <td><?= $item['price'] ?></td>
            <td><?= get_reorder_message($item['stock']) ?></td>
            <td><?= get_total_value($item['price'], $item['stock']) ?></td>
            <td><?= get_tax_due($item['price'], $item['stock'], $tax_rate) ?></td>
        </tr>
    <?php } ?>
</table>



<?php include "includes/footer.php"; ?>