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
    for ($radek = 1; $radek <=20;$radek++)
    {
        $cisloA = rand(1,10);
        $cisloB = rand(1,10);
        $operator = rand(1,2);
        $soucet = $cisloA + $cisloB;
        $rozdil = $cisloA - $cisloB;
        if ($operator == 1 && $soucet <= 10)
        {
            $operator = "+";
            echo "<tr> <td>$cisloA $operator $cisloB = </td> </tr>";
        }
        elseif ($operator == 2 && $rozdil <= 10 && $cisloA >= $cisloB)
        {
            $operator = "-";
            echo "<tr> <td>$cisloA $operator $cisloB = </td> </tr>";
        }
        else
        {
            $radek--;
        }
    }
    echo "</table>"
    ?>
</body>
</html>