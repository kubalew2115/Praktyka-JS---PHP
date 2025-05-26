<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $imie = "Kuba";

        echo $imie;
    ?>  
    <?php
        $liczba = 10;

        $wynik = gettype($liczba);

        echo $wynik;
    ?>
    <?php
        $tekst = "Dzień dobry!";

        $ilosc = strlen($tekst);

        echo $ilosc;
    ?>
    <?php
        $tablica = [18,9,7];

        $t1 = $tablica[0];
        echo $t1;

        echo " ";
        
        $t2 = $tablica[2];
        echo $t2;
    ?>
</body>
</html>