<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table border=1>";
    echo "<tr>";
    for ($radek = 1; $radek <= 8; $radek++)
    {
        echo "<tr>";
            for ($sloupec = 1; $sloupec <= 8; $sloupec++)
        {
            $sachovnice = $radek + $sloupec;
            if ($sachovnice%2 == 0)
            {
                echo "<td class='bila'></td>";
            }
            else
            {
                echo "<td class='cerna'></td>";
            }
        }
        echo "</tr>";
    }
    echo "</tr>";
    echo "</table>";
    ?>

    <style>
        table {
            border-collapse: collapse;
        }
        table td {
            width: 100px;
            height: 100px;
        }
        table td.cerna {
            background-color: gray;
        }
        table td.bila {
            background-color: white;
        }
    </style>
</body>
</html>