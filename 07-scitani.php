<?php
$cisloA = null;
$cisloB = null;
$vysledek = null;
$chyba = null;
if (array_key_exists("secist", $_GET))
{
    $cisloA = $_GET ["cisloA"];
    $cisloB = $_GET ["cisloB"];

    if ($cisloA == "" || $cisloB == "")
    {
        $chyba = "Nezadané čísla";
    }
    elseif (is_numeric($cisloA) == false || is_numeric($cisloB) == false)
    {
        $chyba = "Zadejte pouze čísla";
    }
    else
    {
        $vysledek = $cisloA + $cisloB;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <input type="text" name="cisloA" value="<?php echo $cisloA ?>">
        +
        <input type="text" name="cisloB" value="<?php echo $cisloB ?>">
        =
        <?php
        echo $vysledek;
        ?>
        <button name="secist">Sečíst</button>
        <?php echo $chyba;?>
    </form>
</body>
</html>