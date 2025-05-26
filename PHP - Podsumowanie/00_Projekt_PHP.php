<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wydarzenia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Wydarzenia</h1>

    <table>
        <tr>
            <th>Tytuł</th>
            <th>Opis</th>
            <th>Data Wydarzenia</th>
            <th>Liczba dni do wydarzenia</th>
        </tr>
        
        <?php
            $conn = mysqli_connect('localhost','root','','inf03_projekt');

            $query = "SELECT tytul, opis, data_wydarzenia FROM `wydarzenia`";

            $wynik = mysqli_query($conn,$query);

            $i = 1;

            $n = 1;

            while($row = mysqli_fetch_array($wynik)){
                $data = time();

                $dataW = $row['data_wydarzenia'];

                $dataO = strtotime($dataW);

                $wynikD = $dataO - $data;

                $dataWyn = floor($wynikD/(60*60*24));

                if($dataWyn < 0){
                    echo "";
                }else{
                echo "<tr>";
                echo "<td>$row[tytul]</td>";
                echo "<td>$row[opis]</td>";
                echo "<td>$row[data_wydarzenia]</td>";
                echo "<td>$dataWyn</td>";
                echo "</tr>";
                $i++;
                }
                $n++;
            }
        ?>
    </table>
    <div class="form">
        <h2>Dodaj wydarzenie:</h2>
        <form action="" method="POST">
            <label>Tytuł: <input type="text" name="tytul"></label><br><br>
            <label>Opis: <textarea name="opis" style="width:172px; height:180px;"></textarea></label><br><br>
            <label>Data: <input type="date" name="date"></label><br><br>
            <button type="submit">Dodaj</button>
        </form>
    </div>
    <?php
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $tytul = $_POST['tytul'];
            $opis = $_POST['opis'];
            $data = $_POST['date'];

            $query2 = "INSERT INTO `wydarzenia`(tytul, opis, data_wydarzenia) VALUES ('$tytul','$opis','$data')";

            $wynik2 = mysqli_query($conn,$query2);

            if($wynik2 === true){
                echo"<script>window.location.href = window.location.href</script>";
            }
        }
    ?>
    <h1>
        <?php
            echo "Liczba nadchodzących wydarzeń: ".$i - 1;
        ?>
    </h1>
    <h1>
        <?php
            echo "Liczba porzednich wydarzeń: ".($n-1-($i-1));
        ?>
    </h1>
</body>
</html>