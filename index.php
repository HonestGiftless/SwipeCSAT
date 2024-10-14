<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Основная страница</title>
    <link rel="stylesheet" href="styles/index.css">

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
        <div class="logo_container header_container">
            <a href="index.php">
                <img src="img/logo.svg" alt="Logotype" class="logo">
            </a>
        </div>
        <a href="login.php" class="products header_container">Товары</a>
        <a href="login.php" class="popular header_container">Самое популярное</a>
        <a href="login.php" class="seller header_container">Топ продавцы</a>
        <div class="empty_container header_container"></div>
    </header>
    <main>
        <div class="description_container">
            <div class="nested_description_container">
                <h1 class="name">Swipe CSAT:</h1>
                <p class="describe_p">отзывы, которые<br>меняют игру</p>
                <button class="start_btn" id="start_btn">Начать</button>
            </div>
        </div>
        <div class="image_container">
            <img src="img/humans.svg" alt="humans icon" class="humans_icon">
        </div>
        <div class="about_container">
            <button class="about_btn" id="about_btn">О нас</button>
        </div>
    </main>
    <script src="scripts/index.js"></script>
</body>
</html>