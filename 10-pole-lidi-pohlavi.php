<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $pole = [
    //     "osoba1" => ["Igor" => ["muž" => "blue"]],
    //     "osoba2" => ["Nikola" => ["žena" => "red"]],
    //     "osoba3" => ["Pepa" => ["muž" => "blue"]],
    //     "osoba4" => ["Pepa" => ["žena" => "red"]],
    // ];
    // echo "<table border=1>";
    // foreach ($pole as $osoba => $jmena)
    // {
    //     echo "<tr>";
    //     foreach ($jmena as $jmeno => $udaje)
    //     {
    //         echo "<td><b>$jmeno</b></td>";
    //         foreach ($udaje as $pohlavi => $barva)
    //         {
    //             echo "<td style='background-color:$barva'>$pohlavi</td>";
    //         }
    //         echo "</tr>";
    //     }
    // }
    // echo "</table>";

    $lide = [
        [
            "jmeno" => "Igor",
            "pohlavi" => "muž",
            "barva" => "blue",
            "vek" => 36,
            "vaha" => 94,
        ],
        [
            "jmeno" => "Nikola",
            "pohlavi" => "žena",
            "barva" => "red",
            "vek" => 28,
            "vaha" => 52,
        ],
        [
            "jmeno" => "Pepa",
            "pohlavi" => "muž",
            "barva" => "blue",
            "vek" => 42,
            "vaha" => 85,
        ],
        [
            "jmeno" => "Pepa",
            "pohlavi" => "žena",
            "barva" => "red",
            "vek" => 54,
            "vaha" => 62,
        ],
    ];
    echo "<table border=1>";
    echo "<tr>";
    foreach ($lide as $lidi => $udaje)
    {
        echo "<tr> <td><b>{$udaje ['jmeno']}</b></td>";
        echo "<td style='background-color:{$udaje ['barva']}'>{$udaje ['pohlavi']}";
        echo "<td>{$udaje ['vek']} let</td>";
        echo "<td>{$udaje ['vaha']} kg</td>";
        echo "</td> </tr> ";
    }
    echo "</tr>";
    echo "</table>";

    // echo $lide ['1'] ['jmeno'];
    ?>
</body>
</html>