<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tablica = [1,5,13,52,19,44];

        function liczbaElemetnow(){
            global $tablica;

            $liczba = count($tablica);

            return $liczba;
        }

        echo liczbaElemetnow();
    ?>
    <br><br>
    <?php
        $slowo = "<i> To zdanie mówi nam o tym że piszemy to w PHP </i>";

        echo $slowo;
        echo "<br>";

        $check = strpos($slowo,"PHP");

        if($check == true){
            echo "Zawiera słowo PHP";
        }else{
            echo "Nie zawiera słowa PHP";
        }
    ?>
    <br>
    <br>
    <?php
        $data = date("Y-m-d H:i:s");

        echo $data;
    ?>
        <br>
        <br>
    <?php
        $DataUr = "2025-06-10";

        $data = time();

        $d = strtotime($DataUr);

        $wynik = $data - $d;

        $w1 = floor($wynik/(60*60*24)) ;

        if($w1 < 0){
            echo $w1 * -1;
        }else{
            echo $w1;
        }
    ?>
    <br>
    <br>
    <?php
        $tekst = "Hej tutaj ja!
        miło mi was powitać,
        naprawde się cieszę
        elooo!!";

        echo $tekst;
        echo "<br>";

        echo nl2br($tekst);
    ?>
    <?php
        //pomin to zadanie
    
    ?>
</body>
</html>