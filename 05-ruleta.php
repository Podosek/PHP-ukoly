<?php
session_start();

if (array_key_exists("konto", $_SESSION) == false)
{
    $_SESSION["konto"] = "100";
}

$sazka = null;
$sudeLiche = null;
$chybaSazka = null;
$chybaSudaLicha = null;
$cislo = null;
$vysledek = null;
$barva = null;

//zpracovani tlacitka zatocit
if (array_key_exists("zatocit", $_POST))
{
    $sazka = $_POST ["sazka"];
    $sudeLiche = $_POST ["sudeLiche"];
    
    if (is_numeric($sazka) == false )
    {
        $chybaSazka = "Zadejte výši sázky";
    }
    elseif ($sazka <= 0)
    {
        $chybaSazka = "Neplatná sázka";
    }


    if ($sudeLiche == "")
    {
        $chybaSudaLicha = "Zvolte sudé nebo liché";
    }
    
    if (($chybaSazka == false && $chybaSudaLicha == false))
    {
        $cislo = rand(1, 36);
            if ($cislo % 2 == 0 && $sudeLiche == "sude")
        {
            $vysledek = "Výhra !!!";
            $_SESSION["konto"] = $_SESSION["konto"] + $sazka;
        }
        elseif ($cislo % 2 == 1 && $sudeLiche == "liche")
        {
            $vysledek = "Výhra !!!";
            $_SESSION["konto"] = $_SESSION["konto"] + $sazka;
        }
        else
        {
            $vysledek = "Prohra :-(";
            $_SESSION["konto"] = $_SESSION["konto"] - $sazka;
        }
    }

}

// var_dump($_POST);
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ruleta</h1>

    <?php
    if ($chybaSazka == false && $chybaSudaLicha == false)
    {
        echo "<h2>Padlo číslo: <span>$cislo</span> </h2>";
        if ($vysledek == "Prohra :-(")
        {
            $barva = "red";
        }
        elseif ($vysledek == "Výhra !!!")
        {
            $barva = "green";
        }
        echo "<h2 style='color:$barva'>$vysledek<h2>";
    }
    ?>
    <h2>Stav Konta: <?php echo $_SESSION["konto"] ?> Kč</h2>

    <form method="post">
        Sázka: <input type="number" name="sazka" value="<?php echo $sazka ?>">

        <?php
        echo $chybaSazka;
        ?>

        <br>

        Sudé/Liché : <select name="sudeLiche">
            <option value="">Vyberte</option>

            <option value="sude" 
            <?php if ($sudeLiche == "sude") {echo "selected";}?>
            >Sudé</option>
            
            <option value="liche" 
            <?php if ($sudeLiche == "liche") {echo "selected";}?>
            >Liché</option>
        </select>

        <?php
        echo $chybaSudaLicha;
        ?>

        <br>

        <button name="zatocit">Zatočit ruletou</button>
        <br>
    </form>

    <style>
        span{
            color: orange;
            font-size: 30px;
        }
    </style>
</body>
</html>