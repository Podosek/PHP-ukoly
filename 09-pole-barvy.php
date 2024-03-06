<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $barvy = [
                "Modrá" => "#0000ff", 
                "Červená" => "#ff0000", 
                "Purpurová" => "#f0f",
            ];
    echo "<table border=1>";
    echo "<tr>";
    foreach ($barvy as $nazev => $barva )
    {
        echo "<tr> <td style='background-color: $barva'>$nazev</td> </tr>";
    }
    echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>