<?
    session_start();



?>
<!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Авторизация</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      
        <!-- Подключаем Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>

    <div class="container">
        <a href="add.php" class="btn btn-info m-3">Добавить экспертную сессию</a> <br>
        <a href="edit.php" class="btn btn-info m-3">Редактировать экспертную сессию</a> <br>
    

<?php
        echo '<a href="?s=yes" id="ssil" class="btn btn-info m-3">Сгенерировать ссылку</a>';
     // $link = mysqli_connect('localhost', 'root', '', 'expert');
       $link = mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');

        $_SESSION['randomZnach'] = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       // $_SESSION['newSilka'] = str_shuffle($_SESSION['randomZnach'], 12);
       $_SESSION['newSilka'] = str_shuffle($_SESSION['randomZnach']);


        if (!isset($_GET['s'])) {
            $_SESSION['ssilka'] = rand(10000000, 90000000);

            echo '<a style="color:#000" href="http://examphp.std-938.ist.mospolytech.ru/user.php/'.$_SESSION['newSilka'].'>Ссылка</a>';

            $query = "INSERT INTO urls VALUES (".$_SESSION['newSilka'].")";

            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

            if($result) {
                echo 'Данные были успешно введены!';
            }
        }

        echo '</div>';
?>

</body>
</html>