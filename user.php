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
        * {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
            list-style-type: none;
        }
        header a {
            color: #fff;
            text-decoration: none;
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

    <main style="display:flex;
                 flex-direction: column;
                 justify-content:center;
                 align-items:center;
                "
    
    
    >
        <h3>Форма ответов</h3>
        <form method="post" action="" style="border:1px solid black;padding: 20px; display: flex; flex-direction: column; width: 300px;">
            
            <input type="number" name="num"  placeholder="Ответ в виде цифр" require style="margin-top: 10px;">
            <input type="number" name="plusNum" placeholder="Ответ в виде положит. цифр" pattern="[0-9]" require style="margin-top: 10px;">
            <input type="text" name="strokaAnswer" placeholder="Ответ до 30 символов" require pattern="[A-Za-zА-Яа-яЁё]{1,30}" style="margin-top: 10px;">
            <input type="text" name="textAnswer" placeholder="Ответ до 255 символов" require pattern="[A-Za-zА-Яа-яЁё]{1,255}" style="margin-top: 10px;">
            <select name="onceAnsw" id="" style="margin-top: 10px;">
                <option value="1">Да</option>
                <option value="2">Нет</option>
                <option value="3">Не знаю</option>
            </select>
            <select name="mulAnsw" id="" multiple style="margin-top: 20px;">
                <option value="1">Россия</option>
                <option value="2">Беларусь</option>
                <option value="3">США</option>
            </select>
            <input type="submit" name="button" value="Ответить">
        </form>
    </main>
    

    <?php
        if (isset($_POST['button']) && $_POST['button'] == 'Ответить') {
          // $link = mysqli_connect('localhost', 'root', '', 'expert');
           $link = mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');
            $_SESSION['link'] = mysqli_connect('localhost', 'root', '', 'expert');

                if(mysqli_connect_errno()) {
                    echo 'Ошибка подключения к БД: ' . mysqli_connect_error();
                }

                $res = 'Нет';

                $query = "INSERT INTO answers VALUES (999, ".$nuresres."),(9, ".$nresres."),(8, ".$sresres."),(5, ".$tresres."),(666, ".$oresres."),(333, ".$mresres.");"
                ;
                

                if ($_POST['num'] == 7) {
                    $nuresres = 'Правильно';
                    $numres = "UPDATE answers SET result='Правильно' WHERE id = 999;";
                    $numresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                } else {
                    $nuresres = 'Неправильно';
                    $numres = "UPDATE answers SET result='Неправильно' WHERE id = 999;";
                    $numresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                }
                if($_POST['number'] == 18) {
                    $nresres = 'Правильно';
                    $numberres = "UPDATE answers SET result='Правильно' WHERE id = 9;";
                    $numberresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                } else {
                    $nresres = 'Неправильно';
                    $numberres = "UPDATE answers SET result='Неправильно' WHERE id = 9;";
                    $numberresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                }
                if($_POST['strokaAnswer'] == 'Четыре') {
                    $sresres = 'Правильно';
                    $srtres = "UPDATE answers SET result='Правильно' WHERE id = 8;";
                    $strresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                } else {
                    $sresres = 'Неправильно';
                    $strres = "UPDATE answers SET result='Неправильно' WHERE id = 8;";
                    $strresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                }
                if($_POST['textAnswer'] == 'Да') {
                    $tresres = 'Правильно';
                    $txtres = "UPDATE answers SET result='Правильно' WHERE id = 5;";
                    $txtresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                } else {
                    $tresres = 'Неправильно';
                    $txtres = "UPDATE answers SET result='Неправильно' WHERE id = 5;";
                    $txtresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                }
                if($_POST['onceAnsw'] == 1) {
                    $oresres = 'Правильно';
                    $onceres = "UPDATE answers SET result='Правильно' WHERE id = 666;";
                    $onceresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                } else {
                    $oresres = 'Неправильно';
                    $txtres = "UPDATE answers SET result='Неправильно' WHERE id = 666;";
                    $txtresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                }
                if($_POST['mulAnsw'] == 'Да') {
                    $mulres = "UPDATE answers SET result='Правильно' WHERE id = 333;";
                    $mresres = 'Правильно';
                    $mulresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                } else {
                    $mresres = 'Неравильно';

                    $mulres = "UPDATE answers SET result='Неправильно' WHERE id = 333;";
                    $mulresult = mysqli_query($link, $numres) or die("Ошибка " . mysqli_error($link));
                }


                
                
                // if ($_POST['onceAnsw'] == 1) {
                //     $query .= 'UPDATE answers SET Баллы = "45" WHERE id="666;"';
                // }
                // if ($_POST['mulAnsw'] == 1 && $_POST['mulAnsw'] == 2) {
                //     $query .= 'UPDATE answers SET Баллы = "55" WHERE id="333;"';
                // } 
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


                if($result) {
                    echo 'Ответы были зачтены!!';
                }
        }
    
    ?>

</body>
</html>

