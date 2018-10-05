<?php
include_once("config.php");

$lastId = $_POST["clicks"]* amountProductsInBlock;
$newFirstId = $lastId - amountProductsInBlock;

$sql = "SELECT id, name, price, material, idate, description, image FROM products WHERE id>$newFirstId AND id<=$lastId";

$res = mysqli_query($connect, $sql);

while ($data = mysqli_fetch_assoc($res)){
	echo '<div class="product-wrap">';
		echo '<div class="product-item">';
			echo "<img src='".$data[image]."'>";
			echo '<div class="product-buttons">';
				echo '<span  class="buttonProduct1 button1 button">В корзину</span>';
			echo '</div>';
		echo '</div>';
		echo '<div class="product-title">';
			echo '<a href="product.php?id='.$data[id].'">'.$data[name].'</a>';
			echo '<span class="product-price">'.$data[material].'<br><b>&#8381; '.$data[price].'</b></span>';
		echo '</div>';
	echo '</div>';
}



