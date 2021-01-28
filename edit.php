<?php
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
    <form action="edit.php/?r=edit" method="post" class="w-50 p-5 mt-5 border border-dark rounded">
        <fieldset><legend>Редактирование сессии</legend>
            <input type="text" placeholder="Название существующей сессии" name="sessionName" class="form-control w-50 m-1">
            <input type="number" placeholder="Введите id" name="id" class="form-control w-50 m-1">
            <input type="text" placeholder="Введите вопрос" name="question" class="form-control w-50  m-1">
            <input type="text" placeholder="Введите ответ" name="answer" class="form-control w-50 m-1">
            <input type="submit" name="button" value="Ввести значения" class="btn btn-success">
        </fieldset>
        
    </form>

    <form action="edit.php/?r=delete" method="post" class="w-50 p-5 mt-5 border border-dark rounded" >
        <fieldset><legend>Удалить сессию</legend>
            <input type="text" placeholder="Наименование сессии" name="delName" class="form-control w-50">
            <input type="submit" value="Удалить сессию" name="button" style="margin-top: 65px;" class="btn btn-danger" >
        </fieldset>
    </form>

    <form action="edit.php/?r=answer" method="post" class="w-50 p-5 mt-5 border border-dark rounded" >
        <fieldset><legend>Удалить вариант ответа</legend>
            <input type="text" placeholder="Наименование сессии" name="delName" class="form-control w-50 m-1">
            <input type="text" placeholder="Индентификатор вопроса" name="Qid" class="form-control w-50 m-1">
            <input type="submit" value="Удалить вариант ответа" name="button" style="margin-top: 65px;" class="btn btn-danger">
        </fieldset>
    </form>

    <form action="edit.php/?r=question" method="post" class="w-50 p-5 mt-5 border border-dark rounded">
        <fieldset><legend>Удалить вопрос</legend>
            <input type="text" placeholder="Наименование сессии" name="delName" class="form-control w-50 m-1">
            <input type="text" placeholder="Индентификатор вопроса" name="Qid" class="form-control w-50 m-1">
            <input type="submit" value="Удалить вопрос" name="button" style="margin-top: 65px;" class="btn btn-danger">
        </fieldset>
    </form>
</div>

<?php

if(isset($_POST['button']) && $_POST['button'] == 'Ввести значения') {
    $link = mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');
    $_SESSION['link'] =  mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');

        if(mysqli_connect_errno()) {
            echo 'Ошибка подключения к БД: ' . mysqli_connect_error();
        }

        $query =                "INSERT INTO ".$_POST['sessionName']." VALUES(
                                ".$_POST['id'].",
                                '".$_POST['question']."',
                                '".$_POST['answer']."'
                                )";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        if($result) {
            echo 'Данные были успешно введены!';
        }
} 
else if (isset($_POST['button']) && $_POST['button'] == 'Удалить сессию') {
    $_SESSION['link'] = mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');
    if(mysqli_connect_errno()) {
        echo 'Ошибка подключения к БД: ' . mysqli_connect_error();
    }

    $delQuery = "DROP TABLE ".$_POST['delName'].";";
    $result = mysqli_query($_SESSION['link'], $delQuery) or die("Ошибка " . mysqli_error($_SESSION['link']));

    if($result) {
        echo 'Сессия была удалена!';
    }
}

else if (isset($_POST['button']) && $_POST['button'] == 'Удалить вариант ответа') {
    $_SESSION['link'] =  mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');
    if(mysqli_connect_errno()) {
        echo 'Ошибка подключения к БД: ' . mysqli_connect_error();
    }

    $delQuery = "UPDATE ".$_POST['delName']." SET Answer='' WHERE id=".$_POST['Qid'].";";
    $result = mysqli_query($_SESSION['link'], $delQuery) or die("Ошибка " . mysqli_error($_SESSION['link']));

    if($result) {
        echo 'Ответ был удалён!';
    }
}

else if (isset($_POST['button']) && $_POST['button'] == 'Удалить вопрос') {
    $_SESSION['link'] =  mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');
    if(mysqli_connect_errno()) {
        echo 'Ошибка подключения к БД: ' . mysqli_connect_error();
    }

    $delQuery = "DELETE FROM ".$_POST['delName']." WHERE id=".$_POST['Qid'].";";
    $result = mysqli_query($_SESSION['link'], $delQuery) or die("Ошибка " . mysqli_error($_SESSION['link']));

    if($result) {
        echo 'Ответ был удалён!';
    }
}

?>