<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
    $mesta = [
        "Praha" => [
            "15.2" => ["teplota" => "13 °C", "popis" => "Oblačno"],
            "16.2" => ["teplota" => "12 °C", "popis" =>"Polojasno"],
            "17.2" => ["teplota" => "11 °C", "popis" =>"Oblačno"],
        ],
        "Brno" => [
            "15.2" => ["teplota" => "9 °C", "popis" => "Oblačno"],
            "16.2" => ["teplota" => "12 °C", "popis" => "Jasno"],
            "17.2" => ["teplota" => "12 °C", "popis" => "Oblačno"],
        ]
    ];
    foreach ($mesta as $mesto => $data)
    {
        echo "<h1>$mesto</h1>";
        echo "<table border=1>";
        echo "<tr> <th>Datum</th> <th>Teplota</th> <th>Popis</th></tr>";
        foreach ($data as $datum => $hodnoty)
        {
            echo "<tr>";
            echo "<td>$datum</td>";
			echo "<td>{$hodnoty["teplota"]}</td>";
			echo "<td>{$hodnoty["popis"]}</td>";
            echo "</tr>";
        }
        echo "</tr>";
        echo "</table>";

    }
    ?>
</body>
</html>