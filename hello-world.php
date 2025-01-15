<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<?php
$welcome_message = "Bienvenue a DW3, nombre des messages dans electronique boite";
$int_message = 7;
$true_bool = true;
$false_bool = false;
?>

<body>
    <H1>Hello World</H1>
    <p><?= $welcome_message ?></p>
    <p><?= $int_message ?></p>
    <p>Boolean true: <?= $true_bool ?></p>
    <p>Boolean false: <?= $false_bool ?></p>
</body>

</html>