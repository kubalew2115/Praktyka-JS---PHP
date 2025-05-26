<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $liczba = 0;

        if(isset($_COOKIE['liczbaO'])){
            $liczba = $_COOKIE['liczbaO'] + 1;
        }else{
            $liczba = 1;
        }
        
        setcookie('liczbaO',$liczba,time()+3600);

        echo"To twoja $liczba wizyta!";
    ?>
</body>
</html>