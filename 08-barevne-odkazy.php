<?php
$barva = null;
$barvaPozadi = "white";
if (array_key_exists("barva", $_GET))
{
    $barva = $_GET ["barva"];
    if ($barva == "zelena")
    {
        $barvaPozadi = "green";
    }

    if ($barva == "cervena")
    {
        $barvaPozadi = "red";
    }

    if ($barva == "modra")
    {
        $barvaPozadi = "blue";
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
    <form>
        <a href="?barva=zelena">Zelená</a>
        <a href="?barva=cervena">Červená</a>
        <a href="?barva=modra">Modrá</a>
    </form>
    <?php
    echo "<div style='height: 200px; background-color: $barvaPozadi'></div>"
    ?>
</body>
</html>