<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dnyVTydnu = ["PO","ÚT","ST","ČT","PÁ","SO","NE",];


    if(isset($_GET["month"]) && isset($_GET["year"]))
    {
        $aktualniRok = $_GET["year"];
        $aktualniMesic = $_GET["month"];
    }
    else
    {
        $aktualniRok = date("Y");
        $aktualniMesic = date("n");
    }
    
    $pocetDnuVMesici = cal_days_in_month(CAL_GREGORIAN, $aktualniMesic, $aktualniRok);

    $prvniDenVMesici = date("N" , mktime(0,0,0,$aktualniMesic,1,$aktualniRok));

    $nazevMesice = date("F" , mktime(0,0,0,$aktualniMesic,1,0));

    echo "<h1>$nazevMesice $aktualniRok</h1>";

    echo "<a href='?month=" . ($aktualniMesic == 1 ? 12 : $aktualniMesic - 1) . "&year=" . ($aktualniMesic == 1 ? $aktualniRok - 1 : $aktualniRok) . "'>Předchozí měsíc</a>";

    echo "<br>";
    
    echo "<a href='?month=" . ($aktualniMesic == 12 ? 1 : $aktualniMesic + 1) . "&year=" . ($aktualniMesic == 12 ? $aktualniRok + 1 : $aktualniRok) . "'>Následující měsíc</a>";

    echo "<table border=1>";
    echo "<tr>";
    foreach ($dnyVTydnu as $dny)
    {
        echo "<th>$dny</th>";
    }
    echo "</tr>";

    $pocitadloDnu = 1;
    echo "<tr>";

    for ($i = 1; $i < $prvniDenVMesici; $i++)
    {
        echo "<td></td>";
        $pocitadloDnu++;
    }

    for ($den = 1; $den <=$pocetDnuVMesici; $den++)
    {
        echo "<td>$den</td>";

        if ($pocitadloDnu%7 == 0)
        {
            echo "</tr><tr>";
        }

        $pocitadloDnu++;
    }

    while ($pocitadloDnu%7 !=1)
    {
        echo "<td></td>";
        $pocitadloDnu++;
    }

    echo "</tr>";
    echo "</table>";

    ?>
</body>
</html>