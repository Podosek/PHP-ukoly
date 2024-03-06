<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tabulka">
        <?php
        echo "<table border=1>";
        for ($radek = 1; $radek <= 5; $radek++ )
        {
            if ($radek == 1)
            {
                $den = "Po";
            }
            elseif ($radek == 2)
            {
                $den = "Út";
            }
            elseif ($radek == 3)
            {
                $den = "St";
            }
            elseif ($radek == 4)
            {
                $den = "Čt";
            }
            else
            {
                $den = "Pá";
            }
            echo "<tr>";
            echo "<th>"."$den"."</th>";
            for ($sloupec =1; $sloupec <= 5; $sloupec++)
            {
                echo "<td></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
    <style>
        body {
            padding: 10vh;
            margin: 0;
        }
        .tabulka {
            display: flex;
            justify-content: center;
        }
        table {
            border-collapse: collapse;
            border: 4px solid black;
        }
        table th {
            width: 7vh;
            border: 4px solid black;
            font-size: 2em;
        }
        table td {
            width: 14vh;
            height: 8vh;
            border: 4px solid black;
        }
    </style>
</body>
</html>