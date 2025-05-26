<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="imie" placeholder="imię">
        <input type="text" name="nazwisko" placeholder="nazwisko">
        <button type="submit" name="button">Wyślij</button>
    </form><br>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === "POST"){
            $imie = $_POST["imie"];
            $nazwisko = $_POST["nazwisko"];

            $odp = "Witaj, ".$imie." ".$nazwisko;

            if($imie != "" && $nazwisko !=""){
                echo $odp;
            }
        }
    ?>
    <br><br>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="haslo" placeholder="haslo">
        <button type="submit">Wyślij</button>
    </form><br>
    <?php
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];

            if($login != "" && $haslo != ""){
                echo "Podałeś wszytskie dane!";
            }else if($haslo !=""){
                echo "Użytkownik podał samo hasło, podaj login";
            }else if($login != "" ){
                echo "Użytkownik podał sam login, podaj hasło" ;
            }else{
                echo "Podaj hasło i login";
            }
        }
    ?>
    <br><br>
    <form method="POST" action="">
        <input type="number" name="wiek" placeholder="wiek">
        <button type="submit">Sprawdź</button>
    </form>
    <br>
    <?php
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $wiek = $_POST["wiek"];

            if($wiek <= 18){
                echo "Jesteś nie pełnoletni";
            }else{
                echo "Jesteś pełnoletni";
            }
        }
    ?>
    <br><br>
    <form method="GET" action="">
        <input type="text" name="miasto" placeholder="Podaj Miasto">
        <button type="submit">Wyślij</button>  
    </form>
    <br>
    <?php
        if (isset($_GET["miasto"])) {
            $miasto = $_GET["miasto"];
            echo "Wybrałeś miasto: ".$miasto;
        }
    ?><br><br>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="mail">
        <button type="submit" name="btn">Wyślij</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === "POST"){
            $email = $_POST["email"];

            $emailC = strpos($email,"@");

            if($email !="" && $emailC == true){
                echo "Podano dobrego maila!";
            }else{
                echo "Podano złego maila (puste/brak @)";
            }
        }
    ?><br><br>
    <form action="" method="POST">
        <textarea name="textarea" style="width:200px; height: 220px;"></textarea><br>
        <button name="btnn" style="width: 205px;">Wyślij</button>
    </form>
    <br>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === "POST"){
            $textarea = $_POST["textarea"];

            echo nl2br($textarea);
        }
    
    ?>
</body>
</html>