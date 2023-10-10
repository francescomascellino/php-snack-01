<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->

<?php

$partite = [
    [
        "casa" => "Olimpia Milano",
        "punti_casa" => 55,
        "ospite" => "Cantù",
        "punti_ospite" => 60,
    ],

    [
        "casa" => "Bergamo",
        "punti_casa" => 40,
        "ospite" => "Bologna",
        "punti_ospite" => 70,
    ],
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--     <?php foreach ($partite as $value) {
                    foreach ($value as $key => $value) {
                        var_dump($key, $value);
                    }
                }
                ?> -->

    <?php foreach ($partite as $partita) : ?>
        </p>

        <?= "$partita[casa] - $partita[ospite] | $partita[punti_casa]-$partita[punti_ospite]" ?>

        </p>
    <?php endforeach ?>


</body>

</html>