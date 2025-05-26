<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function powitaj(){
            $imie = "Jakub";
            return $imie;
        }
        $wynik = "Witaj"." ".powitaj();
        echo $wynik;
    ?>
    <br>
    <?php
        function suma($a,$b){
            $suma = $a + $b;

            return $suma;
        }
        echo suma(4,5);
    ?>
    <br>
    <?php
        function licznik(){
            static $liczba = 1;
            echo "Funckcja została użyta ".$liczba." razy"."<br>";
            $liczba++;
        }
        licznik();
        licznik();
        licznik();
    ?>
    <?php
        $cyfra = 1;
        echo "Cyfra przed funkjcą jest równa: ".$cyfra;
        function dodajJeden(){
            global $cyfra;
            return $cyfra + 1;
        }
        echo "<br> Cyfra po funkcji jest równa: ".dodajJeden();
    ?>
    <br>
    <?php
        function info($imie, $wiek = 18){
            return "Twoje imię to: ".$imie." I wiek: ".$wiek;
        }
        echo info("Kuba");
        echo "<br>";
        echo info("Amelia", 16);
    ?>
</body>
</html>