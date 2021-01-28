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
<form method="post" action="add.php/?add" class="mt-5">
    
    <label for="nazv">Название для экспертной сессии</label><input name="nazv" type="text" placeholder="Название сесии">
    <input type="submit" name="button" class="btn btn-success" value="Добавить сессию">

</form>
</div>

<?
    if(isset($_POST['button']) && $_POST['button'] == 'Добавить сессию') {
      $link = mysqli_connect('std-mysql', 'std_938', 'qazwsxedc', 'std_938');

        if(mysqli_connect_errno()) {
            echo 'Ошибка подключения к БД: ' . mysqli_connect_error();
        }

        $query =                "CREATE TABLE ".$_POST['nazv']."(
                                id INT NOT NULL PRIMARY KEY,
                                Question text NOT NULL,
                                Answer text NOT NULL
                                )";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        if($result) {
            echo 'Сессия создана успешно!';
        }
    }
    $tableName = $_POST['nazv'];
    $_SESSION['tableName'] = $_POST['nazv'];

    $sql = "CREATE TABLE ".$tableName.';';

    

?>
</body>
</html>