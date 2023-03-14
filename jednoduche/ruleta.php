<?php
session_start();

$cislo = null;
$sazka = null;
$SneboL = "";
$hra = false;

if (array_key_exists("stav", $_SESSION) == false)
{
    $_SESSION["stav"] = 100;
}

if (array_key_exists("sazka", $_POST))
{
    $sazka = $_POST["sazka"];
    $SneboL = $_POST["SneboL"];

    if (($sazka > 0) && ($SneboL != ""))
    {
        $cislo = rand(0,36);
        $hra = true;
    }
}

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruleta</title>
</head>
<body>
    <h1>Ruleta</h1>

    <?php
    if ($hra == true)
    {
        echo "<h2>Padlo číslo <span class=orange>$cislo</span></h2>";
        if ($cislo == 0)
        {
            echo "<h2>0 = 50% sázky</h2>";
            $_SESSION["stav"] -= $sazka / 2;
        }
        else if (($cislo % 2 == 1 && $SneboL == "liche") || ($cislo % 2 == 0 && $SneboL == "sude"))
        {
            echo "<h2 class=green>Výhra !!!</h2>";
            $_SESSION["stav"] += $sazka;
        }
        else
        {
            echo "<h2 class=red>Prohra :-(</h2>";
            $_SESSION["stav"] -= $sazka;
        }
    }

    echo "<h2>Stav konta: {$_SESSION["stav"]} Kč</h2>";

    ?> 

    <form method="post">
        Sázka: <input type="number" name="sazka" value= <?php echo $sazka; ?>>Kč <br>
        Sudé/Liché: <select name="SneboL">
            <option value="">Vyberte</option>
            <option value="sude" <?php if ($SneboL == "sude") {echo "selected";} ?>>Sudé</option>
            <option value="liche" <?php if ($SneboL == "liche") {echo "selected";} ?>>Liché</option>
            </select> <br>
        <button name="zatocit">Zatočit ruletou</button>
    </form>

<style>
    body .orange
    {
        color: orange;
        font-size: 30px;
    }
    body .red
    {
        color: red;
    }
    body .green
    {
        color: green;
    }
</style>
</body>
</html>
