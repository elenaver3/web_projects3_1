<!DOCTYPE html>
<html lang="ru">
<?php
    date_default_timezone_set('Europe/Moscow');
    $title = "Верстова Е.В. 221-361. Лабораторная 3"
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title><?php echo $title;?></title>
</head>
<body>
    <header>
        <nav>
            <ul class="ul-menu">
                <li class="menu main-page"><a href="index.php">Моя страница</a></li>
                <li class="menu"><a href="index.php">Главная</a></li>
                <li class="menu"><a href="form.php">Оставить заявку</a></li>
                <li class="menu authorization"><a href="authorization.php">Вход</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Форма авторизации</h1>
        <section class="text">
            <h2>Войти</h2>
            <p>
                Здесь вы зайти на сайт под своей учетной записью.
            </p>
        </section>
        <section class="authorization_section">
            <form name="authorization" method="POST" action="https://httpbin.org/post">
                <p class="text_input">Логин</p>
                <p><input type="text" name="login"></p>
                <p class="text_input">Пароль</p>
                <p><input type="password" name="password"></p>
                <p><input type="checkbox" name="check_remember" class="check">Запомнить меня</p>
                <p><input type="submit" name="submit" class="button"></p>
            </form>
        </section>
        <section class="text">
            <h2>Изображения</h2>
        </section>
        <section class="image_section" style="margin-bottom: 40px">
            <img src="images/cat_autho.jpg" alt="Кот" height="300px">
            <img src="images/cat4.jpg" alt="Кот2" height="300px">
        </section>
    </main>
    <footer>
        <div class="container">
            <p>
                Почта: e.v.verstova@mail.ru<br>
                Контактный телефон: +7(929)659-32-57<br>
                © Верстова Елена, 2023<br>
                <?php echo 'Сформировано ', date("d.m.Y"), ' в ', date("H:i:s");?>
            </p>
        </div>
    </footer>
</body>
</html>