<?php
$velikost = null;
$chyba = null;
if (array_key_exists("odeslat", $_GET))
{
    $velikost = $_GET["velikost"];

    if ($velikost == "")
    {
        $chyba = "Musí být vyplněno";
    }
    else if (is_numeric($velikost) == false)
    {
        $chyba = "Musí být číslo";
    }
    else if ($velikost <= 0)
    {
        $chyba = "Musí být kladné číslo";
    }
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Násobilka</title>
</head>
<body>
    <form method="get">
        Velikost: <input type="text" name="velikost" value="<?php echo $velikost; ?>">
        <?php
        echo $chyba;
        ?>
        <button name="odeslat">Odeslat</button>
    </form>

    <a href="?velikost=10&odeslat=">10x10</a>
    <a href="?velikost=20&odeslat=">20x20</a>
    <a href="?velikost=30&odeslat=">30x30</a>

    <form method="get">
        <input type="hidden" name="odeslat" value="">
        <button name="velikost" value="10">10x10</button>
        <button name="velikost" value="20">>20x20</button>
        <button name="velikost" value="30">>30x30</button>
    </form>

    <?php
    if ($velikost != null && $chyba == null)
    {
        echo "<table border=1>";
        // horizontalni hlavicka tabulky
        echo "<tr>";
        echo "<th></th>";
        for ($sloupec = 1; $sloupec <= $velikost; $sloupec++)
        {
            echo "<th>$sloupec</th>";
        }
        echo "</tr>";

        // obsah tabulky
        for ($radek = 1; $radek <= $velikost; $radek++)
        {
            echo "<tr>";
            // vertikalni hlavicka tabulky
            echo "<th>$radek</th>";

            for ($sloupec = 1; $sloupec <= $velikost; $sloupec++)
            {
                $soucin = $radek * $sloupec;
                echo "<td>$soucin</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

    <style>
        table {
            border-collapse: collapse;
        }
        table th, table td {
            width: 23px;
            height: 23px;
            text-align: center;
        }
        table th {
            background-color: greenyellow;
        }
    </style>
</body>
</html>
