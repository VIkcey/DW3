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
        ['name' => 'Banana', 'color' => 'yellow'],
        ['name' => 'Apple', 'color' => 'Green'],
        ['name' => 'Orange', 'color' => 'orange'],
        ['name' => 'Mango', 'color' => 'yellowish-orange'],
        ['name' => 'Grapes', 'color' => 'purple'],
        ['name' => 'Pineapple', 'color' => 'brown-green']
    ];

$student = [
    "name" => "John Smith",
    "age" => 21,
    "Program" => "Computer Science",
];

$a
    = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12],
    ];

// UPDATE THE FOURTH ELEMENT IN $fruit_list
$fruit_list[3] = "Watermelon";


// UPDATE THE VALUE IN THE "NAME" ELEMENT IN $student
$student['name'] = "Tony Stark";
?>

<body>
    <p><?= $fruit_list[0]['name'] ?> is <?= $fruit_list[0]['color'] ?> </p>
    <p><?= $fruit_list[4]['name'] . " are " . $fruit_list[4]['color'] ?> </p>
</body>

</html>