<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
        $nazwa = "PHP jest super!";

        echo $nazwa;
    ?>
    <?php
        $zmienna = 5/3;

        $wynik = gettype($zmienna);

        echo $wynik;
    ?>
    <?php
        function mnozenie($a,$b){
            $odp = $a*$b;

            return $odp;
        }
        echo mnozenie(5,6);
    ?>
    <form action="" method="POST">
        <select name="kolor">
            <option value="1">Czerwony</option>
            <option value="2">Niebieski</option>
            <option value="3">Zielony</option>
            <option value="4">Czarny</option>
        </select>
        <button type="submit">Sprawdź</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $kolory = $_POST["kolor"];

            $kolor = "";

            if($kolory == 1){
                $kolor = "Czerwony";
            }else if($kolory == 2){
                $kolor = "Niebieski";
            }else if($kolory == 3){
                $kolor = "Zielony";
            }else if($kolory == 4){
                $kolor = "Czarny";
            }

            echo $kolor;

        }
    ?>

</body>
</html>