<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Moiseikin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
<div class="header">

    <div id="main_header">МОИСЕЙКИН</div>

    <ul class="menu">
        <li><a href="../index.html">Главная</a></li>
        <li><a href="catalog.php">Каталог</a></li>
        <li><a href="contacts.php">Контакты</a></li>
    </ul>

</div>

<h1>КОНТАКТЫ</h1>

<form action="comments.php" method="post" class="feedback">

    <fieldset>

        <legend><b>Напишите нам</b></legend>
        <input type="text"  placeholder="Введите ваше имя" name="name"/> <br>
        <input type="email"  placeholder="Введите Ваш email" name="email"/> <br>
        <input type="text" placeholder="Тема сообщения"/ name="head"> <br>

        <label for="head0"><b>Суть вашего письма</b></label> <br>
        <textarea name="message" id="head0"></textarea> <br>

        <!--<label for="head1"><b>Оцените качесвтво сайта</b></label> <br>
        <input type="radio" name="оценка" value="1" id="head1" class="ratio"/> 1
        <input type="radio" name="оценка" value="2" id="head2" class="ratio"/> 2
        <input type="radio" name="оценка" value="3" id="head3" class="ratio"/> 3
        <input type="radio" name="оценка" value="4" id="head4" class="ratio"/> 4
        <input type="radio" name="оценка" value="5" id="head5" class="ratio" checked/> 5
        <br>-->
        <label><b>Оцените качесвтво сайта</b></label>
        <div id="reviewStars-input">
            <input id="star-4" type="radio" name="quality" value="5"checked/>
            <label title="gorgeous" for="star-4"></label>

            <input id="star-3" type="radio" name="quality" value="4"/>
            <label title="good" for="star-3"></label>

            <input id="star-2" type="radio" name="quality" value="3" />
            <label title="regular" for="star-2"></label>

            <input id="star-1" type="radio" name="quality" value="2"/>
            <label title="poor" for="star-1"></label>

            <input id="star-0" type="radio" name="quality" value="1"/>
            <label title="bad" for="star-0"></label>
        </div>

        <input type="submit" value="отправить"/>

    </fieldset>

</form>

<h1>АДРЕС</h1>

<b>ТЕЛЕФОН:</b> +7(982)212-63-59 <br>
<b>АДРЕС:</b> г. Екатеринбург, ул. Радищева д. 60 <br>
<b>EMAIL:</b> example@gmail.com <br> <br>

<script type="text/javascript" charset="utf-8" async
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acc67fb07132f61017e52140df09616570017eb1047d75523dc2955eac5c58eb0&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>

<div class="footer">
    <div>&copy; "Все права защищены"</div>
</div>

</div>

</body>
</html>
