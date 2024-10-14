<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="styles/registration.css">

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
        <h1>Регистрация</h1>
        <form action="#" method="post" class="reg_form" id="form">
            <div class="form_field">
                <label for="name_input">Введите имя</label>
                <input type="text" name="name" id="name_input" class="field" id="name" placeholder="Имя..." required>
            </div>
            <div class="form_field">
                <label for="login_input">Введите логин</label>
                <input type="text" name="login" id="login_input" class="field" id="login" placeholder="Логин..." required>
            </div>
            <div class="form_field">
                <label for="mail_input">Введите email</label>
                <input type="email" name="mail" id="mail_input" class="field" id="email" placeholder="nick@domen.reg" required>
            </div>
            <div class="form_field">
                <label for="password_input">Введите пароль</label>
                <input type="password" name="password" id="password_input" class="field" id="password" placeholder="Пароль..." required>
            </div>
            <div class="form_field">
                <label for="confirm_password_input">Подтвердите пароль</label>
                <input type="password" name="confirm_password" id="confirm_password_input" class="field" id="confirmed_password" placeholder="Пароль..." required>
            </div>
            <div class="form_field">
                <label for="birthday">Дата рождения</label>
                <input type="date" name="birthday" id="birthday" class="field" id="birthday" required>
            </div>
            <div class="form_field">
                <label for="phone">Номер телефона</label>
                <input type="tel" name="phone" id="phone" class="field" id="phone" placeholder="89999999999" required>
            </div>
            <div class="checkbox_form_field">
                <input type="checkbox" name="user_type" id="user_type">
                <label for="user_type">Я продавец</label>
            </div>
            <input type="submit" value="Регистрация" id="register_btn">
        </form>
        <p class="question">Уже есть аккаунт?<br><a href="login.php" class="enter_link">Войти</a></p>
    </div>
    <div class="empty_container"></div>
    <script src="scripts/registration.js"></script>
</body>
</html>