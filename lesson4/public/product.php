<?php
include_once("config.php");
$sql = "SELECT id, name, price, material, idate, description, image FROM products WHERE id=".$_GET["id"];
$res = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Moiseikin</title>
    <link rel="stylesheet" href="../css/style.css">
	
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
	<h1 align="center"><?=$data[name]?> - <i>модный уральский</i> сувенир</h1>
	<br/>
	<a href="picture1.html" target="_blank">
		<div class="picture_div"><img src="<?=$data[image]?>"></div>
	</a>
	<h2 class="productheader">Описание:</h2>
	<p id="producttext1"><?=$data[description]?></p>
    <a class="button11 productCost" href="#"><?=$data[price]?>&#8381;</a>
	<h2 class="productheader1">Характеристики товара:</h2>
	<table>
		<thead>
			<tr class="table_head">
				<th>№</th>
				<th>Характеристика</th>
				<th>Величина</th>
				<th>Единицы <br> Измерения</th>
				<th>Могут <br> Варьироваться</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th><img src="../images2/ul2.png" alt="№"></th>
				<th>Цена</th>
				<th class="table_cost productCost" title="Только до 10 августа"><?=$data[price]?></th>
				<th>&#8381;</th>
				<th rowspan="3"><img src="../images2/check.png" alt="галочка"></th>
			</tr>
			<tr>
				<th><img src="../images2/ul2.png" alt="№"></th>
				<th>Длина</th>
				<th>50</th>
				<th rowspan="3">мм</th>
			</tr>
			<tr>
				<th><img src="../images2/ul2.png" alt="№"></th>
				<th>Ширина</th>
				<th>45</th>
			</tr>
			<tr>
				<th><img src="../images2/ul2.png" alt="№"></th>
				<th>Высота</th>
				<th>17</th>
				<th rowspan="2"><img src="../images2/-.png" alt="галочка"></th>
			</tr>
			<tr>
				<th><img src="../images2/ul2.png" alt="№"></th>
				<th>Материал</th>
				<th colspan="2" id="material"><?=$data[material]?></th>
			</tr>
		</tbody>
	</table>
	<h2 class="productheader1">Подробное описание товара</h2>
	<p id="producttext2">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa doloremque ea eum eveniet quaerat quis.
    At culpa doloribus, dolorum esse impedit maxime minima necessitatibus, nemo nihil nostrum obcaecati omnis provident
    sequi suscipit temporibus tenetur voluptatum! Dignissimos minus nobis quam.
	</p>
	<div class="footer">
		<div>&copy; "Все права защищены"</div>
	</div>
</div>
<script src="bascket.js"></script>
</body>
</html>