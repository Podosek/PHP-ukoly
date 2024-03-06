<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function vypisTabulku ($pole)
    {
        echo "<table border=1>";
        foreach ($pole as $radek)
        {
            echo "<tr>";
            foreach ($radek as $sloupec)
            {
                echo "<td>$sloupec</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    $zvirata = [
        ["Koza", 4],
        ["Had", 0],
        ["Kočka", 3],
        // ["Pavouk", 8],
    ];

    vypisTabulku($zvirata);

    echo "<br>";

    $staty = [
        ["Česká republika", "Praha", 10700000],
        ["Německo", "Berlín", 83240000],
        ["Rusko", "Moskva", 144100000],
        // ["USA", "Washigton",331900000],
    ];

    vypisTabulku($staty);

    ?>
</body>
</html>