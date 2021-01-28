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
   
    
    <main>
        <?php
            $link = mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');
            if(mysqli_connect_errno()) {
                echo 'Ошибка в подключении ('.mysqli_connect_errno().'): '.mysqli_connect_error().'<br>';
                exit();
            } 
            
        ?>


        <div class="admin-form">
            <?php
                require 'admin.php';

                // require 'ssilka.php';

            ?>
        </div>
        

        <a href="user.php" style="color: black !important;">Пройти опрос без смс и регистрации!</a>

    </main>
        
    <!-- <form method="post" action="/">
        <input type="submit" value="Сгенерировать ссылку">
    </form> -->
    

</body>
</html>