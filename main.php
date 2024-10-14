<h3?php

    require_once 'connection/database.php';

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/main.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo_header">
            <img src="img/logo2.svg" alt="Logotype" class="logo_image">
        </div>
        <div class="filter_header">
            <form class="finder_form">
                <input type="text" placeholder="Поиск" class="finder_input">
                <button type="submit" class="finder_button"></button>
                <img src="img/filters.svg" alt="Filter icon" class="filter_image">
            </form>
        </div>
        <div class="profile_container">
            <a href="#">
                <img src="img/profile.svg" alt="Profile icon" class="profile_image">
            </a>
        </div>
    </header>
    <div class="navigation_container">
        <a href="main.php">Главная</a>
        <a href="#">Самое популярное</a>
        <a href="#">Топ продавцы</a>
    </div>
    <main>
        <div class="product_card">
            <div class="product_image">
                <img src="img/restaurant.jpg" alt="Product photo" class="photo">
            </div>
            <div class="product_info">
                <h3 class="product_name">Товар №1</h3>
                <p class="product_description">Описание описание описание описание описание описание описание описание описание описание</p>
                <div class="product_type_container">
                    <h3 class="product_type_header">Тип товара:</h3>
                    <p class="product_type">Ресторан</p>
                </div>
                <div class="product_grade">
                    <h3 class="grade_info">Средняя оценка заведения:</h3>
                    <div class="grade_circle">4.3</div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>