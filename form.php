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
                <li class="menu main-page">
                    <a href=" <?php	
                        $name='Моя страница'; 
                        $link='index.php';
                        $current_page=false;	
                        echo $link;	
                        ?>"
                            <?php if( $current_page )	
                                echo ' class="selected_menu"';?>
                        >
                        
                        <?php
                            echo $name;	
                        ?>
                        
                    </a>
                </li>
                <li class="menu">
                    <a href=" <?php	
                        $name='Главная'; 
                        $link='index.php';
                        $current_page=false;	
                        echo $link;	
                        ?>"
                            <?php if( $current_page )	
                                echo ' class="selected_menu"';?>
                        >
                        
                        <?php
                            echo $name;	
                        ?>
                    </a>
                </li>
                <li class="menu">
                    <a href=" <?php	
                        $name='Оставить заявку'; 
                        $link='form.php';
                        $current_page=true;	
                        echo $link;	
                        ?>"
                            <?php if( $current_page )	
                                echo ' class="selected_menu"';?>
                        >
                        
                        <?php
                            echo $name;	
                        ?>
                    </a>
                </li>
                <li class="menu">
                    <a href=" <?php	
                        $name='Вход'; 
                        $link='authorization.php';
                        $current_page=false;	
                        echo $link;	
                        ?>"
                            <?php if( $current_page )	
                                echo ' class="selected_menu"';?>
                        >
                        
                        <?php
                            echo $name;	
                        ?>
                    </a>
                </li>

            </ul>
        </nav>
    </header>
    <main>
        <h1>Форма заявки</h1>
        <section class="text">
            <h2>Оставить обращение</h2>
            <p>
                Здесь вы можете направить нам запрос по интересующей Вас теме.
            </p>
        </section>
        <section class="request_section">
            
            <form name="request" method="POST" action="https://httpbin.org/post">
                <p class="head">ФИО</p>
                <p><input type="text" name="fio"></p>
                <p class="head">Email</p>
                <p><input type="text" name="email"></p>
                <p class="head">Откуда узнали о нас?</p>
                
                <p><input type="radio" name="group1" value="Реклама в интернете">Реклама в интернете</p>
                <p><input type="radio" name="group1" value="Совет друга">Совет друга</p>
                <p><input type="radio" name="group1" value="Другое">Другое</p>
        
                <p>
                    <select name="type_request" class="text_block">
                        <option disabled selected>Выберите тип обращения</option>
                        <option value="1">Жалоба</option>
                        <option value="2">Предложение</option>
                    </select>
                </p>
                <textarea name="text_area" cols="30" rows="10"></textarea>
                <p><input type="file" name="file"></p>
                <p><input type="checkbox" name="check1" class="approval">Даю согласие на обработку персональных данных</p>
                <p><input type="submit" name="submit" class="button"></p>
            </form>
        </section>
        <section class="text">
            <h2>Изображения</h2>
        </section>
        <section class="image_section" style="margin-bottom: 40px">
            <img src="images/cat_req.jpg" alt="Кот" height="300px">
            <img src="images/cat3.jpg" alt="Кот2" height="300px">
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