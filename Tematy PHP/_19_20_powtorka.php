<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="imie" name="imie">
        <input type="text" placeholder="nazwisko" name="nazwisko">
        <button type="submit">Wyślij</button>
    </form>
    <br>
    <?php
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $imie = $_POST["imie"];
            $nazwisko = $_POST["nazwisko"];

            if($imie != "" && $nazwisko != ""){
                echo "Twoje imię i nazwisko to: ".$imie." ".$nazwisko;
            }else{
                echo" ";
            }
        }
    ?>
    <form>
        <input type="text" placeholder="imie" id="imie">
        <input type="text" placeholder="nazwisko" id="nazwisko">
        <button type="button" id="button">Wyślij</button>
    </form>
    <p id="odp"></p>
    <script>
        let imie = document.getElementById("imie");
        let nazwisko = document.getElementById("nazwisko");

        let button = document.getElementById("button");
        

        button.addEventListener("click", function(){
            let imieW = imie.value;
            let nazwiskoW = nazwisko.value;

            if(imieW != "" && nazwiskoW != ""){
                document.getElementById("odp").innerHTML = ("Twoje imię i nazwisko to: " + imieW + " " + nazwiskoW)
            }else{
                document.getElementById("odp").innerHTML = (" ")
            }

        })
    </script>
    <form action="" method="POST">
        <p>Sprawdź ile zostało dni do twoich urodzin!</p>
        <label>Podaj datę urodzin: <input type="date" min="2025-01-01" max="2025-12-31" name="dataUr"></label>
        <button type="submit">Sprawdź</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $dataUr = $_POST["dataUr"];

            $data = time();

            $dataU = strtotime($dataUr);

            $dataW = $dataU - $data;

            $dataO = floor($dataW/(60*60*24));

            $dataU =  365 - $dataO * -1;

            if($dataO < 0){
                echo $dataU;
            }else{
                echo $dataO;
            }
        }
    ?>
</body>
</html>