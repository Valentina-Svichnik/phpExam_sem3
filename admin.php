<?php

    session_start();
    $pass = '12345';
    $err = '';

?>

<div class="container d-flex justify-content-center mt-5">
    <form name="auth" method="post" action="inter.php" class="w-50 p-5 mt-5 border border-dark rounded">
    <div class="form-group">
    <h1>Авторизация</h1>
    <label for="login" class="col-sm-2 col-form-label">Логин</label>
    <div class="col-sm-10 mb-3">
        <input class="form-control" type="text" name="login" id="login" placeholder="Логин" require></div>
    <label for="password" class="col-sm-2 col-form-label">Пароль</label>
    <div class="col-sm-10">
        <input class="form-control" type="password" name="password" id="password" placeholder="Пароль" require>
    </div>
    <input type="submit" name="sub" class="btn btn-primary m-3" value="Войти">
    </div></form></div>


<!-- 
<div class="admin-form" style="display: flex; flex-direction: column;">
    <form action="inter.php" method="post">
        <label for="login">Логин: </label> <input name="login" id="login" type="text" require>
        <label for="pass">Пароль: </label><input name="pass" id="pass" type="password" require>
        <input type="submit" name="sub" value="Администрирование">

    </form>
</div> -->
    

<?php

    if (isset($_POST['button']) && $_POST['button'] == 'Администрирование') {
        if ($_POST['pass'] == 12345 && $_POST['login'] == 'admin') {
            header("Location: inter.php");
        } else {
            echo 'Вы ввели непрвильный пароль!';
        }



    }

?>