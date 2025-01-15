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


$fruit_list
    = [
        'Banana', // index: 0
        'Apple',  // index: 1
        'Orange', // index: 2
        'Mango', // index: 3
        'Grapes', // index: 4
        'Pineapple' // index: 5
    ];

$student = [
    "name" => "John Smith",
    "age" => 21,
    "Program" => "Computer Science",
]

    ?>

<body>
    <H1>Hello World</H1>
    <p><?= $welcome_message ?></p>
    <p><?= $int_message ?></p>
    <p>Boolean true: <?= $true_bool ?></p>
    <p>Boolean false: <?= $false_bool ?></p>
    <p>Mon favori fruit est: <?= $fruit_list[3] ?></p>
    <p>Étudiant nom: <?= $student['name'] ?></p>
</body>

</html>