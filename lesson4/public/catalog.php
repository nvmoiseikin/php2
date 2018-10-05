<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Moiseikin</title>
    <link rel="stylesheet" href="../css/style.css">
	<script src="https://use.fontawesome.com/e0b1a07d69.js"></script>
	<script src="../js/jquery.js"></script>
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
	<div class="catalogBascket">
		<div class="catalogHead">КАТАЛОГ</div>
		<form class="form" action="" method="post">
			<input type="hidden" name="crud" value='1'>
			<input id="catalogCRUD" type="submit" value='CRUD'>			
		</form>
		<ul class="bascketHead">
			<p>Корзина &nbsp; <b id="bascketN">0</b></p>
			<ul class="bascketInsight">
				<li id="sum">Сумма:&nbsp; 0&nbsp;&#8381;</li>
			</ul>
		</ul>
	</div>
	<div class="catalog">
	<?php
		include_once("config.php");
		
		if ($_POST["crud"] == 1) {include_once("CRUDstart.php");}
		else {include_once("productsInclude.php");}
	?>
	</div>
	<div class="footer">
		<div>&copy; "Все права защищены"</div>
	</div>
</div>
<script src="../js/bascket2.js"></script>
</body>
</html>