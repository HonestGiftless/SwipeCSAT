<?php

require_once 'connection/database.php';

$error = '';
$account_finded = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = htmlspecialchars($_POST["login"]);
    $password = htmlspecialchars($_POST["password"]);

    $sql = "SELECT * FROM users WHERE login = '$login' OR phone = '$login'";
    $result = $connect->query($sql);

    var_dump($result);

    if ($result->num_rows >= 1) {
        $account_finded = true;
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["id"] = $row["id"];
            header("Location: main.php");
            exit;
        } else {
            $error = "Неверное имя пользователя или пароль";
        }
    } else {
        $error = "Мы не смогли найти такой аккаунт";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles/login.css">

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="logo_container">
        <img src="img/logo.svg" alt="Logotype" class="image_logo">
    </div>
    <div class="container">
        <h1>Авторизация</h1>
        <form action="" method="post" class="auth_form" id="form">
            <div class="form_field">
                <label for="login">Введите логин или номер телефона</label>
                <input type="text" name="login" id="login_input" class="field" placeholder="Логин">
            </div>
            <div class="form_field">
                <label for="password">Введите пароль</label>
                <input type="password" name="password" id="password_input" class="field" placeholder="Пароль">
            </div>
            <input type="submit" value="Вход" id="authorization_btn">
        </form>
        <?php
            if (!$account_finded) {
                echo "<p>$error</p>";
            }
        ?>
        <p class="question">Ещё нет аккаунта?<br><a href="registration.php" class="enter_link">Регистрация</a></p>
    </div>
    <div class="empty_container"></div>
</body>
</html>