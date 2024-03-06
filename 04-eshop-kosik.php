<?php
session_start();

if (array_key_exists("kosik", $_SESSION) == false)
{
    $_SESSION["kosik"] = [];
}

$produkty = [
    "RI038b3" => [
        "nazev" => "iPhone 13 Pro 128GB grafitově šedá",
        "cena" => 28990,
    ],
    "GPX1068b1" => [
        "nazev" => "Google Pixel 6 Pro 5G 12GB/128GB černá",
        "cena" => 26990,
    ],
    "SAMO0223b2" => [
        "nazev" => "Samsung Galaxy A52s 5G černá",
        "cena" => 11499,
    ],
];

//zpracovani tlacitka pridat
if (array_key_exists("pridat", $_POST))
{
    $kodProduktu = $_POST ["pridat"];
    if (array_key_exists($kodProduktu, $_SESSION["kosik"]) == false)
    {
        $_SESSION["kosik"][$kodProduktu] = 1;
    }
    else
    {
        $_SESSION["kosik"][$kodProduktu]++;
    }
    header("Location: ?");
}

//zpracovani tlacitka odebrat
if (array_key_exists("odebrat", $_POST))
{
    $kodProduktu = $_POST ["odebrat"];
    $_SESSION["kosik"][$kodProduktu]--;
    if ($_SESSION["kosik"][$kodProduktu] == 0)
    {
        unset ($_SESSION["kosik"][$kodProduktu]);
    }
    header("Location: ?");
}

//zpracovani tlacitka vysypat
if (array_key_exists("vysypat", $_POST))
{
    $_SESSION["kosik"] = [];
    header("Location: ?");
}

function cenaProduktu ($cena)
{
    return number_format($cena, 0, "," , " ")." Kč";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>Nabídka produktů</h1>
    <?php
    // var_dump($_POST);

    echo "<table border=1>";
    echo "<tr> <th>Název</th> <th>Cena</th> <th></th> </tr>";
    foreach ($produkty as $kodProduktu => $infoOProduktu )
    {
        echo "<tr>
            <td>{$infoOProduktu["nazev"]}</td>
            <td>".cenaProduktu ($infoOProduktu["cena"])."</td>
            <td>
                <form method='post'>
                <button name='pridat' value='$kodProduktu'><i class='fa-solid fa-basket-shopping'></i></button>
                </form>
            </td>
        </tr>";
    }
    echo "</table>";
    ?>

    <h1>Obsah košíku</h1>
    <?php
    if (count($_SESSION ["kosik"]) > 0)
    {
        echo "<table border=1>";
        $celkovaCena = 0;
        foreach ($_SESSION ["kosik"] as $kodProduktu => $mnozstvi)
        {
            echo "<tr>
                <td>$mnozstvi x {$produkty [$kodProduktu]["nazev"]}</td>
                <td>
                <form method='post'>
                <button name='odebrat' value='$kodProduktu'><i class='fa-solid fa-trash-can'></i></button>
                </form>
                </td>
            </tr>";
            $cenaProduktu = $produkty[$kodProduktu]["cena"];
            $celkovaCena += $cenaProduktu * $mnozstvi;
        }
        echo "</table>";

        echo "<h2>Celková cena: " .cenaProduktu($celkovaCena)."</h2>";

        echo "<form method='post'>
            <button name='vysypat'>Vysypat</button>
        </form>";
    }
    else
    {
        echo "Košík je prázdný";
    }
    ?>
</body>
</html>