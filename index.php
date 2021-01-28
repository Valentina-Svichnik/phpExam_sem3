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
    <!-- </head> -->
    <!-- <body> -->
    <!-- <style>
                
        main {
            display: flex;
            flex-direction: column;
            /* background-color: #d1cebd; */
            justify-content: center;
            align-items: center;
            max-width: 100%;
            min-height: 100vh;
            font-size: 1.8rem;
        }

        * {
            margin: 0;
            padding: 0;
        }


        li {
            list-style: none;
            list-style-type: none;
        }

        header {
            display: flex;
            justify-content: space-evenly;
            width: 100%;
            height: 9rem;
            background-color: #424874;
            font-size: 1.7rem;
            color: #fff;
            z-index: 1;
        }
        header a {
            color: #fff;
            text-decoration: none;
        }

        header .header__menu {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-around;
            list-style-type: none;
        }

        .header__menu li {
            margin-right: 3rem;
        }

        header h1 {
            margin-top: 2rem;
        }

        #logo {
            margin-left: 5rem;
            justify-self: center;
            /* position: absolute; */
            padding: 1rem 3rem;
            width: 7rem;
            height: 7rem;
            cursor: pointer;
        }

        .admin-form {
            display: flex;
            flex-direction: column;
        }

    </style> -->
</head>
<body>
    

    <!-- <header>
        <img src="img/лого.jpg" alt="" id="logo">
        <ul class="header__menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Информация</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
        
    </header> -->
    
    <main>
        <?php
             //$link = mysqli_connect('localhost', 'root', '', 'expert');
            $link = mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');
            if(mysqli_connect_errno()) {
                echo 'Ошибка в подключении ('.mysqli_connect_errno().'): '.mysqli_connect_error().'<br>';
                exit();
            } 
            // else {
            //     echo 'БД подключена!<br>';
            // }
        ?>


        <div class="admin-form">
            <?php
                require 'admin.php';

                // require 'ssilka.php';

            ?>
        </div>
        

        <a href="user.php" style="color: black !important;">Форма</a>

    </main>
        
    <!-- <form method="post" action="/">
        <input type="submit" value="Сгенерировать ссылку">
    </form> -->
    

</body>
</html>