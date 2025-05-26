<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sql =  mysqli_connect('localhost','root','','egz_auta');

        if($sql == false){
            echo "Nie połączono z bazą danych!";
        }else{
            echo "Połączono z bazą danych!";
        }
    ?>

    <br><br>

    <table border="solid 1px black">
        <tr>
            <th>Numer</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Rocznik</th>
        </tr>
        <?php
            $query = "SELECT marka, model, rocznik FROM `samochody`";

            $wynik = mysqli_query($sql,$query);

            $i = 1;

            while($row = mysqli_fetch_array($wynik)){
                echo"<tr>";
                echo"<td>$i</td>";
                echo"<td>$row[marka]</td>";
                echo"<td>$row[model]</td>";
                echo"<td>$row[rocznik]</td>";
                echo"</tr>";
                $i++;
            }
        ?>
    </table>
    <br><br>
    <form action="" method="POST">
        <input type="text" placeholder="marka" name="marka"><br><br>
        <input type="text" placeholder="model" name="model"><br><br>
        <input type="text" placeholder="rocznik" name="rocznik"><br><br>
        <button type="submit">Dodaj</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $marka = $_POST['marka'];
            $model = $_POST['model'];
            $rocznik = $_POST['rocznik'];

            $query1 = "INSERT INTO `samochody` (`id`, `klasa_id`, `marka`, `model`, `rocznik`) VALUES (NULL, '2', '$marka', '$model', '$rocznik')";

            $wynik1 = mysqli_query($sql, $query1);

            if($wynik1 === true){
                echo"Auto dodane!";
                echo"<script>window.location.href = window.location.href</script>";
            }else{
                echo"Auto nie dodane!";
            }
        }
    ?>
    <!-- nie wiem jak zrobic 4 -->
    <?php
        $ile = mysqli_num_rows($wynik);

        echo "Liczba aut w kolekcji wynosi: ".$ile;;
    ?>
</body>
</html>