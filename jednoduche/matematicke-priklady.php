<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematické příklady</title>
</head>
<body>
    <?php
        echo "<table border=1>";
        $spravnyPriklad = 1;
        while ($spravnyPriklad <=20)
        {
            $cislo1 = rand(0,10);
            $cislo2 = rand(0,10);
            $generatorUkonu = rand(1,2);
                if ($generatorUkonu == 1)
                {
                    $ukon = '-';
                    $vysledek = $cislo1 - $cislo2;
                }
                else
                {
                    $ukon = '+';
                    $vysledek = $cislo1 + $cislo2;
                }
            if ($vysledek <= 10 && $vysledek >= 0)
            {
                echo "<tr><td>$cislo1 $ukon $cislo2 = </td></tr>";
                $spravnyPriklad++;
            }
        }
        echo "</table>";
    ?>
</body>
</html>
